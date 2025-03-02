<?php

namespace App\Controller;
use App\Entity\Livraison;
use App\Form\LivraisonType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Produit;
use App\Form\Produit1Type;
use App\Entity\Categorie;
use App\Form\CategorieType;
use App\Repository\ProduitRepository;
use App\Repository\CategorieRepository; 
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\LivraisonRepository;
use App\Repository\CollecteRepository;
use App\Repository\DepotRepository;
use App\Repository\CommandeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Commande;
use App\Form\CommandeType;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Pusher\Pusher;
use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

final class PageController extends AbstractController
{
    #[Route('/back/order', name: 'back_order')]
    public function indexo(
        CommandeRepository $commandeRepository,
        LivraisonRepository $livraisonRepository,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        // Handling Commande Form
        $commande = new Commande();
        $commandeForm = $this->createForm(CommandeType::class, $commande);
        $commandeForm->handleRequest($request);

        if ($commandeForm->isSubmitted() && $commandeForm->isValid()) {
            $entityManager->persist($commande);
            $entityManager->flush();

            return $this->redirectToRoute('back_order', [], Response::HTTP_SEE_OTHER);
        }

        // Handling Livraison Form
        $livraison = new Livraison();
        $livraisonForm = $this->createForm(LivraisonType::class, $livraison);
        $livraisonForm->handleRequest($request);

        if ($livraisonForm->isSubmitted() && $livraisonForm->isValid()) {
            // Assign Commande to Livraison (Ensure it's linked)
            $commandeId = $request->request->get('commande_id'); // Get selected Commande ID from form
            if ($commandeId) {
                $commande = $commandeRepository->find($commandeId);
                if ($commande) {
                    $livraison->setCommande($commande);
                }
            }

            // Ensure type is set before calculating prix
            if (!$livraison->getMode()) {
                throw new \Exception('Type of delivery must be selected');
            }

            // Calculate price
            $livraison->calculatePrix();

            $entityManager->persist($livraison);
            $entityManager->flush();

            return $this->redirectToRoute('back_order', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('backend/order.html.twig', [
            'controller_name' => 'PageController',
            'commandes' => $commandeRepository->findAll(),
            'livraisons' => $livraisonRepository->findAll(),
            'commandeForm' => $commandeForm->createView(),
            'livraisonForm' => $livraisonForm->createView(),
        ]);
    }


    //Change controller
    #[Route('/back/dropoff', name: 'back_dropoff')]
    public function indexd(CollecteRepository $collecteRepository, DepotRepository $depotRepository): Response
    {
        return $this->render('backend/dropoff.html.twig', [
            'controller_name' => 'PageController',
            'depots' => $depotRepository->findAll(),
            'collectes' => $collecteRepository->findAll(),
        ]);
    }

    //Change controller
    #[Route('/back/blog', name: 'back_blog')]
    public function indexb(): Response
    {
        return $this->render('backend/blog.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    //Change controller
    #[Route('/back/event', name: 'back_event')]
    public function indexe(): Response
    {
        return $this->render('backend/event.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    //gestion produit back  /////////////////////////////////////////////////////////////////
               //add//
#[Route('/back/products', name: 'back_products', methods: ['GET', 'POST'])]
public function manageProducts(
    Request $request, 
    EntityManagerInterface $entityManager, 
    ProduitRepository $produitRepository
): Response {
    $produit = new Produit();
    $form = $this->createForm(Produit1Type::class, $produit);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $imageFile = $form->get('image')->getData();

        if ($imageFile) {
            $uploadsDir = $this->getParameter('uploads_directory');

            if (!is_dir($uploadsDir)) {
                mkdir($uploadsDir, 0775, true);
                chmod($uploadsDir, 0775);
            }

            $newFilename = uniqid() . '.' . $imageFile->guessExtension();
            $imageFile->move($uploadsDir, $newFilename);
            $produit->setImage($newFilename);
        }

        $entityManager->persist($produit);
        $entityManager->flush();

        return $this->redirectToRoute('back_products');
    }

    return $this->render('backend/produits.html.twig', [
        'produits' => $produitRepository->findAll(),
        'form' => $form->createView(),
    ]);
}

#[Route('/back/categories', name: 'back_categories', methods: ['GET', 'POST'])]
public function manageCategories(
    Request $request, 
    EntityManagerInterface $entityManager, 
    CategorieRepository $categorieRepository,
    ParameterBagInterface $params // Injection du service ParameterBagInterface
): Response {
    $categorie = new Categorie();
    $form = $this->createForm(CategorieType::class, $categorie);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->persist($categorie);
        $entityManager->flush();

        // Utilisation des variables d'environnement via ParameterBagInterface
        $pusher = new Pusher(
            $params->get('PUSHER_APP_KEY'),
            $params->get('PUSHER_APP_SECRET'),
            $params->get('PUSHER_APP_ID'),
            [
                'cluster' => 'eu',
                'useTLS' => true
            ]
        );

        // Envoi de la notification via Pusher
        $pusher->trigger('notifications', 'nouvelle-categorie', [
            'message' => "Une nouvelle catégorie a été ajoutée : " . $categorie->getNom()
        ]);

        // Message flash de succès
        $this->addFlash('success', 'La catégorie a été ajoutée avec succès.');

        // Rediriger vers la page de gestion des catégories
        return $this->redirectToRoute('back_categories');
    }

    $categoriesWithStats = $categorieRepository->findCategoriesWithProductCount();

    // Affichage de la page backend de gestion des catégories
    return $this->render('backend/categories.html.twig', [
        'categories' => $categorieRepository->findAll(),
        'categoriesWithStats' => $categoriesWithStats,
        'form' => $form->createView(),
    ]);
}
               ///supprimer catégorie///////////
#[Route('/cat/delet/{id}', name: 'back_categorie_delete', methods: ['POST'])]
public function deletecat(Request $request, Categorie $categorie, EntityManagerInterface $entityManager): Response
{
    if ($this->isCsrfTokenValid('delete' . $categorie->getId(), $request->request->get('_token'))) {
        $entityManager->remove($categorie);
        $entityManager->flush();
    }

    return $this->redirectToRoute('back_categories');
}
            ///////supprimer produit///
#[Route('/back/products/{id}', name: 'back_produit_delete', methods: ['POST'])]
public function deletepro(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
{
    if ($this->isCsrfTokenValid('delete' . $produit->getId(), $request->request->get('_token'))) {
        $entityManager->remove($produit);
        $entityManager->flush();
    }

    return $this->redirectToRoute('back_products');
}

        /////////modifier produit///////////
        #[Route('/back/products/{id}/edit', name: 'back_produit_edit', methods: ['GET', 'POST'])]
        public function editpro(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
        {
            // Création du formulaire de modification
            $form = $this->createForm(Produit1Type::class, $produit);
            $form->handleRequest($request);
        
            if ($form->isSubmitted() && $form->isValid()) {
                // Récupérer le fichier image (s'il y en a un)
                $imageFile = $form->get('image')->getData();
        
                // Si un fichier image a été téléchargé, le traiter
                if ($imageFile) {
                    // Dossier où les images seront stockées
                    $editproduitsDir = $this->getParameter('editproduit_directory');
        
                    // Vérifie si le dossier existe, sinon le créer
                    if (!is_dir($editproduitsDir)) {
                        mkdir($editproduitsDir, 0775, true);
                        chmod($editproduitsDir, 0775);
                    }
        
                    // Génère un nom unique pour l'image
                    $newFilename = uniqid() . '.' . $imageFile->guessExtension();
        
                    // Déplace le fichier téléchargé dans le dossier
                    $imageFile->move($editproduitsDir, $newFilename);
        
                    // Supprime l'ancienne image si elle existe
                    if ($produit->getImage()) {
                        $oldImagePath = $editproduitsDir . '/' . $produit->getImage();
                        if (file_exists($oldImagePath)) {
                            unlink($oldImagePath); // Supprimer l'ancienne image
                        }
                    }
        
                    // Met à jour le nom de l'image du produit
                    $produit->setImage($newFilename);
                }
        
                // Sauvegarder les changements en base de données
                $entityManager->flush();
        
                // Redirection vers la liste des produits après la modification
                return $this->redirectToRoute('back_products');
            }
        
            // Si le formulaire n'est pas soumis ou valide, on rend le formulaire de modification
            return $this->render('produitcon/backedit.html.twig', [
                'form' => $form->createView(),
                'produit' => $produit,
            ]);
        }
        
        
        
        
                    /////////////modifier categorie/////////////
#[Route('/back/categorie/{id}/edit', name: 'back_categorie_edit', methods: ['GET', 'POST'])]
public function editcat(Request $request, Categorie $categorie, EntityManagerInterface $entityManager): Response
{  $form = $this->createForm(CategorieType::class, $categorie);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->flush();
        return $this->redirectToRoute('back_categories', [], Response::HTTP_SEE_OTHER);
    }
    return $this->render('categorie/backedit.html.twig', [
        'categorie' => $categorie,
        'form' => $form->createView(),
    ]);
}


    //Change controller
    #[Route('/back/user', name: 'back_user')]
    public function index(): Response
    {
        return $this->render('backend/user.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }



    //front
    #[Route('/front/order', name: 'front_order')]
    public function indexof(CommandeRepository $commandeRepository, LivraisonRepository $livraisonRepository): Response
    {
        return $this->render('frontend/order.html.twig', [
            'controller_name' => 'PageController',
            'commandes' => $commandeRepository->findAll(),
            'livraisons' => $livraisonRepository->findAll(),
        ]);
    }

    //Change controller
    #[Route('/front/dropoff', name: 'front_dropoff')]
    public function indexdf(CollecteRepository $collecteRepository, DepotRepository $depotRepository): Response
    {
        return $this->render('frontend/dropoff.html.twig', [
            'controller_name' => 'PageController',
            'depots' => $depotRepository->findAll(),
            'collectes' => $collecteRepository->findAll(),
        ]);
    }

    //Change controller
    #[Route('/front/blog', name: 'front_blog')]
    public function indexbf(): Response
    {
        return $this->render('backend/blog.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    //Change controller
    #[Route('/front/event', name: 'front_event')]
    public function indexef(): Response
    {
        return $this->render('backend/event.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }




    
    //Change controller
    #[Route('/front/products', name: 'front_products', methods: ['GET'])]
    public function frontIndex(CategorieRepository $categorieRepository): Response {
        return $this->render('frontend/products.html.twig', [
            'categories' => $categorieRepository->findAll(),
        ]);
    }

    #[Route('/front/products/categorie/{id}', name: 'produits_par_categorie', methods: ['GET'])]
    public function produitsParCategorie(
        ProduitRepository $produitRepository,
        Categorie $categorie,
        PaginatorInterface $paginator,
        Request $request
    ): Response {
        // Récupérer les produits de la catégorie
        $produitsQuery = $produitRepository->createQueryBuilder('p')
            ->where('p.categorie = :categorie')
            ->setParameter('categorie', $categorie)
            ->getQuery();
    
        // Paginer les produits
        $produits = $paginator->paginate(
            $produitsQuery, // Requête à paginer
            $request->query->getInt('page', 1), // Numéro de page par défaut
            6 // Nombre d'éléments par page
        );
    
        return $this->render('frontend/produits_filtrés.html.twig', [
            'produits' => $produits,
        ]);
    }
    //Change controller
    #[Route('/front/user', name: 'back_user')]
    public function indexf(): Response
    {
        return $this->render('backend/user.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
}
