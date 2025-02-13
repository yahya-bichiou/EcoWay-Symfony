<?php

namespace App\Controller;

use App\Entity\StockProduit;
use App\Form\StockProduitType;
use App\Repository\StockProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/stock')]
final class StockController extends AbstractController
{
    #[Route(name: 'app_stock_index', methods: ['GET'])]
    public function index(StockProduitRepository $stockProduitRepository): Response
    {
        return $this->render('stock/index.html.twig', [
            'stock_produits' => $stockProduitRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_stock_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $stockProduit = new StockProduit();
        $form = $this->createForm(StockProduitType::class, $stockProduit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($stockProduit);
            $entityManager->flush();

            return $this->redirectToRoute('app_produitcon_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('stock/new.html.twig', [
            'stock_produit' => $stockProduit,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_stock_show', methods: ['GET'])]
    public function show(StockProduit $stockProduit): Response
    {
        return $this->render('stock/show.html.twig', [
            'stock_produit' => $stockProduit,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_stock_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, StockProduit $stockProduit, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(StockProduitType::class, $stockProduit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_produitcon_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('stock/edit.html.twig', [
            'stock_produit' => $stockProduit,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_stock_delete', methods: ['POST'])]
    public function delete(Request $request, StockProduit $stockProduit, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$stockProduit->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($stockProduit);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_produitcon_index', [], Response::HTTP_SEE_OTHER);
    }
}
