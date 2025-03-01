<?php

namespace App\Controller;

use App\Entity\Evenement;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\EvenementType;
use App\Repository\EvenementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

final class EvenementController extends AbstractController
{
    #[Route('/front/event', name: 'app_evenement_index', methods: ['GET'])]
    public function index(EvenementRepository $evenementRepository): Response
    {
        return $this->render('evenement/index.html.twig', [
            'evenements' => $evenementRepository->findAll(),
        ]);
    }

    #[Route('/back/event', name: 'app_backevenement_index', methods: ['GET'])]
    public function indexback(EvenementRepository $evenementRepository, Request $request, EntityManagerInterface $entityManager): Response
    {
        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        return $this->render('backend/event.html.twig', [
            'evenements' => $evenementRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_evenement_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($evenement);
            $entityManager->flush();

            return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('evenement/new.html.twig', [
            'evenement' => $evenement,
            'form' => $form,
        ]);
    }

    #[Route('/newback', name: 'app_evenement_newback', methods: ['GET', 'POST'])]
    public function newback(Request $request, EntityManagerInterface $entityManager): Response
    {
        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($evenement);
            $entityManager->flush();
        }

        return $this->render('evenement/addback.html.twig', [
            'evenement' => $evenement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_evenement_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show(int $id, EvenementRepository $repository): Response
    {
        $evenement = $repository->find($id);
        
        if (!$evenement) {
            throw $this->createNotFoundException('Événement non trouvé');
        }
    
        return $this->render('evenement/show.html.twig', [
            'evenement' => $evenement,
        ]);
    }

    #[Route('/show/{id}', name: 'app_evenement_sb', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function showback(int $id, EvenementRepository $repository): Response
    {
        $evenement = $repository->find($id);
        
        if (!$evenement) {
            throw $this->createNotFoundException('Événement non trouvé');
        }
    
        return $this->render('evenement/showback.html.twig', [
            'evenement' => $evenement,
        ]);
    }



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    #[Route('/{id}/edit', name: 'app_evenement_edit', requirements: ['id' => '\d+'], methods: ['GET', 'POST'])]
    public function edit(Request $request, Evenement $evenement, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_backevenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('evenement/edit.html.twig', [
            'evenement' => $evenement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_evenement_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function delete(Request $request, Evenement $evenement, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$evenement->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($evenement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/api/evenements', name: 'api_evenements', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function getEvenements(EvenementRepository $evenementRepository): JsonResponse
    {
        $evenements = $evenementRepository->findAll();
        $data = [];

        foreach ($evenements as $evenement) {
            $data[] = [
                //'id' => $evenement->getId(),
                'title' => $evenement->getTitre(),
                'start' => $evenement->getDateD()->format('Y-m-d'),
                //'description' => $evenement->getDescription(),
                //'location' => $evenement->getLocalisation(),
                //'contact' => $evenement->getContact(),
            ];
        }

        return new JsonResponse($data);

    }

#[Route('/calendar', name: 'app_calendar', methods: ['GET'])]
public function calendar(): Response
{
    return $this->render('evenement/calandar.html.twig');
}
}