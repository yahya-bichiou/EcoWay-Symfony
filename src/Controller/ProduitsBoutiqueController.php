<?php

namespace App\Controller;

use App\Entity\ProduitsBoutique;
use App\Form\ProduitsBoutiqueType;
use App\Repository\ProduitsBoutiqueRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/produits/boutique')]
final class ProduitsBoutiqueController extends AbstractController
{
    #[Route(name: 'app_produits_boutique_index', methods: ['GET'])]
    public function index(ProduitsBoutiqueRepository $produitsBoutiqueRepository): Response
    {
        return $this->render('produits_boutique/index.html.twig', [
            'produits_boutiques' => $produitsBoutiqueRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_produits_boutique_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $produitsBoutique = new ProduitsBoutique();
        $form = $this->createForm(ProduitsBoutiqueType::class, $produitsBoutique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($produitsBoutique);
            $entityManager->flush();

            return $this->redirectToRoute('app_produits_boutique_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('produits_boutique/new.html.twig', [
            'produits_boutique' => $produitsBoutique,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_produits_boutique_show', methods: ['GET'])]
    public function show(ProduitsBoutique $produitsBoutique): Response
    {
        return $this->render('produits_boutique/show.html.twig', [
            'produits_boutique' => $produitsBoutique,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_produits_boutique_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ProduitsBoutique $produitsBoutique, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProduitsBoutiqueType::class, $produitsBoutique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_produits_boutique_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('produits_boutique/edit.html.twig', [
            'produits_boutique' => $produitsBoutique,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_produits_boutique_delete', methods: ['POST'])]
    public function delete(Request $request, ProduitsBoutique $produitsBoutique, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$produitsBoutique->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($produitsBoutique);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_produits_boutique_index', [], Response::HTTP_SEE_OTHER);
    }
}
