<?php

namespace App\Controller;

use App\Entity\BandeCommande;
use App\Form\BandeCommandeType;
use App\Repository\BandeCommandeRepository;
use App\Repository\BandeReceptionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/bande/commande')]
final class BandeCommandeController extends AbstractController
{
    #[Route(name: 'app_bande_commande_index', methods: ['GET'])]
    public function index(BandeCommandeRepository $bandeCommandeRepository, BandeReceptionRepository $bandeReceptionRepository): Response
    {
        return $this->render('bande_commande/index.html.twig', [
            'bande_commandes' => $bandeCommandeRepository->findAll(),
            'bande_receptions' => $bandeReceptionRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_bande_commande_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $bandeCommande = new BandeCommande();
        $form = $this->createForm(BandeCommandeType::class, $bandeCommande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($bandeCommande);
            $entityManager->flush();

            return $this->redirectToRoute('app_bande_commande_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('bande_commande/new.html.twig', [
            'bande_commande' => $bandeCommande,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_bande_commande_show', methods: ['GET'])]
    public function show(BandeCommande $bandeCommande): Response
    {
        return $this->render('bande_commande/show.html.twig', [
            'bande_commande' => $bandeCommande,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_bande_commande_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, BandeCommande $bandeCommande, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(BandeCommandeType::class, $bandeCommande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_bande_commande_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('bande_commande/edit.html.twig', [
            'bande_commande' => $bandeCommande,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_bande_commande_delete', methods: ['POST'])]
    public function delete(Request $request, BandeCommande $bandeCommande, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$bandeCommande->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($bandeCommande);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_bande_commande_index', [], Response::HTTP_SEE_OTHER);
    }
}
