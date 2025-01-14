<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Personne;
use App\Entity\Eleve;
use App\Form\SimpleRegistrationType;
use App\Form\RegistrationTeacherType;
use App\Repository\NetworkConfigRepository;
use App\Repository\PersonneRepository;
use App\Repository\UserRepository;
use App\Service\FileUploader;
use App\Service\InvitationCodeGenerator;
use App\Security\EmailVerifier;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mime\Address;

class RegistrationController extends AbstractController
{
    private EmailVerifier $emailVerifier;
    private InvitationCodeGenerator $invitationCodeGenerator;

    public function __construct(
        EmailVerifier $emailVerifier,
        InvitationCodeGenerator $invitationCodeGenerator
    ) {
        $this->emailVerifier = $emailVerifier;
        $this->invitationCodeGenerator = $invitationCodeGenerator;
    }

    #[Route('/register', name: 'app_front_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager, FileUploader $fileUploader, UserRepository $userRepository, NetworkConfigRepository $networkConfigRepository, PersonneRepository $personneRepository): Response
    {
        $userType = $request->query->get('type', 'student'); // Default to student if no type specified
        $invitationCode = $request->query->get('code');
        $user = new User();
        
        // Choose form type based on user type
        if ($userType === 'trainer') {
            $form = $this->createForm(RegistrationTeacherType::class, $user);
        } else {
            $form = $this->createForm(SimpleRegistrationType::class, $user);
        }

        // Set invitation code if provided
        if ($invitationCode && $form->has('parentCode')) {
            $form->get('parentCode')->setData($invitationCode);
        }
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            // Set username and verify immediately
            $user->setIsVerified(true);

            if ($userType === 'trainer') {
                // Handle teacher registration
                $user->addRole('ROLE_INSTRUCTOR');
                
                // The personne and enseignant entities are already handled by the form
                $personne = $user->getPersonne();
                $enseignant = $user->getEnseignant();
                
                if ($personne && $enseignant) {
                    $personne->setUtilisateur($user);
                    $enseignant->setUtilisateur($user);
                }

                // Handle file uploads for teacher documents
                if ($enseignant) {
                    $path = 'uploads/teacher_documents';
                    // Upload CNI files
                    if ($form->get('enseignant')->get('rectoCNIFile')->getData()) {
                        $rectoCNIFileName = $fileUploader->upload($form->get('enseignant')->get('rectoCNIFile')->getData(), $path);
                        $enseignant->setRectoCNI($rectoCNIFileName);
                    }
                    if ($form->get('enseignant')->get('versoCNIFile')->getData()) {
                        $versoCNIFileName = $fileUploader->upload($form->get('enseignant')->get('versoCNIFile')->getData(), $path);
                        $enseignant->setVersoCNI($versoCNIFileName);
                    }
                    if ($form->get('enseignant')->get('selfieCNIFile')->getData()) {
                        $selfieCNIFileName = $fileUploader->upload($form->get('enseignant')->get('selfieCNIFile')->getData(), $path);
                        $enseignant->setSelfieCNI($selfieCNIFileName);
                    }
                }
            } else {
                // Handle student registration
                $user->addRole('ROLE_STUDENT');
                
                // Create and set Personne entity
                $personne = new Personne();
                
                // Split fullName into firstName and lastName
                $fullName = trim($form->get('fullName')->getData());
                $nameParts = explode(' ', $fullName);
                $firstName = $nameParts[0];
                $lastName = isset($nameParts[1]) ? implode(' ', array_slice($nameParts, 1)) : '';
                
                // Get phone number from the form
                $phoneNumber = $form->get('phoneNumber')->getData();
                
                $personne->setFirstName($firstName)
                        ->setLastName($lastName)
                        ->setPseudo($user->getUsername())
                        ->setBornAt(new \DateTime('2000-01-01'))
                        ->setLieuNaissance('')
                        ->setSexe('N')
                        ->setTelephone($phoneNumber)
                        ->setUtilisateur($user);
                
                $user->setPersonne($personne)
                     ->setPhoneNumber($phoneNumber);

                // Create and set Eleve entity
                $eleve = new Eleve();
                $eleve->setUtilisateur($user);
                $eleve->setReference(uniqid('STD'));
                $eleve->setIsPremium(false);
                $entityManager->persist($eleve);
            }

            // Handle invitation code for both types
            if ($form->has('parentCode') && $form->get('parentCode')->getData()) {
                $parentPerson = $personneRepository->findOneBy(['invitationCode' => $form->get('parentCode')->getData()]);
                if ($parentPerson) {
                    $personne->setParent($parentPerson);
                    
                    // Send email notification to parent only if they have an email
                    if ($parentPerson->getUtilisateur() && $parentPerson->getUtilisateur()->getEmail()) {
                        $this->emailVerifier->sendEmailConfirmation('app_verify_email',
                            $parentPerson->getUtilisateur(),
                            (new TemplatedEmail())
                                ->from(new Address('no-reply@kulmapeck.com', 'Kulmapeck'))
                                ->to($parentPerson->getUtilisateur()->getEmail())
                                ->subject('New Student Registration Using Your Invitation Code')
                                ->htmlTemplate('registration/invitation_used_email.html.twig')
                                ->context([
                                    'inviter' => $parentPerson,
                                    'invited' => $personne,
                                ])
                        );
                    }
                }
            }

            // Generate invitation code for both types
            $codeInvitation = $this->invitationCodeGenerator->generateCode();
            $invitationLinks = [
                'trainer' => $request->getSchemeAndHttpHost() . $this->generateUrl('app_front_register', [
                    'type' => 'trainer',
                    'code' => $codeInvitation
                ]),
                'student' => $request->getSchemeAndHttpHost() . $this->generateUrl('app_front_register', [
                    'type' => 'student',
                    'code' => $codeInvitation
                ])
            ];

            $personne->setInvitationCode($codeInvitation)
                    ->setInvitationLink(json_encode($invitationLinks));

            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'Your account has been created successfully. You can now log in.');
            return $this->redirectToRoute('app_login');
        }

        return $this->render($userType === 'trainer' ? 'registration/register.html.twig' : 'registration/register_simple.html.twig', [
            'registrationForm' => $form->createView(),
            'userType' => $userType
        ]);
    }

    #[Route('/verify/email', name: 'app_verify_email')]
    public function verifyUserEmail(Request $request, TranslatorInterface $translator): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        // validate email confirmation link, sets User::isVerified=true and persists
        try {
            $this->emailVerifier->handleEmailConfirmation($request, $this->getUser());
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('error', $translator->trans($exception->getReason(), [], 'VerifyEmailBundle'));

            return $this->redirectToRoute('app_student_profile');
        }

        $this->addFlash('success', 'Votre adresse email a été vérifiée avec succès.');

        return $this->redirectToRoute('app_student_profile');
    }
}
