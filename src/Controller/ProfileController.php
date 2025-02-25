<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use App\Form\ProfileEditType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

#[IsGranted('IS_AUTHENTICATED_FULLY')] 
class ProfileController extends AbstractController
{
    #[Route('/profile', name: 'profile')]
    public function index(): Response
    {
        $user = $this->getUser();

        return $this->render('profile/index.html.twig', [
            'user' => $user,
        ]);
    }
    #[Route('/profile/edit', name: 'app_profile_edit')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function editProfile(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser(); 
        $form = $this->createForm(ProfileEditType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'Profil mis à jour avec succès.');
            return $this->redirectToRoute('profile');
        }

        return $this->render('profile/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
