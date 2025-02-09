<?php

namespace App\Controller;

use App\Entity\CommandesBoutique;
use App\Form\CommandesBoutiqueType;
use App\Repository\CommandesBoutiqueRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/commandes/boutique')]
final class CommandesBoutiqueController extends AbstractController
{
    #[Route(name: 'app_commandes_boutique_index', methods: ['GET'])]
    public function index(CommandesBoutiqueRepository $commandesBoutiqueRepository): Response
    {
        return $this->render('commandes_boutique/index.html.twig', [
            'commandes_boutiques' => $commandesBoutiqueRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_commandes_boutique_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $commandesBoutique = new CommandesBoutique();
        $form = $this->createForm(CommandesBoutiqueType::class, $commandesBoutique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($commandesBoutique);
            $entityManager->flush();

            return $this->redirectToRoute('app_commandes_boutique_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('commandes_boutique/new.html.twig', [
            'commandes_boutique' => $commandesBoutique,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_commandes_boutique_show', methods: ['GET'])]
    public function show(CommandesBoutique $commandesBoutique): Response
    {
        return $this->render('commandes_boutique/show.html.twig', [
            'commandes_boutique' => $commandesBoutique,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_commandes_boutique_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CommandesBoutique $commandesBoutique, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CommandesBoutiqueType::class, $commandesBoutique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_commandes_boutique_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('commandes_boutique/edit.html.twig', [
            'commandes_boutique' => $commandesBoutique,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_commandes_boutique_delete', methods: ['POST'])]
    public function delete(Request $request, CommandesBoutique $commandesBoutique, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commandesBoutique->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($commandesBoutique);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_commandes_boutique_index', [], Response::HTTP_SEE_OTHER);
    }
}
