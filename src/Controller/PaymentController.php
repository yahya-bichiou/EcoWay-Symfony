<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\CommandeRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Commande;


final class PaymentController extends AbstractController
{

    #[Route('/pay/{price}/{id}', name: 'payment')]
    public function pay(float $price, int $id, Request $request): Response
    {
        \Stripe\Stripe::setApiKey($_ENV['STRIPE_SECRET_KEY']);

        $paymentIntent = \Stripe\PaymentIntent::create([
            'amount' => $price * 100, // Convert to cents
            'currency' => 'usd',
        ]);

        return $this->render('frontend/payment.html.twig', [
            'clientSecret' => $paymentIntent->client_secret,
            'publicKey' => $_ENV['STRIPE_PUBLIC_KEY'],
            'commandeId' => $id, // Pass ID to the template
        ]);
    }

    #[Route('/order/confirm/{id}', name: 'order_confirm')]
    public function confirmOrder(int $id, EntityManagerInterface $entityManager)
    {
        $commande = $entityManager->getRepository(Commande::class)->find($id);

        if ($commande) {
            $commande->setStatus('payée');
            $entityManager->flush();
        }

        // Correct redirect to the invoice route with the commande id
        return $this->redirectToRoute('front_order');
    }

    #[Route('/order/cash/{id}', name: 'order_cash')]
    public function cash(int $id, EntityManagerInterface $entityManager)
    {
        $commande = $entityManager->getRepository(Commande::class)->find($id);

        if ($commande) {
            $commande->setStatus('confirmée');
            $commande->setModePaiement('cash');
            $entityManager->flush();
        }

        // Correct redirect to the invoice route with the commande id
        return $this->redirectToRoute('front_order');
    }

}