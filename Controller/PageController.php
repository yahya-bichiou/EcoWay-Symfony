<?php

namespace App\Controller;
use App\Entity\Livraison;
use App\Form\LivraisonType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\LivraisonRepository;
use App\Repository\CollecteRepository;
use App\Repository\DepotRepository;
use App\Repository\UserRepository; 
use App\Repository\CommandeRepository;
use App\Entity\Collecte;
use App\Entity\Depot;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Commande;
use App\Form\CommandeType;
use App\Form\CollecteType;
use App\Form\DepotType;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Security\AuthAuthenticator;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use Symfony\Component\Security\Core\Security;

final class PageController extends AbstractController
{
    /*#[Route('/back/order', name: 'back_order')]
    public function indexo(
        CommandeRepository $commandeRepository,
        LivraisonRepository $livraisonRepository,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        // Handling Commande Form
        $commande = new Commande();
        $commandeForm = $this->createForm(CommandeType::class, $commande);
        $commandeForm->handleRequest($request);

        if ($commandeForm->isSubmitted()) {
            if ($commandeForm->isValid()) {
                $entityManager->persist($commande);
                $entityManager->flush();
                return $this->redirectToRoute('back_order');
            }
        }*/
        // Handling Livraison Form
        //$livraison = new Livraison();
        //$livraisonForm = $this->createForm(LivraisonType::class, $livraison);
        //$livraisonForm->handleRequest($request);

       /* if ($livraisonForm->isSubmitted() && $livraisonForm->isValid()) {
            // Assign Commande to Livraison (Ensure it's linked)
            $commandeId = $request->request->get('commande_id'); // Get selected Commande ID from form
            if ($commandeId) {
                $commande = $commandeRepository->find($commandeId);
                if ($commande) {
                    $livraison->setCommande($commande);
                }
            }

            // Ensure type is set before calculating prix
            if (!$livraison->getMode()) {
                throw new \Exception('Type of delivery must be selected');
            }

            // Calculate price
            $livraison->calculatePrix();

            $entityManager->persist($livraison);
            $entityManager->flush();

            return $this->redirectToRoute('back_order', [], Response::HTTP_SEE_OTHER);
        }*/

        /*return $this->render('backend/order.html.twig', [
            'controller_name' => 'PageController',
            'commandes' => $commandeRepository->findAll(),
            'livraisons' => $livraisonRepository->findAll(),
            'commandeForm' => $commandeForm->createView(),
            'livraisonForm' => $livraisonForm->createView(),
        ]);
    }*/
    /*#[Route('l/{id}', name: 'livraison_delete', methods: ['POST'])]
    public function delete(Request $request, Livraison $livraison, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$livraison->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($livraison);
            $entityManager->flush();
        }

        return $this->redirectToRoute('back_order', [], Response::HTTP_SEE_OTHER);
    }*/

    /*#[Route('c/{id}', name: 'commande_delete', methods: ['POST'])]
    public function deletec(Request $request, Commande $commande, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commande->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($commande);
            $entityManager->flush();
        }

        return $this->redirectToRoute('back_order', [], Response::HTTP_SEE_OTHER);
    }*/


    //Change controller
    #[Route('/back/dropoff', name: 'back_dropoff')]
    public function indexd(CollecteRepository $collecteRepository, DepotRepository $depotRepository, Request $request, EntityManagerInterface $entityManager): Response
    {
        $depot = new Depot();
        $depotForm = $this->createForm(DepotType::class, $depot);
        $depotForm->handleRequest($request);

        if ($depotForm->isSubmitted()) {
            if ($depotForm->isValid()) {
                $entityManager->persist($depot);
                $entityManager->flush();
                return $this->redirectToRoute('back_dropoff');
            }
        }
        // Handling Collecte Form
        $collecte = new collecte();
        $collecteForm = $this->createForm(CollecteType::class, $collecte);
        $collecteForm->handleRequest($request);
        if ($collecteForm->isSubmitted()) {
            if ($collecteForm->isValid()) {
                $entityManager->persist($collecte);
                $entityManager->flush();
                return $this->redirectToRoute('back_dropoff');
            }
        }
        return $this->render('backend/dropoff.html.twig', [
            'controller_name' => 'PageController',
            'depots' => $depotRepository->findAll(),
            'collectes' => $collecteRepository->findAll(),
            'depotForm' => $depotForm->createView(),
            'collecteForm' => $collecteForm->createView(),
        ]);
    }
    #[Route('/rmd/{id}', name: 'depot_delete', methods: ['POST'])]
    public function deleted(Request $request, Depot $depot, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$depot->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($depot);
            $entityManager->flush();
        }

        return $this->redirectToRoute('back_dropoff', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/rmc/{id}', name: 'collecte_delete', methods: ['POST'])]
    public function deletep(Request $request, Collecte $collecte, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$collecte->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($collecte);
            $entityManager->flush();
        }

        return $this->redirectToRoute('back_dropoff', [], Response::HTTP_SEE_OTHER);
    }

    //Change controller
    #[Route('/back/blog', name: 'back_blog')]
    public function indexb(): Response
    {
        return $this->render('backend/blog.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    //Change controller
    #[Route('/back/event', name: 'back_event')]
    public function indexe(): Response
    {
        return $this->render('backend/event.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    //Change controller
    #[Route('/back/products', name: 'back_products')]
    public function indexp(): Response
    {
        return $this->render('backend/products.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    //Change controller
    #[Route('/back/user', name: 'back_user')]
    public function index(AuthenticationUtils $authenticationUtils, UserRepository $userRepository): Response
    {
        if ($this->getUser()) {
            $users = $userRepository->findAll(); // Fetch all users from the database
            return $this->render('backend/user.html.twig', [
                'users' => $users, 
            ]);
        }
        return $this->render('backend/user.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }



    //front
   /* #[Route('/front/order', name: 'front_order')]
    public function indexof(CommandeRepository $commandeRepository, LivraisonRepository $livraisonRepository): Response
    {
        // Fetch commandes with userId = 0 and status = 'non_confirmée'
        $commandes = $commandeRepository->findBy([
            'clientId' => 1
        ]);

        return $this->render('frontend/order.html.twig', [
            'commandes' => $commandes,
        ]);

    }*/

    //Change controller
    #[Route('/front/dropoff', name: 'front_dropoff')]
    public function indexdf(CollecteRepository $collecteRepository, DepotRepository $depotRepository): Response
    {
        return $this->render('frontend/dropoff.html.twig', [
            'controller_name' => 'PageController',
            'depots' => $depotRepository->findAll(),
            'collectes' => $collecteRepository->findAll(),
        ]);
    }

    //Change controller
    #[Route('/front/blog', name: 'front_blog')]
    public function indexbf(): Response
    {
        return $this->render('backend/blog.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    //Change controller
    #[Route('/front/event', name: 'front_event')]
    public function indexef(): Response
    {
        return $this->render('backend/event.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    //Change controller
    #[Route('/front/products', name: 'back_products')]
    public function indexpf(): Response
    {
        return $this->render('backend/products.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    //Change controller
    #[Route('/front/user', name: 'front_user')]
    public function indexf(): Response
    {
        return $this->render('backend/user.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/back/register', name: 'back_app_register')]
    public function back_register(
        Request $request, 
        
        UserAuthenticatorInterface $userAuthenticator,
        AuthAuthenticator $authenticator,
        UserPasswordHasherInterface $userPasswordHasher,
        
        EntityManagerInterface $entityManager
    ): Response {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setName($form->get('name')->getData());
            $password = $form->get('password')->getData();


            if ($password) {
                $user->setPassword(
                    $userPasswordHasher->hashPassword(
                        $user, 
                        $password
                    )
                );
            }

            $entityManager->persist($user);
            $entityManager->flush();

            
            return $userAuthenticator->authenticateUser(
            $user,
            $authenticator,
            $request
        ) ?? $this->redirectToRoute('profile');
    

            
            return $this->redirectToRoute('profile');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
    #[Route('/back/verify/email', name: 'back_app_verify_email')]
    public function back_verifyUserEmail(Request $request): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        // validate email confirmation link, sets User::isVerified=true and persists
        try {
            /** @var User $user */
            $user = $this->getUser();
            
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $exception->getReason());

            return $this->redirectToRoute('app_register');
        }

        // @TODO Change the redirect on success and handle or remove the flash message in your templates
        $this->addFlash('success', 'Your email address has been verified.');

        return $this->redirectToRoute('app_register');
    }
    #[Route(path: '/back/login', name: 'back_app_login')]
    public function back_login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    #[Route(path: '/back/logout', name: 'back_app_logout')]
    public function back_logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
    #[Route('/front/register', name: 'app_register')]
    public function front_register(
        Request $request, 
        UserPasswordHasherInterface $userPasswordHasher, 
        EntityManagerInterface $entityManager,
        UserAuthenticatorInterface $userAuthenticator,
        AuthAuthenticator $authenticator
    ): Response {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setName($form->get('name')->getData());
            $password = $form->get('password')->getData();


            if ($password) {
                $user->setPassword(
                    $userPasswordHasher->hashPassword(
                        $user, 
                        $password
                    )
                );
            }

            $entityManager->persist($user);
            $entityManager->flush();

            
            return $userAuthenticator->authenticateUser(
            $user,
            $authenticator,
            $request
        ) ?? $this->redirectToRoute('profile');
    

            
            return $this->redirectToRoute('profile');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
    #[Route('/front/verify/email', name: 'front_app_verify_email')]
    public function front_verifyUserEmail(Request $request): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        // validate email confirmation link, sets User::isVerified=true and persists
        try {
            /** @var User $user */
            $user = $this->getUser();
            
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $exception->getReason());

            return $this->redirectToRoute('app_register');
        }

        // @TODO Change the redirect on success and handle or remove the flash message in your templates
        $this->addFlash('success', 'Your email address has been verified.');

        return $this->redirectToRoute('app_register');
    }
    #[Route(path: '/front/login', name: 'front_app_login')]
    public function front_login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    #[Route(path: '/front/logout', name: 'front_app_logout')]
    public function front_logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
