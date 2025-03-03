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
use App\Repository\CommandeRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Service\PdfGeneratorService;
use App\Entity\Collecte;
use App\Entity\Depot;
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







    //-------------- DROPOFF ------------------//
    #[Route('/back/dropoff', name: 'back_dropoff')]
    public function indexd(
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
        return $this->redirectToRoute('back_dropoff');
    }

    // Handling Collecte Form Submission
    $collecte = new Collecte();
    $collecteForm = $this->createForm(CollecteType::class, $collecte);
    $collecteForm->handleRequest($request);
    if ($collecteForm->isSubmitted() && $collecteForm->isValid()) {
        $entityManager->persist($collecte);
        $entityManager->flush();
        return $this->redirectToRoute('back_dropoff');
    }

    return $this->render('backend/dropoff.html.twig', [
        'controller_name' => 'PageController',
        'depots' => $depots,
        'collectes' => $collectes,
        'fullDepots' => $fullDepots, // Pass the fullDepots array to the template
        'depotForm' => $depotForm->createView(),
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

        return $this->redirectToRoute('back_dropoff', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/rmc/{id}', name: 'collecte_delete', methods: ['POST'])]
    public function deletep(Request $request, Collecte $collecte, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$collecte->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($collecte);
            $entityManager->flush();
        }

        return $this->redirectToRoute('back_dropoff', [], Response::HTTP_SEE_OTHER);
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

    //Change controller
    #[Route('/back/products', name: 'back_products')]
    public function indexp(): Response
    {
        return $this->render('backend/products.html.twig', [
            'controller_name' => 'PageController',
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
    #[Route('/front/products', name: 'back_products')]
    public function indexpf(): Response
    {
        return $this->render('backend/products.html.twig', [
            'controller_name' => 'PageController',
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
