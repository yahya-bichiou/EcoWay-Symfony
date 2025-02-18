<?php

namespace App\Controller;

use App\Entity\Participant;
use App\Form\ParticipantType;
use App\Repository\ParticipantRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use Doctrine\Persistence\ManagerRegistry;

//use App\Entity\Evenement;

#[Route('/participant')]
final class ParticipantController extends AbstractController{
    #[Route( '/back' , name: 'app_participant_indexback', methods: ['GET'])]
    public function index(ParticipantRepository $participantRepository): Response
    {
        return $this->render('participant/listp.html.twig', [
            'participants' => $participantRepository->findAll(),
        ]);
    }
    /*public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $participant = new Participant();
    
        // Récupérer l'ID de l'événement depuis la requête (si envoyé via un champ du formulaire)
        $id = $request->request->get('evenement_id'); 
    
        if ($id) {
            $evenement = $entityManager->getRepository(Evenement::class)->find($id);
            if ($evenement) {
                $participant->setEvenement($evenement);
            } else {
                throw $this->createNotFoundException("L'événement avec l'ID $id n'existe pas.");
            }
        }
        $form = $this->createForm(ParticipantType::class, $participant);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($participant);
            $entityManager->flush();
    
            return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
        }
    
        return $this->render('participant/new.html.twig', [
            'participant' => $participant,
            'form' => $form,
        ]);
    }*/

////////////////////////////////////
#[Route('/new', name: 'app_participant_new', methods: ['GET', 'POST'])]
public function add(ManagerRegistry $doctrine, Request $request): Response
{
    $em = $doctrine->getManager();
    $participant = new Participant();
    $form = $this->createForm(ParticipantType::class, $participant);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $em->persist($participant);
        $em->flush();

        $this->addFlash('success', 'participant ajouté avec succès.');

        return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
    }

    // Récupération des plannings
    $plannings = $doctrine->getRepository(Participant::class)->findAll();

    return $this->render('participant/new.html.twig', [
        'form' => $form,
        'plannings' => $plannings, // Assurez-vous de transmettre 'plannings'
    ]);
}

/////////////////////////////////////////////





    
        
    

    #[Route('/{id}', name: 'app_participant_show', methods: ['GET'])]
    public function show(Participant $participant): Response
    {
        return $this->render('participant/show.html.twig', [
            'participant' => $participant,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_participant_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Participant $participant, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ParticipantType::class, $participant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_participant_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('participant/edit.html.twig', [
            'participant' => $participant,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_participant_delete', methods: ['POST'])]
    public function delete(Request $request, Participant $participant, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$participant->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($participant);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_participant_index', [], Response::HTTP_SEE_OTHER);
    }
}
