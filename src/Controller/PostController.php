<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\PostType;
use App\Repository\PostRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;

#[Route('/post')]
final class PostController extends AbstractController
{
    #[Route('/', name: 'app_post_index', methods: ['GET'])]
    public function index(PostRepository $postRepository): Response
    {
        return $this->render('post/index.html.twig', [
            'posts' => $postRepository->findAll(),
        ]);
    }
      
    #[Route('/new', name: 'app_post_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, ParameterBagInterface $params): Response
    {
        $post = new Post();
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();
    
            if ($imageFile) {
                // Vérification du type MIME
                $allowedMimeTypes = ['image/jpeg', 'image/png', 'image/webp', 'image/gif'];
                if (!in_array($imageFile->getMimeType(), $allowedMimeTypes)) {
                    $this->addFlash('danger', 'Format d\'image non valide. Utilisez JPEG, PNG, WEBP ou GIF.');
                    return $this->redirectToRoute('app_post_new');
                }
    
                // Vérification de l'extension
                $extension = $imageFile->guessExtension();
                if (!$extension) {
                    $this->addFlash('danger', 'Impossible de déterminer l\'extension du fichier.');
                    return $this->redirectToRoute('app_post_new');
                }
    
                // Définition du chemin d'upload
                $imagesDir = $params->get('images_directory'); // Doit être défini dans services.yaml
    
                // Création du dossier si inexistant
                $filesystem = new Filesystem();
                if (!$filesystem->exists($imagesDir)) {
                    try {
                        $filesystem->mkdir($imagesDir, 0775);
                    } catch (\Exception $e) {
                        $this->addFlash('danger', 'Erreur lors de la création du dossier images.');
                        return $this->redirectToRoute('app_post_new');
                    }
                }
    
                // Générer un nom unique
                $newFilename = uniqid() . '.' . $extension;
    
                try {
                    $imageFile->move($imagesDir, $newFilename);
                    $post->setImage($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('danger', 'Erreur lors de l\'upload de l\'image.');
                    return $this->redirectToRoute('app_post_new');
                }
            } else {
                // Définir une image par défaut si aucune image n'est téléchargée
                $post->setImage('default.png'); 
            }
    
            $entityManager->persist($post);
            $entityManager->flush();
    
            $this->addFlash('success', 'Post ajouté avec succès.');
            return $this->redirectToRoute('front_posts', [], Response::HTTP_SEE_OTHER);
        }
    
        return $this->render('post/new.html.twig', [
            'post' => $post,
            'form' => $form,
        ]);
    }
    

    
    #[Route('/{id}', name: 'app_post_show', methods: ['GET'])]
    public function show(Post $post): Response
    {
        return $this->render('post/show.html.twig', [
            'post' => $post,
        ]);
    }
    

    #[Route('/{id}/edit', name: 'app_post_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Post $post, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();

            if ($imageFile) {
                $uploadsDir = $this->getParameter('uploads_directory');
                $newFilename = uniqid() . '.' . $imageFile->guessExtension();

                try {
                    $imageFile->move($uploadsDir, $newFilename);
                    $post->setImage($newFilename);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Erreur lors de l\'upload de l\'image.');
                    return $this->redirectToRoute('app_post_edit', ['id' => $post->getId()]);
                }
            }

            $entityManager->flush();

            $this->addFlash('success', 'Post modifié avec succès.');

            return $this->redirectToRoute('app_post_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('post/edit.html.twig', [
            'post' => $post,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_post_delete', methods: ['POST'])]
    public function delete(Request $request, Post $post, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $post->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($post);
            $entityManager->flush();
            $this->addFlash('success', 'Post supprimé avec succès.');
        }

        return $this->redirectToRoute('app_post_index', [], Response::HTTP_SEE_OTHER);
    }

  
}
