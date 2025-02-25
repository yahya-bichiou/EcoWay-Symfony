<?php

namespace App\Controller;

use App\Entity\Depot;
use App\Form\DepotType;
use App\Entity\Collecte;
use App\Form\CollecteType;
use App\Repository\CollecteRepository;
use App\Repository\DepotRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\Id;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/depot')]
final class DepotController extends AbstractController
{
    #[Route(name: 'app_depot_index', methods: ['GET'])]
    public function index(DepotRepository $depotRepository, CollecteRepository $collecteRepository): Response
    {
        return $this->render('depot/index.html.twig', [
            'depots' => $depotRepository->findAll(),
            'collectes' => $collecteRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_depot_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, #[Autowire('%uploads_directory%')] string $imageDir): Response
    {
    $depot = new Depot();
    $form = $this->createForm(DepotType::class, $depot);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $depot = $form->getData();
        $image = $form->get('image')->getData();
        if($image = $form['image']->getData()){
            $fileName = uniqid().'.'.$image->guessExtension();
            $image->move($imageDir, $fileName);
            $depot->setImage($fileName);
        }
        $entityManager->persist($depot);
        $entityManager->flush();

        return $this->redirectToRoute('app_depot_index');
    }

    return $this->render('depot/new.html.twig', [
        'form' => $form->createView(),
    ]);
    }

    #[Route('/{id}', name: 'app_depot_show', methods: ['GET', 'POST'])]
public function show(Depot $depot, Request $request, EntityManagerInterface $entityManager): Response
{
    // Create a new Collecte entity and set the depot
    $collecte = new Collecte();
    $collecte->setDepot($depot); // Set the depot BEFORE handling the form

    // Create the form
    $form = $this->createForm(CollecteType::class, $collecte);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $collecte = $form->getData();
        $depot = $collecte->getDepot();

        // Calculate total collected quantity in the selected depot
        $totalQuantite = array_reduce(
            $depot->getCollectes()->toArray(),
            fn ($total, $collecte) => $total + $collecte->getQuantite(),
            0
        );

        $remainingSpace = $depot->getCapacite() - $totalQuantite;

        if ($remainingSpace <= 0) {
            $this->addFlash('error', 'Ce dépôt est plein. Vous ne pouvez pas ajouter une nouvelle collecte.');
        } elseif ($collecte->getQuantite() > $remainingSpace) {
            $this->addFlash('error', 'Quantité trop élevée ! Il ne reste que ' . $remainingSpace . ' kg disponibles.');
        } else {
            $entityManager->persist($collecte);
            $entityManager->flush();
            $this->addFlash('success', 'Collecte ajoutée avec succès !');
            return $this->redirectToRoute('app_depot_show', ['id' => $depot->getId()], Response::HTTP_SEE_OTHER);
        }
    }


    return $this->render('depot/show.html.twig', [
        'depot' => $depot,
        'form' => $form->createView(),
    ]);
}

    #[Route('/{id}/edit', name: 'app_depot_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Depot $depot, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(DepotType::class, $depot);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('back_dropoff', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('depot/edit.html.twig', [
            'depot' => $depot,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_depot_delete', methods: ['POST'])]
    public function delete(Request $request, Depot $depot, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$depot->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($depot);
            $entityManager->flush();
        }

        return $this->redirectToRoute('back_dropoff', [], Response::HTTP_SEE_OTHER);
    }
}
