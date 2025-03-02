<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Entity\Post;
use App\Form\CommentaireType;
use App\Repository\CommentaireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Psr\Log\LoggerInterface;


#[Route('/commentaire')]
final class CommentaireController extends AbstractController
{
    private HttpClientInterface $httpClient;
    private string $sightengineUser;
    private string $sightengineSecret;

    public function __construct(HttpClientInterface $httpClient, string $sightengineUser, string $sightengineSecret)
    {
        $this->httpClient = $httpClient;
        $this->sightengineUser = $sightengineUser;
        $this->sightengineSecret = $sightengineSecret;
    }

     #[Route(name: 'app_commentaire_index', methods: ['GET'])]
     public function index(CommentaireRepository $commentaireRepository): Response
    {
         return $this->render('commentaire/index.html.twig', [
             'commentaires' => $commentaireRepository->findAll(),
        ]);
     }

    #[Route('/new/{postId}', name: 'app_commentaire_new', methods: ['GET', 'POST'])]
public function new(
    Request $request, 
    EntityManagerInterface $entityManager, 
    HttpClientInterface $httpClient, 
    LoggerInterface $logger,
    int $postId
): Response {
    $post = $entityManager->getRepository(Post::class)->find($postId);
    if (!$post) {
        throw $this->createNotFoundException("Le post n'existe pas.");
    }

    $commentaire = new Commentaire();
    $commentaire->setPost($post);
    $form = $this->createForm(CommentaireType::class, $commentaire);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $commentText = $commentaire->getMessage();
        $isBlocked = false; // Par défaut, le commentaire est valide

        // Vérification avec Sightengine
        try {
            $response = $httpClient->request('POST', 'https://api.sightengine.com/1.0/text/check.json', [
                'body' => [
                    'text' => $commentText,
                    'lang' => 'fr',
                    'categories' => 'profanity,personal,spam,violence,drug,weapon,extremism',
                    'mode' => 'rules',
                    'api_user' => $this->sightengineUser,
                    'api_secret' => $this->sightengineSecret,
                ],
            ]);

            $output = $response->toArray();
            $logger->info('Réponse de Sightengine', ['response' => $output]); 

            // Vérification des catégories interdites
            $blockedCategories = explode(',', $_ENV['SIGHTENGINE_CATEGORIES']);
            foreach ($blockedCategories as $category) {
                if (!empty($output[$category]['matches'])) {
                    $isBlocked = true;
                    $logger->warning("Commentaire marqué comme inapproprié à cause de {$category}");
                    break;
                }
            }
        } catch (\Exception $e) {
            $logger->error('Erreur API Sightengine', ['exception' => $e]);
            $this->addFlash('danger', 'Une erreur est survenue lors de la vérification.');
            return $this->redirectToRoute('front_posts');
        }

        // Marquer le commentaire comme inapproprié
        $commentaire->setIsInappropriate($isBlocked);
        $entityManager->persist($commentaire);
        $entityManager->flush();

        // Affichage du message
        if ($isBlocked) {
            $this->addFlash('danger', 'Votre commentaire est inapproprié et ne sera pas affiché.');
        } else {
            $this->addFlash('success', 'Votre commentaire a été publié avec succès.');
        }

        return $this->redirectToRoute('front_posts');
    }

    return $this->render('commentaire/new.html.twig', [
        'commentaire' => $commentaire,
        'form' => $form,
    ]);
}

    
    #[Route('/{id}', name: 'app_commentaire_show', methods: ['GET'])]
    public function show(Commentaire $commentaire): Response
    {
        return $this->render('commentaire/show.html.twig', [
            'commentaire' => $commentaire,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_commentaire_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Commentaire $commentaire, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_commentaire_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('commentaire/edit.html.twig', [
            'commentaire' => $commentaire,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_commentaire_delete', methods: ['POST'])]
    public function delete(Request $request, Commentaire $commentaire, EntityManagerInterface $entityManager): Response
    {
        $postId = $commentaire->getPost()->getId();
        
        if ($this->isCsrfTokenValid('delete'.$commentaire->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($commentaire);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_commentaire_index', [], Response::HTTP_SEE_OTHER);
    }
}
