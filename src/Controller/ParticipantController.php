<?php

namespace App\Controller;
use App\Entity\Participant;
use App\Form\ParticipantType;
use App\Repository\ParticipantRepository;
use App\Repository\EvenementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/participant')]
final class ParticipantController extends AbstractController{
//////////////////////////////////index////////////////////////////////////////////////////////////////////
        #[Route('/list' ,name: 'app_participant_indexback', methods: ['GET'])]
        public function indexback(ParticipantRepository $participantRepository,Request $request, EntityManagerInterface $entityManager): Response{
        $participant = new Participant();
        $form = $this->createForm(ParticipantType::class, $participant);
        $form->handleRequest($request);
        return $this->render('participant/listp.html.twig', [
            'participants' => $participantRepository->findAll(),
            'form' => $form->createView(),
        ]);

    }
/////////////////////////////////////////////add//////////////////////////////////////////////////////
#[Route('/new/{id}', name: 'participant_new')]
public function new(Request $request, EvenementRepository $evenementRepository, EntityManagerInterface $entityManager, int $id): Response
{
    $evenement = $evenementRepository->find($id);
    if (!$evenement) {
        throw $this->createNotFoundException('Événement non trouvé.');
    }

    $participant = new Participant();
    $participant->setEnv($evenement); // Associe l'événement au participant

    $form = $this->createForm(ParticipantType::class, $participant);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->persist($participant);
        $entityManager->flush();

       // return $this->redirectToRoute('evenement_index'); // Redirection après enregistrement
    }

    return $this->render('participant/new.html.twig', [
        'form' => $form->createView(),
    ]);
}
  
////////////////////////////////////////////////show////////////////////////////////////
    #[Route('/{id}', name: 'app_participant_show', methods: ['GET'])]
    public function show(Participant $participant): Response
    {
        return $this->render('participant/show.html.twig', [
            'participant' => $participant,
        ]);
    }

    #[Route('/{id}/show', name: 'app_participant_showback', methods: ['GET'])]
    public function showback(Participant $participant): Response
    {
        return $this->render('participant/showb.html.twig', [
            'participant' => $participant,
        ]);
    }
/////////////////////////////////////delete/update//////////////////////////////////////////////
    #[Route('/{id}/edit', name: 'app_participant_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Participant $participant, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ParticipantType::class, $participant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_backevenement_index', [], Response::HTTP_SEE_OTHER);
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

        return $this->redirectToRoute('app_backevenement_index', [], Response::HTTP_SEE_OTHER);
    }
}