<?php
namespace App\Security;

use KnpU\OAuth2ClientBundle\Client\Provider\GoogleClient;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Http\Authenticator\AbstractAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Authenticator\Passport\SelfValidatingPassport;
use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class GoogleAuthenticator extends AbstractAuthenticator
{
    private GoogleClient $client;
    private RouterInterface $router;
    private EntityManagerInterface $entityManager;
    private UserRepository $userRepository;
    private UserPasswordHasherInterface $passwordHasher;
    private string $uploadsDirectory;

    public function __construct(
        GoogleClient $client, 
        RouterInterface $router, 
        EntityManagerInterface $entityManager,
        UserRepository $userRepository,
        UserPasswordHasherInterface $passwordHasher,
        ParameterBagInterface $params
    ) {
        $this->client = $client;
        $this->router = $router;
        $this->entityManager = $entityManager;
        $this->userRepository = $userRepository;
        $this->passwordHasher = $passwordHasher;
        $this->uploadsDirectory = $params->get('uploads_directory');
    }

    public function supports(Request $request): ?bool
    {
        return $request->attributes->get('_route') === 'connect_google_check';
    }

    public function authenticate(Request $request): Passport
    {
        $accessToken = $this->client->getAccessToken();
        $googleUser = $this->client->fetchUserFromToken($accessToken);
        $email = $googleUser->getEmail();
    
        return new SelfValidatingPassport(
            new UserBadge($email, function () use ($googleUser) {
                $user = $this->userRepository->findOneBy(['email' => $googleUser->getEmail()]);
    
                if (!$user) {
                    $user = new User();
                    $user->setEmail($googleUser->getEmail());
    
                    // Set name (fallback if Google provides only email)
                    $name = $googleUser->getName() ?? explode('@', $googleUser->getEmail())[0];
                    $user->setName($name);
    
                    // Generate and hash a random password
                    $randomPassword = bin2hex(random_bytes(8));
                    $hashedPassword = $this->passwordHasher->hashPassword($user, $randomPassword);
                    $user->setPassword($hashedPassword);
    
                    // Assign default role
                    $user->setRoles(['ROLE_USER']);
    
                    // Download and save profile picture
                    $avatar = $googleUser->getAvatar();
                    if ($avatar) {
                        $newFilename = uniqid() . '.jpg';
                        file_put_contents($this->uploadsDirectory . '/' . $newFilename, file_get_contents($avatar));
                        $user->setProfilePicture($newFilename);
                    }
    
                    $this->entityManager->persist($user);
                    $this->entityManager->flush();
                }
    
                return $user;
            })
        );
    }

    public function onAuthenticationSuccess(Request $request, $token, string $firewallName): ?RedirectResponse
    {
        $user = $token->getUser();
        $request->getSession()->set('user_id', $user->getId());
        return new RedirectResponse($this->router->generate('profile'));
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): ?RedirectResponse
    {
        return new RedirectResponse($this->router->generate('app_user_login'));
    }
}
