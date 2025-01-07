<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Personne;
use App\Form\SimpleRegistrationType;
use App\Repository\NetworkConfigRepository;
use App\Repository\PersonneRepository;
use App\Repository\UserRepository;
use App\Service\FileUploader;
use App\Security\EmailVerifier;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;

class RegistrationController extends AbstractController
{
    private EmailVerifier $emailVerifier;

    public function __construct(EmailVerifier $emailVerifier)
    {
        $this->emailVerifier = $emailVerifier;
    }

    #[Route('/register', name: 'app_front_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager, FileUploader $fileUploader, UserRepository $userRepository, NetworkConfigRepository $networkConfigRepository, PersonneRepository $personneRepository): Response
    {
        $user = new User();
        $form = $this->createForm(SimpleRegistrationType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            // Set username from the form
            $username = $form->get('username')->getData();
            $user->setUsername($username);

            // Set the user as verified immediately
            $user->setIsVerified(true);

            // Create and set Personne entity
            $personne = new Personne();
            
            // Split fullName into firstName and lastName, handle single name case
            $fullName = trim($form->get('fullName')->getData());
            $nameParts = explode(' ', $fullName);
            $firstName = $nameParts[0];
            $lastName = isset($nameParts[1]) ? implode(' ', array_slice($nameParts, 1)) : null;
            
            $personne->setFirstName($firstName);
            $personne->setLastName($lastName);
            $personne->setPseudo($username); // Set pseudo same as username
            
            // Set default values for required fields
            $personne->setBornAt(null);  // Now nullable
            $personne->setLieuNaissance(null);  // Now nullable
            $personne->setSexe(null);  // Now nullable
            $personne->setTelephone(null);  // Now nullable
            
            $personne->setUtilisateur($user);
            $user->setPersonne($personne);
            $user->setPhoneNumber($form->get('phoneNumber')->getData());

            if ($form->get('parentCode')->getData()) {
                $parentUser = $userRepository->findOneBy(['invitationCode' => $form->get('parentCode')->getData()]);
                if ($parentUser) {
                    $personne->setParent($personneRepository->findOneBy(['invitationCode' => $form->get('parentCode')->getData()]));
                }
            }

            // Generate invitation code
            $codeInvitation = $this->generateInvitationCode($personneRepository);
            $invitationLink = $request->getSchemeAndHttpHost() . $this->generateUrl('app_front_register', [
                'code' => $codeInvitation
            ]);

            $personne->setInvitationCode($codeInvitation)
                    ->setInvitationLink($invitationLink);

            $entityManager->persist($personne);
            $entityManager->persist($user);
            $entityManager->flush();

            // Add flash message for success
            $this->addFlash('success', 'Votre compte a été créé avec succès. Vous pouvez maintenant vous connecter.');

            // Redirect to login page instead of registration page
            return $this->redirectToRoute('app_login');
        }

        return $this->render('registration/register_simple.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    private function generateInvitationCode(PersonneRepository $pr): string
    {
        $code = substr(str_shuffle(str_repeat('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', 6)), 0, 6);
        while ($pr->findOneBy(['invitationCode' => $code])) {
            $code = substr(str_shuffle(str_repeat('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', 6)), 0, 6);
        }
        return $code;
    }

    #[Route('/verify/email', name: 'app_verify_email')]
    public function verifyUserEmail(Request $request, TranslatorInterface $translator): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        // validate email confirmation link, sets User::isVerified=true and persists
        try {
            $this->emailVerifier->handleEmailConfirmation($request, $this->getUser());
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $translator->trans($exception->getReason(), [], 'VerifyEmailBundle'));

            return $this->redirectToRoute('app_front_register');
        }

        $this->addFlash('success', 'Your email address has been verified.');

        return $this->redirectToRoute('app_front_register');
    }
}
