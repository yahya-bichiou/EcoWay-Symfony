<?php
namespace App\Controller;

use App\Entity\Post;
use App\Entity\Commentaire;
use App\Form\PostType;
use App\Form\CommentaireType;
use App\Repository\PostRepository;
use App\Repository\CommentaireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;






final class PageController extends AbstractController
{
    ///////////////////////////// Gestion des Posts et Commentaires (Back Office) /////////////////////////////
    


// #[Route('/back/commentaires', name: 'back_commentaires', methods: ['GET', 'POST'])]
// public function indexcommentaires(
//     Request $request,
//     EntityManagerInterface $entityManager,
//     CommentaireRepository $commentaireRepository,
//     HttpClientInterface $httpClient,
//     LoggerInterface $logger
// ): Response {
//     $commentaire = new Commentaire();
//     $form = $this->createForm(CommentaireType::class, $commentaire);
//     $form->handleRequest($request);

//     if ($form->isSubmitted() && $form->isValid()) {
//         if ($request->request->get('form_type') === 'commentaire') {
//             $commentText = $commentaire->getMessage();
//             $isInappropriate = false;

//             try {
//                 // Vérification avec Sightengine
//                 $response = $httpClient->request('POST', 'https://api.sightengine.com/1.0/text/check.json', [
//                     'body' => [
//                         'text' => $commentText,
//                         'lang' => 'fr',
//                         'categories' => 'profanity,personal,spam,violence,drug,weapon,extremism',
//                         'mode' => 'rules',
//                         'api_user' => $_ENV['SIGHTENGINE_USER'],
//                         'api_secret' => $_ENV['SIGHTENGINE_SECRET'],
//                     ],
//                 ]);

//                 $output = $response->toArray();
//                 $logger->info('Réponse de Sightengine', ['response' => $output]);

//                 // Vérification des catégories interdites
//                 $blockedCategories = explode(',', $_ENV['SIGHTENGINE_CATEGORIES']);
//                 foreach ($blockedCategories as $category) {
//                     if (!empty($output[$category]['matches'])) {
//                         $isInappropriate = true;
//                         $logger->warning("Commentaire inapproprié détecté", ['category' => $category]);
//                         break;
//                     }
//                 }
//             } catch (\Exception $e) {
//                 $logger->error('Erreur lors de la vérification du commentaire', ['exception' => $e]);
//             }

//             // Mettre à jour le statut du commentaire
//             $commentaire->setIsInappropriate($isInappropriate);
//             $entityManager->persist($commentaire);
//             $entityManager->flush();

//             return $this->redirectToRoute('back_commentaires');
//         }
//     }

//     // Récupérer les commentaires
//     $commentaires = $commentaireRepository->findAll();

//     return $this->render('backend/commentaires.html.twig', [
//         'commentaires' => $commentaires, 
//         'form' => $form->createView(),
//     ]);
// }
#[Route('/back/commentaires', name: 'back_commentaires', methods: ['GET', 'POST'])]
public function indexcommentaires(
    Request $request,
    EntityManagerInterface $entityManager,
    CommentaireRepository $commentaireRepository,
    HttpClientInterface $httpClient
): Response {
    $commentaire = new Commentaire();
    $form = $this->createForm(CommentaireType::class, $commentaire);
    $form->handleRequest($request);

    // Vérification si l'admin modère un commentaire existant
    if ($request->isMethod('POST') && $request->request->has('commentaire_id')) {
        $commentaireId = (int) $request->request->get('commentaire_id');
        $commentaireModifie = $commentaireRepository->find($commentaireId);

        if ($commentaireModifie) {
            // Toggle du statut du commentaire
            $commentaireModifie->setIsInappropriate(!$commentaireModifie->getIsInappropriate());
            $entityManager->flush();

            $this->addFlash('success', 'Le statut du commentaire a été mis à jour.');
        } else {
            $this->addFlash('danger', 'Commentaire introuvable.');
        }

        return $this->redirectToRoute('back_commentaires');
    }

    // Ajout d'un commentaire
    if ($form->isSubmitted() && $form->isValid()) {
        $commentText = $commentaire->getMessage();
        $isInappropriate = false;

        try {
            // Vérification avec Sightengine
            $response = $httpClient->request('POST', 'https://api.sightengine.com/1.0/text/check.json', [
                'body' => [
                    'text' => $commentText,
                    'lang' => 'fr',
                    'categories' => 'profanity,personal,spam,violence,drug,weapon,extremism',
                    'mode' => 'rules',
                    'api_user' => $_ENV['SIGHTENGINE_USER'],
                    'api_secret' => $_ENV['SIGHTENGINE_SECRET'],
                ],
            ]);

            $output = $response->toArray();

            // Vérification des catégories interdites
            $blockedCategories = explode(',', $_ENV['SIGHTENGINE_CATEGORIES']);
            foreach ($blockedCategories as $category) {
                if (!empty($output[$category]['matches'])) {
                    $isInappropriate = true;
                    break;
                }
            }
        } catch (\Exception $e) {
            $this->addFlash('danger', 'Erreur lors de la vérification du commentaire.');
        }

        // Mettre à jour le statut du commentaire
        $commentaire->setIsInappropriate($isInappropriate);
        $entityManager->persist($commentaire);
        $entityManager->flush();

        $this->addFlash('success', 'Le commentaire a été ajouté avec succès.');
        return $this->redirectToRoute('back_commentaires');
    }

    // Récupérer les commentaires (suppression du tri par `createdAt`)
    $commentaires = $commentaireRepository->findAll();

    return $this->render('backend/commentaires.html.twig', [
        'commentaires' => $commentaires, 
        'form' => $form->createView(),
    ]);
}






#[Route('/back/commentaires/stats', name: 'back_commentaires_stats', methods: ['GET'])]
public function getCommentStats(CommentaireRepository $commentaireRepository, PostRepository $postRepository): JsonResponse
{
    // Récupérer les 5 articles les plus commentés
    $topPosts = $postRepository->createQueryBuilder('p')
        ->select('p.titre, COUNT(c.id) as nbCommentaires')
        ->leftJoin('p.commentaires', 'c')
        ->groupBy('p.id')
        ->orderBy('nbCommentaires', 'DESC')
        ->setMaxResults(5)
        ->getQuery()
        ->getResult();

    // Compter les commentaires valides vs inappropriés
    $validComments = $commentaireRepository->count(['isInappropriate' => false]);
    $invalidComments = $commentaireRepository->count(['isInappropriate' => true]);

    return new JsonResponse([
        'topPosts' => $topPosts,
        'validComments' => $validComments,
        'invalidComments' => $invalidComments,
    ]);
}


#[Route('/back/commentaires/stats/page', name: 'back_commentaires_stats_page', methods: ['GET'])]
public function showCommentStats(): Response
{
    return $this->render('backend/commentaire_stats.html.twig');
}










#[Route('/back/posts', name: 'back_posts', methods: ['GET', 'POST'])]
public function indexposts(
    Request $request,
    EntityManagerInterface $entityManager,
    PostRepository $postRepository
): Response {
    $post = new Post();
    $form = $this->createForm(PostType::class, $post);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        if ($request->request->get('form_type') === 'post') {
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $uploadsDir = $this->getParameter('uploads_directory');
                if (!is_dir($uploadsDir)) {
                    mkdir($uploadsDir, 0775, true);
                    chmod($uploadsDir, 0775);
                }
                $newFilename = uniqid() . '.' . $imageFile->guessExtension();
                $imageFile->move($uploadsDir, $newFilename);
                $post->setImage($newFilename);
            }
            $entityManager->persist($post);
            $entityManager->flush();

            return $this->redirectToRoute('back_posts');
        }
    }

    return $this->render('backend/post.html.twig', [
        'posts' => $postRepository->findAll(),
        'form' => $form->createView(),
    ]);
}


    ///////////////////////////// Suppression Commentaire /////////////////////////////
    #[Route('/back/commentaire/{id}', name: 'back_commentaire_delete', methods: ['POST'])]
    public function deleteCommentaire(Request $request, Commentaire $commentaire, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $commentaire->getId(), $request->request->get('_token'))) {
            $entityManager->remove($commentaire);
            $entityManager->flush();
        }
        return $this->redirectToRoute('back_commentaires');
    }

    ///////////////////////////// Suppression Post /////////////////////////////
    #[Route('/back/posts/{id}', name: 'back_post_delete', methods: ['POST'])]
    public function deletePost(Request $request, Post $post, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $post->getId(), $request->request->get('_token'))) {
            $entityManager->remove($post);
            $entityManager->flush();
        }
        return $this->redirectToRoute('back_posts');
    }

//     ///////////////////////////// Modification Post /////////////////////////////
//     #[Route('/back/posts/{id}/edit', name: 'back_post_edit', methods: ['GET', 'POST'])]
// public function editPost(Request $request, Post $post, EntityManagerInterface $entityManager): Response
// {
//     $form = $this->createForm(PostType::class, $post);
//     $form->handleRequest($request);

//     if ($form->isSubmitted() && $form->isValid()) {
//         // Gestion de l'image
//         $imageFile = $form->get('image')->getData();
//         if ($imageFile) {
//             $newFilename = uniqid().'.'.$imageFile->guessExtension();
//             $imageFile->move($this->getParameter('post_images_directory'), $newFilename);
//             $post->setImage($newFilename);
//         }

//         $entityManager->flush();

//         // Ajout d'un message flash pour l'utilisateur
//         $this->addFlash('success', 'Le post a été mis à jour avec succès.');

//         // Si c'est une requête AJAX, retourner un JSON
//         if ($request->isXmlHttpRequest()) {
//             return $this->json(['message' => 'Post mis à jour avec succès'], 200);
//         }

//         return $this->redirectToRoute('back_posts');
//     }

//     return $this->render('post/backedit.html.twig', [
//         'form' => $form->createView(),
//         'post' => $post,
//     ]);
// }

#[Route('/back/posts/{id}/edit', name: 'back_post_edit', methods: ['GET', 'POST'])]
public function editPost(
    Request $request,
    Post $post,
    EntityManagerInterface $entityManager
): Response {
    $form = $this->createForm(PostType::class, $post);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        if ($request->request->get('form_type') === 'edit') {
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $uploadsDir = $this->getParameter('edited_posts_directory'); // Nouveau répertoire pour les images éditées
                if (!is_dir($uploadsDir)) {
                    mkdir($uploadsDir, 0775, true);
                    chmod($uploadsDir, 0775);
                }
                $newFilename = uniqid() . '.' . $imageFile->guessExtension();
                $imageFile->move($uploadsDir, $newFilename);
                $post->setImage($newFilename);
            }
            $entityManager->flush();

            $this->addFlash('success', 'Le post a été mis à jour avec succès.');
            return $this->redirectToRoute('back_posts');
        }
    }

    return $this->render('post/backedit.html.twig', [
        'form' => $form->createView(),
        'post' => $post,
    ]);
}







    ///////////////////////////// Modification Commentaire /////////////////////////////
    #[Route('/back/commentaire/{id}/edit', name: 'back_commentaire_edit', methods: ['GET', 'POST'])]
    public function editCommentaire(Request $request, Commentaire $commentaire, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('back_posts');
        }

        return $this->render('commentaire/backedit.html.twig', [
            'form' => $form->createView(),
            'commentaire' => $commentaire,
        ]);
    }

    #[Route('/front/posts', name: 'front_posts', methods: ['GET'])]
    public function listPosts(
        Request $request,
        PostRepository $postRepository,
        CommentaireRepository $commentaireRepository
    ): Response {
        $query = trim($request->query->get('q', '')); // Récupération et nettoyage du paramètre de recherche
    
        if (!empty($query)) {
            $posts = $postRepository->createQueryBuilder('p')
                ->where('LOWER(p.titre) LIKE LOWER(:query)')
                ->orWhere('LOWER(p.description) LIKE LOWER(:query)')
                ->setParameter('query', '%' . $query . '%')
                ->getQuery()
                ->getResult();
        } else {
            $posts = $postRepository->findAll();
        }
    
        if (!$posts && !empty($query)) {
            $this->addFlash('danger', 'Aucun résultat trouvé pour "' . htmlspecialchars($query) . '".');
        }
    
        return $this->render('frontend/blog.html.twig', [
            'posts' => $posts,
            'commentaires' => $commentaireRepository->findBy(['isInappropriate' => false]),
            'query' => $query, // Pour conserver la recherche
        ]);
    }
    

    ///////////////////////////// Affichage d'un Post /////////////////////////////
    #[Route('/front/showpost/{id}', name: 'app_post_show', methods: ['GET'])]
    public function showPost(int $id, PostRepository $postRepository): Response
    {
        $post = $postRepository->find($id);
    
        if (!$post) {
            throw $this->createNotFoundException("Le post avec l'ID $id n'existe pas.");
        }
        // Récupérer les commentaires non inappropriés pour ce post
    $commentaires = $commentaireRepository->findBy([
        'post' => $post,
        'isInappropriate' => false
    ]);
    
        return $this->render('post/frontshow.html.twig', [
            'post' => $post,
        ]);
    }
    
}
