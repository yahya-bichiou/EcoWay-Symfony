<?php
namespace App\Controller;

use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class GoogleController extends AbstractController
{
    #[Route('/connect/google', name: 'connect_google')]
    public function connectGoogle(ClientRegistry $clientRegistry): RedirectResponse
    {
        return $clientRegistry->getClient('google')->redirect(
            ['email', 'profile'],
            ['prompt' => 'select_account'] // Forces Google to show the account selection page
        );
    }
        
    #[Route('/connect/google/check', name: 'connect_google_check', methods: ['GET', 'POST'])]
    public function connectGoogleCheck(Request $request): void
    {
        // This method should never be executed because the GoogleAuthenticator
        // intercepts requests to this route.
        throw new \LogicException('This route is handled by the GoogleAuthenticator.');
    }
}