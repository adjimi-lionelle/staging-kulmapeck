<?php

namespace App\Security;

use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\UserNotFoundException;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Authenticator\AbstractLoginFormAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\CsrfTokenBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Util\TargetPathTrait;
use Symfony\Contracts\Translation\TranslatorInterface;

class AppAuthenticator extends AbstractLoginFormAuthenticator
{
    use TargetPathTrait;

    public const LOGIN_ROUTE = 'app_login';
    public const HOME_ROUTE = 'app_home';

    private $userRepository;
    private $translator;

    public function __construct(
        private UrlGeneratorInterface $urlGenerator, 
        UserRepository $userRepository,
        TranslatorInterface $translator
    ) {
        $this->userRepository = $userRepository;
        $this->translator = $translator;
    }

    public function authenticate(Request $request): Passport
    {
        $identifier = $request->request->get('identifier', '');
        $password = $request->request->get('password', '');

        if (empty($identifier) || empty($password)) {
            throw new AuthenticationException($this->translator->trans('CREDENTIALS_REQUIRED_KEY'));
        }

        $request->getSession()->set(Security::LAST_USERNAME, $identifier);

        return new Passport(
            new UserBadge($identifier, function($userIdentifier) {
                // Try to load user by username first
                $user = $this->userRepository->findOneBy(['username' => $userIdentifier]);
                
                // If not found, try by phone number
                if (!$user) {
                    $user = $this->userRepository->findOneBy(['phoneNumber' => $userIdentifier]);
                }

                // If still not found, try by email
                if (!$user) {
                    $user = $this->userRepository->findOneBy(['email' => $userIdentifier]);
                }
                
                if (!$user) {
                    throw new UserNotFoundException($this->translator->trans('USER_NOT_FOUND_KEY'));
                }
                
                return $user;
            }),
            new PasswordCredentials($password),
            [
                new CsrfTokenBadge('authenticate', $request->request->get('_csrf_token')),
            ]
        );
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        if ($targetPath = $this->getTargetPath($request->getSession(), $firewallName)) {
            return new RedirectResponse($targetPath);
        }

        $user = $token->getUser();
        
        // Redirect based on user role
        $roles = $user->getRoles();
                
        if (in_array('ROLE_ADMIN', $roles)) {
            return new RedirectResponse($this->urlGenerator->generate('admin_dashboard'));
        } elseif (in_array('ROLE_INSTRUCTOR', $roles)) {
            return new RedirectResponse($this->urlGenerator->generate('instructor_dashboard'));
        } elseif (in_array('ROLE_STUDENT', $roles)) {
            return new RedirectResponse($this->urlGenerator->generate('student_dashboard'));
        }

        // Default redirect
        return new RedirectResponse($this->urlGenerator->generate(self::HOME_ROUTE));
    }

    protected function getLoginUrl(Request $request): string
    {
        return $this->urlGenerator->generate(self::LOGIN_ROUTE);
    }

    public function start(Request $request, AuthenticationException $authException = null): Response
    {
        if (in_array('application/json', $request->getAcceptableContentTypes())) {
            return new JsonResponse(null, Response::HTTP_UNAUTHORIZED);
        }

        $url = $this->getLoginUrl($request);

        return new RedirectResponse($url);
    }
}
