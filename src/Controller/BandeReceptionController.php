<?php

namespace App\Controller;

use App\Entity\BandeReception;
use App\Form\BandeReceptionType;
use App\Repository\BandeReceptionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


#[Route('/bande/reception')]
final class BandeReceptionController extends AbstractController
{
    #[Route(name: 'app_bande_reception_index', methods: ['GET'])]
    public function index(BandeReceptionRepository $bandeReceptionRepository): Response
    {
        return $this->render('bande_reception/index.html.twig', [
            'bande_receptions' => $bandeReceptionRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_bande_reception_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $bandeReception = new BandeReception();
        $form = $this->createForm(BandeReceptionType::class, $bandeReception);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($bandeReception);
            $entityManager->flush();

            return $this->redirectToRoute('app_bande_commande_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('bande_reception/new.html.twig', [
            'bande_reception' => $bandeReception,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_bande_reception_show', methods: ['GET'])]
    public function show(BandeReception $bandeReception): Response
    {
        return $this->render('bande_reception/show.html.twig', [
            'bande_reception' => $bandeReception,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_bande_reception_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, BandeReception $bandeReception, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(BandeReceptionType::class, $bandeReception);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_bande_commande_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('bande_reception/edit.html.twig', [
            'bande_reception' => $bandeReception,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_bande_reception_delete', methods: ['POST'])]
    public function delete(Request $request, BandeReception $bandeReception, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$bandeReception->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($bandeReception);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_bande_commande_index', [], Response::HTTP_SEE_OTHER);
    }
}
