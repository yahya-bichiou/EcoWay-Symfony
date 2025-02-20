<?php

namespace App\Controller;

use App\Entity\Plannig;
use App\Form\PlannigType;
use App\Repository\PlannigRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/plannig')]
final class PlannigController extends AbstractController
{
    #[Route(name: 'app_plannig_index', methods: ['GET'])]
    public function index(PlannigRepository $plannigRepository): Response
    {
        return $this->render('plannig/index.html.twig', [
            'plannigs' => $plannigRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_plannig_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $plannig = new Plannig();
        $form = $this->createForm(PlannigType::class, $plannig);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($plannig);
            $entityManager->flush();

            return $this->redirectToRoute('app_phase_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('plannig/new.html.twig', [
            'plannig' => $plannig,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_plannig_show', methods: ['GET'])]
    public function show(Plannig $plannig): Response
    {
        return $this->render('plannig/show.html.twig', [
            'plannig' => $plannig,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_plannig_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Plannig $plannig, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PlannigType::class, $plannig);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_phase_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('plannig/edit.html.twig', [
            'plannig' => $plannig,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_plannig_delete', methods: ['POST'])]
    public function delete(Request $request, Plannig $plannig, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$plannig->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($plannig);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_phase_index', [], Response::HTTP_SEE_OTHER);
    }
}
