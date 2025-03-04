<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class UserController extends AbstractController
{
    #[Route('/back/user', name: 'app_user')]
    public function index(EntityManagerInterface $entityManager, UserRepository $userRepository, \Symfony\Component\Security\Http\Authentication\AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->getUser()) {
            $users = $userRepository->findAll(); // Fetch all users from the database
            return $this->render('backend/user.html.twig', [
                'users' => $users, 
            ]);
        }
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    #[Route('/user/show/{id}', name: 'app_user_show')]
    public function show(User $user): Response
    {
        return $this->render('backend/user_show.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/user/edit/{id}', name: 'app_user_edit')]
    public function edit(User $user, Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'User updated successfully!');
            return $this->redirectToRoute('app_user'); 
        }

        return $this->render('backend/user_edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/user/delete/{id}', name: 'app_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->request->get('_token'))) {
            $entityManager->remove($user);
            $entityManager->flush();
            $this->addFlash('success', 'User deleted successfully!');
        }

        return $this->redirectToRoute('app_user'); // Ensure the correct route name
    }


    #[Route('/user/new', name: 'app_user_new')] 
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $file */
            $file = $form->get('profilePicture')->getData(); // Ensure 'profilePicture' is in UserType form

            if ($file) {
                $filename = md5(uniqid()) . '.' . $file->guessExtension();

                try {
                    $directory = $this->getParameter('profile_pictures_directory'); // Ensure this parameter is set in services.yaml

                    if (!is_dir($directory) && !mkdir($directory, 0775, true) && !is_dir($directory)) {
                        throw new \RuntimeException(sprintf('Unable to create directory "%s"', $directory));
                    }

                    $file->move($directory, $filename);
                    $user->setProfilePicture($filename);
                } catch (FileException | \RuntimeException $e) {
                    $this->addFlash('error', 'Error uploading profile picture: ' . $e->getMessage());
                    return $this->redirectToRoute('app_user_new');
                }
            } else {
                // Assign default profile picture
                $user->setProfilePicture('default-user.png');
            }

            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'User created successfully!');

            return $this->redirectToRoute('app_user');
        }

        return $this->render('backend/user_new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/admin/profile', name: 'admin-profile')]
    public function adminProfile(Request $request, EntityManagerInterface $entityManager): Response
    {
        $admin = $this->getUser(); // Get the logged-in admin

        $form = $this->createForm(UserType::class, $admin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Profile updated successfully!');
            return $this->redirectToRoute('admin-profile');
        }

        return $this->render('backend/admin-profile.html.twig', [
            'form' => $form->createView(),
            'admin' => $admin
        ]);
    }

}
