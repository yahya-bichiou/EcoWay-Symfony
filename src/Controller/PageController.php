<?php

namespace App\Controller;
use App\Entity\Livraison;
use App\Form\LivraisonType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\LivraisonRepository;
use App\Repository\CollecteRepository;
use App\Repository\DepotRepository;
use App\Repository\UserRepository;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Security\AuthAuthenticator;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use App\Repository\CommandeRepository;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Service\PdfGeneratorService;
use App\Entity\Post;
use App\Entity\Commentaire;
use App\Form\PostType;
use App\Form\CommentaireType;
use App\Repository\PostRepository;
use App\Repository\CommentaireRepository;
use App\Entity\Collecte;
use App\Entity\Depot;
use App\Entity\Produit;
use App\Form\Produit1Type;
use App\Entity\Categorie;
use App\Form\CategorieType;
use App\Repository\ProduitRepository;
use App\Repository\CategorieRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Pusher\Pusher;
use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Notifier\Notification\Notification;
use Symfony\Component\Notifier\Recipient\Recipient;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Notifier\Message\SmsMessage;
use Symfony\Component\Notifier\NotifierInterface;
use Symfony\Component\Notifier\Exception\TransportExceptionInterface;
use App\Entity\Commande;
use App\Form\CommandeType;
use Twilio\Rest\Client;
use App\Form\CollecteType;
use App\Form\DepotType;
use Doctrine\ORM\Mapping\Id;

final class PageController extends AbstractController
{
    #[Route('/front/home', name: 'home')]
    public function home(): Response {
        return $this->render('frontend/home.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    //-------------- ORDER ------------------//
    //Back Commande
    #[Route('/back/order/commandes', name: 'back_order_commandes')]
    public function indexoc(
        CommandeRepository $commandeRepository,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        // Handling Commande Form
        $commande = new Commande();
        $commandeForm = $this->createForm(CommandeType::class, $commande);
        $commandeForm->handleRequest($request);

        if ($commandeForm->isSubmitted() && $commandeForm->isValid()) {
            $produitsData = [];

            foreach ($commandeForm->get('produits')->getData() as $produitEntry) {
                if (!isset($produitEntry['produit'])) {
                    dump($produitEntry); // Debug what keys are present
                    die();
                }
                $produit = $produitEntry['produit'];
                $produitsData[] = [
                    'id' => $produit->getId(),
                    'nom' => $produit->getNom(),
                    'prix' => $produit->getPrix(),
                    'image' => $produit->getImage(), // Default image fallback
                    'quantity' => $produitEntry['quantity'],
                ];
            }
                $commande->setProduits($produitsData);
                $commande->calculateTotalPrice();
                $entityManager->persist($commande);
                $entityManager->flush();
                return $this->redirectToRoute('back_order_commandes');
            }

        return $this->render('backend/commandes.html.twig', [
            'controller_name' => 'PageController',
            'commandes' => $commandeRepository->findAll(),
            'commandeForm' => $commandeForm->createView(),
        ]);
    }

    //Back Livraison
    #[Route('/back/order/livraisons', name: 'back_order_livraisons')]
    public function indexol(LivraisonRepository $livraisonRepository): Response {
        return $this->render('backend/livraisons.html.twig', [
            'controller_name' => 'PageController',
            'livraisons' => $livraisonRepository->findAll(),
        ]);
    }

    #[Route('/back/order/add/livraisons', name: 'back_add_livraisons')]
    public function back_add_livraisons(
        CommandeRepository $commandeRepository,
        LivraisonRepository $livraisonRepository,
        Request $request,
        EntityManagerInterface $entityManager,
        NotifierInterface $notifier
    ): Response {
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

            $livraison->setStatus('en route');
            $livraison->calculatePrix();

            $entityManager->persist($livraison);
            $entityManager->flush();

            //SMS Bundle
            // ✅ SEND SMS AFTER DELIVERY CREATION
        $sid = 'AC4d8bf08758159a52a98d245462941f18';
        $token = 'e1bf36cc4e824523f3917c844f8f8415';
        $twilio = new Client($sid, $token);

        $message = $twilio->messages->create(
            "+21628615095",
            [
                "messagingServiceSid" => "MG7311126451454432e332e33e94dd896b",
                "body" => "Your order is being delivered!"
            ]
        );
            return $this->redirectToRoute('back_order_livraisons', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('livraison/add.html.twig', [
            'controller_name' => 'PageController',
            'livraisons' => $livraisonRepository->findAll(),
            'livraisonForm' => $livraisonForm->createView(),
        ]);
    }

    //Back Livraison Delete
    #[Route('l/{id}', name: 'livraison_delete', methods: ['POST'])]
    public function delete(Request $request, Livraison $livraison, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$livraison->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($livraison);
            $entityManager->flush();
        }

        return $this->redirectToRoute('back_order_livraisons', [], Response::HTTP_SEE_OTHER);
    }

    //Back Commande Delete
    #[Route('c/{id}', name: 'commande_delete', methods: ['POST'])]
    public function deletec(Request $request, Commande $commande, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commande->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($commande);
            $entityManager->flush();
        }

        return $this->redirectToRoute('back_order_commandes', [], Response::HTTP_SEE_OTHER);
    }

    //front
    #[Route('/front/order', name: 'front_order')]
    public function indexof(CommandeRepository $commandeRepository): Response
    {
            $commandes = $commandeRepository->findBy([
            'clientId' => 1,
            'status' => "non_confirmée"
        ]);

        return $this->render('frontend/order.html.twig', [
            'commandes' => $commandes,
        ]);

    }

    #[Route('/cart/update/{commandeId}/{productId}/{action}', name: 'cart_update_quantity', methods: ['POST'])]
    public function updateQuantity($commandeId, $productId, $action, CommandeRepository $commandeRepo, EntityManagerInterface $em): JsonResponse
    {
    $commande = $commandeRepo->find($commandeId);
    if (!$commande) {
        return new JsonResponse(['success' => false, 'message' => 'Commande not found']);
    }

    // Get current products from JSON field
    $produits = $commande->getProduits();
    foreach ($produits as &$produit) {
        if ($produit['id'] == $productId) {
            if ($action === "increase") {
                $produit['quantity']++;
            } elseif ($action === "decrease" && $produit['quantity'] > 1) {
                $produit['quantity']--;
            }
            break;
        }
    }

    // Update the Commande entity
    $commande->setProduits($produits);
    $em->persist($commande);
    $em->flush();

    return new JsonResponse(['success' => true, 'newQuantity' => $produit['quantity']]);
    }

    #[Route('/commande/{id}/invoice', name: 'commande_invoice')]
    public function generateInvoice( Commande $commande, PdfGeneratorService $pdfGeneratorService ): Response
    {
        // Convert Commande to an array format for the PDF
        $commandeData = [
            'id' => $commande->getId(),
            'clientId' => $commande->getClientId(),
            'date' => $commande->getDate()->format('Y-m-d'),
            'prix' => $commande->getPrix(),
            'produits' => $commande->getProduits(), // JSON field
        ];

        // Generate the PDF invoice
        $pdfPath = $pdfGeneratorService->generateInvoice($commandeData);

        // Return a downloadable response
        return $this->file($this->getParameter('kernel.project_dir') . '/public/' . $pdfPath);
    }

    #[Route('/front/order/remove-product/{commandeId}/{productId}', name: 'front_order_remove_product')]
    public function removeProduct(
        int $commandeId,
        int $productId,
        CommandeRepository $commandeRepository,
        EntityManagerInterface $entityManager
    ): Response {
        $commande = $commandeRepository->find($commandeId);
        $produits = $commande->getProduits();
        $produits = array_filter($produits, function ($produit) use ($productId) {
            return $produit['id'] !== $productId;
        });
        $commande->setProduits(array_values($produits));
        $commande->calculateTotalPrice();
        $entityManager->persist($commande);
        $entityManager->flush();
        return $this->redirectToRoute('front_order');
    }

    #[Route('/front/order/add-product/{productId}', name: 'front_order_add_product')]
public function front_order_add_product(
    $productId,
    EntityManagerInterface $entityManager,
    CommandeRepository $commandeRepository
): Response {
    // Simulating a logged-in user with ID 1 (Replace with actual user logic)
    $userId = 1;

    // Check if a Commande with status "non_confirmée" exists for the user
    $commande = $commandeRepository->findOneBy([
        'clientId' => $userId,
        'status' => 'non_confirmée'
    ]);

    // If no such Commande exists, create a new one
    if (!$commande) {
        $commande = new Commande();
        $commande->setClientId($userId);
        $commande->setDate(new \DateTime());
        $commande->setStatus('non_confirmée');
        $commande->setPrix(0);
        $commande->setModePaiement('carte');
        $commande->setProduits([]); // Initialize an empty array for products
        $entityManager->persist($commande);
    }

    // Get the selected product
    $product = $entityManager->getRepository(Produit::class)->find($productId);

    if (!$product) {
        throw $this->createNotFoundException('Product not found');
    }

    // Get existing products from the commande (stored as JSON)
    $existingProducts = $commande->getProduits() ?? [];

    // Check if the product already exists in the list
    $found = false;
    foreach ($existingProducts as &$existingProduct) {
        if ($existingProduct['id'] === $product->getId()) {
            $existingProduct['quantity'] += 1; // Increment quantity
            $found = true;
            break;
        }
    }

    // If product is not found, add it as a new entry
    if (!$found) {
        $existingProducts[] = [
            'id' => $product->getId(),
            'nom' => $product->getNom(),
            'prix' => $product->getPrix(),
            'image' => $product->getImage(),
            'quantity' => 1, // Default quantity
        ];
    }

    // Update the commande's produits field
    $commande->setProduits($existingProducts);
    $commande->calculateTotalPrice(); // Ensure this method calculates total price correctly

    $entityManager->persist($commande);
    $entityManager->flush();

    // Optionally add a flash message
    $this->addFlash('success', 'Product added to your order.');

    return $this->redirectToRoute('front_order'); // Replace with your actual order summary route
}










    //-------------- DROPOFF ------------------//
    #[Route('/back/dropoff/depots', name: 'back_dropoff_depots')]
    public function back_dropoff_depots(
    CollecteRepository $collecteRepository,
    DepotRepository $depotRepository,
    Request $request,
    EntityManagerInterface $entityManager,
    #[Autowire('%uploads_directory%')] string $imageDir
    ): Response {
    $depot = new Depot();
    $depotForm = $this->createForm(DepotType::class, $depot);
    $depotForm->handleRequest($request);

    $depots = $depotRepository->findAll();
    $collectes = $collecteRepository->findAll();
    $fullDepots = [];

    foreach ($depots as $depot) {
        $totalQuantite = 0;

        // Sum the total quantity of waste collected in this depot
        foreach ($collectes as $collecte) {
            if ($collecte->getDepot() === $depot) {
                $totalQuantite += $collecte->getQuantite();
            }
        }

        $depot->remainingSpace = $depot->getCapacite() - $totalQuantite; // Add remaining space to the depot object
        $depot->usagePercentage = $totalQuantite / $depot->getCapacite() * 100; // Percentage of space used
        $percentageUsed = $depot->usagePercentage;

        // If the depot is full (80% usage or more), add it to the fullDepots array
        if ($percentageUsed >= 80) {
            $fullDepots[] = $depot;
        }
    }

    // Handling Depot Form Submission
    if ($depotForm->isSubmitted() && $depotForm->isValid()) {
        $depot = $depotForm->getData();
        $image = $depotForm->get('image')->getData();
        if ($image) {
            $fileName = uniqid() . '.' . $image->guessExtension();
            $image->move($imageDir, $fileName);
            $depot->setImage($fileName);
        }
        $entityManager->persist($depot);
        $entityManager->flush();
        return $this->redirectToRoute('back_dropoff_depots');
    }

    return $this->render('backend/depots.html.twig', [
        'controller_name' => 'PageController',
        'depots' => $depots,
        'collectes' => $collectes,
        'fullDepots' => $fullDepots,
        'depotForm' => $depotForm->createView(),
    ]);
    }

    #[Route('/back/dropoff/collectes', name: 'back_dropoff_collectes')]
    public function back_dropoff_collectes( Request $request, CollecteRepository $collecteRepository, EntityManagerInterface $entityManager): Response
    {
        $collectes = $collecteRepository->findAll();
        $collecte = new Collecte();
        $collecteForm = $this->createForm(CollecteType::class, $collecte);
        $collecteForm->handleRequest($request);
        if ($collecteForm->isSubmitted() && $collecteForm->isValid()) {
            $entityManager->persist($collecte);
            $entityManager->flush();
            return $this->redirectToRoute('back_dropoff_collectes');
        }

        return $this->render('backend/collectes.html.twig', [
            'controller_name' => 'PageController',
            'collectes' => $collectes,
            'collecteForm' => $collecteForm->createView(),
        ]);
    }

    #[Route('depot/api/{id}', name: 'get_depot')]
    public function getDepot(int $id, CollecteRepository $collecteRepository, DepotRepository $depotRepository): JsonResponse
    {
        $depot = $depotRepository->find($id);

        if (!$depot) {
            return $this->json(['error' => 'Depot not found'], 404);
        }

        $collectes = $collecteRepository->findAll();
        $totalQuantite = 0;
        foreach ($collectes as $collecte) {
            if ($collecte->getDepot() === $depot) {
                $totalQuantite += $collecte->getQuantite();
            }
        }
        $depot->remainingSpace = $depot->getCapacite() - $totalQuantite;
        $status = $depot->remainingSpace == 0 ? 'inactif' : 'actif';
        $adresse = $depot->getAdresse();
        $coordinates = explode(',', $adresse);

        if (count($coordinates) == 2) {
        $latitude = trim($coordinates[0]);
        $longitude = trim($coordinates[1]);
        } else {
        return $this->json(['error' => 'Invalid address format'], 400);
        }

        return $this->json([
        'name' => $depot->getNom(),
        'status' => $status,
        'latitude' => (float) $latitude,
        'longitude' => (float) $longitude,
        ]);
    }

    #[Route('/rmd/{id}', name: 'depot_delete', methods: ['POST'])]
    public function deleted(Request $request, Depot $depot, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$depot->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($depot);
            $entityManager->flush();
        }

        return $this->redirectToRoute('back_dropoff_depots', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/rmc/{id}', name: 'collecte_delete', methods: ['POST'])]
    public function deletep(Request $request, Collecte $collecte, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$collecte->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($collecte);
            $entityManager->flush();
        }

        return $this->redirectToRoute('back_dropoff_collectes', [], Response::HTTP_SEE_OTHER);
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
    #[Route('/front/event', name: 'front_event')]
    public function indexef(): Response
    {
        return $this->render('backend/event.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }






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
    public function showPost(int $id, PostRepository $postRepository, CommentaireRepository $commentaireRepository): Response
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


    //Change controller
    #[Route('/back/user', name: 'back_user')]
    public function index(AuthenticationUtils $authenticationUtils, UserRepository $userRepository): Response
    {
        if ($this->getUser()) {
            $users = $userRepository->findAll(); // Fetch all users from the database
            return $this->render('backend/user.html.twig', [
                'users' => $users,
            ]);
        }
        return $this->render('backend/user.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    //Change controller
    #[Route('/front/user', name: 'front_user')]
    public function indexf(): Response
    {
        return $this->render('backend/user.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/back/register', name: 'back_app_register')]
    public function back_register(
        Request $request,

        UserAuthenticatorInterface $userAuthenticator,
        AuthAuthenticator $authenticator,
        UserPasswordHasherInterface $userPasswordHasher,

        EntityManagerInterface $entityManager
    ): Response {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setName($form->get('name')->getData());
            $password = $form->get('password')->getData();


            if ($password) {
                $user->setPassword(
                    $userPasswordHasher->hashPassword(
                        $user,
                        $password
                    )
                );
            }

            $entityManager->persist($user);
            $entityManager->flush();


            return $userAuthenticator->authenticateUser(
            $user,
            $authenticator,
            $request
        ) ?? $this->redirectToRoute('profile');



            return $this->redirectToRoute('profile');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
    #[Route('/back/verify/email', name: 'back_app_verify_email')]
    public function back_verifyUserEmail(Request $request): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        // validate email confirmation link, sets User::isVerified=true and persists
        try {
            /** @var User $user */
            $user = $this->getUser();

        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $exception->getReason());

            return $this->redirectToRoute('app_register');
        }

        // @TODO Change the redirect on success and handle or remove the flash message in your templates
        $this->addFlash('success', 'Your email address has been verified.');

        return $this->redirectToRoute('app_register');
    }
    #[Route(path: '/back/login', name: 'back_app_login')]
    public function back_login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    #[Route(path: '/back/logout', name: 'back_app_logout')]
    public function back_logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
    #[Route('/front/register', name: 'app_register')]
    public function front_register(
        Request $request,
        UserPasswordHasherInterface $userPasswordHasher,
        EntityManagerInterface $entityManager,
        UserAuthenticatorInterface $userAuthenticator,
        AuthAuthenticator $authenticator
    ): Response {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setName($form->get('name')->getData());
            $password = $form->get('password')->getData();


            if ($password) {
                $user->setPassword(
                    $userPasswordHasher->hashPassword(
                        $user,
                        $password
                    )
                );
            }

            $entityManager->persist($user);
            $entityManager->flush();


            return $userAuthenticator->authenticateUser(
            $user,
            $authenticator,
            $request
        ) ?? $this->redirectToRoute('profile');



            return $this->redirectToRoute('profile');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
    #[Route('/front/verify/email', name: 'front_app_verify_email')]
    public function front_verifyUserEmail(Request $request): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        // validate email confirmation link, sets User::isVerified=true and persists
        try {
            /** @var User $user */
            $user = $this->getUser();

        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $exception->getReason());

            return $this->redirectToRoute('app_register');
        }

        // @TODO Change the redirect on success and handle or remove the flash message in your templates
        $this->addFlash('success', 'Your email address has been verified.');

        return $this->redirectToRoute('app_register');
    }
    #[Route(path: '/front/login', name: 'front_app_login')]
    public function front_login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    #[Route(path: '/front/logout', name: 'front_app_logout')]
    public function front_logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
