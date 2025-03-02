<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use App\Form\ProfileEditType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

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
    public function editProfile(
        Request $request, 
        EntityManagerInterface $entityManager, 
        #[Autowire('%profile_pictures_directory%')] string $imageDir
    ): Response {
        $user = $this->getUser(); // Get the logged-in user

        if (!$user) {
            throw $this->createNotFoundException('User not found.');
        }

        $form = $this->createForm(ProfileEditType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('profilePicture')->getData();

            if ($imageFile) {
                $newFilename = uniqid() . '.' . $imageFile->guessExtension();

                try {
                    $imageFile->move($imageDir, $newFilename);

                    // Remove old profile picture if it exists (except default)
                    if ($user->getProfilePicture() && $user->getProfilePicture() !== 'default-user.png') {
                        $oldImagePath = $imageDir . '/' . $user->getProfilePicture();
                        if (file_exists($oldImagePath)) {
                            unlink($oldImagePath);
                        }
                    }

                    // Set new profile picture
                    $user->setProfilePicture($newFilename);
                    $entityManager->flush();

                    $this->addFlash('success', 'Profile updated successfully!');
                    return $this->redirectToRoute('profile');
                } catch (FileException $e) {
                    $this->addFlash('error', 'Failed to upload profile picture.');
                }
            }
        }

        return $this->render('profile/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    #[Route('/admin/profile', name: 'admin-profile')]
    #[IsGranted('ROLE_ADMIN')]
    public function adminProfile(): Response
    {
        $user = $this->getUser();

        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        return $this->render('backend/admin-profile.html.twig', [
            'user' => $user,
        ]);
    }
}
