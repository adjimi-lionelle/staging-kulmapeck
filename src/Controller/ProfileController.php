<?php

namespace App\Controller;

use App\Entity\Eleve;
use App\Entity\Personne;
use App\Form\PersonneFormType;
use App\Repository\EleveRepository;
use App\Repository\PersonneRepository;
use App\Repository\UserRepository;
use App\Security\EmailVerifier;
use App\Service\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    private EmailVerifier $emailVerifier;

    public function __construct(EmailVerifier $emailVerifier)
    {
        $this->emailVerifier = $emailVerifier;
    }
    
    #[Route('/student/profile', name: 'app_student_profile')]
    #[Route('/instructor/profile', name: 'app_instructor_profile')]
    #[Route('/admin/profile', name: 'app_profile')]
    public function index(EleveRepository $eleveRepository, PersonneRepository $personneRepository): Response
    {
        $personne = $personneRepository->findOneBy(['utilisateur' => $this->getUser()]);
        if (!$personne) {
            throw $this->createAccessDeniedException();
        }

        $eleve = $personne->getUtilisateur()->getEleve();
        $enseignant = $personne->getUtilisateur()->getEnseignant();

        $template = "profile/index.html.twig";

        if ($eleve !== null) {
            $postUri = $this->generateUrl('app_student_profile_edit');
        } elseif ($enseignant !== null) {
            $postUri = $this->generateUrl('app_instructor_profile_edit');
        } else {
            $postUri = $this->generateUrl('app_profile_edit');
            $template = "profile/admin.html.twig";
        }

        $personneForm = $this->createForm(PersonneFormType::class, $personne, [
            'action' => $postUri,

        ]);

        return $this->render($template, [
            'isProfile' => true,
            'student' => $eleve,
            'personneForm' => $personneForm->createView(),
            'personne' => $personne,
            'enseignant' => $enseignant
        ]);
    }

    #[Route('/student/profile/edit', name: 'app_student_profile_edit', methods: ['POST'])]
    #[Route('/instructor/profile/edit', name: 'app_instructor_profile_edit', methods: ['POST'])]
    #[Route('/admin/profile/edit', name: 'app_profile_edit', methods: ['POST'])]
    public function editPersonnalInformations(Request $request, PersonneRepository $personneRepository, EleveRepository $eleveRepository, FileUploader $fileUploader): Response
    {
        $personne = $personneRepository->findOneBy(['utilisateur' => $this->getUser()]);
        if (!$personne) {
            throw $this->createAccessDeniedException();
        }

        $eleve = $personne->getUtilisateur()->getEleve();
        $enseignant = $personne->getUtilisateur()->getEnseignant();

        if ($eleve !== null) {
            $postUri = $this->generateUrl('app_student_profile_edit');
            $path = 'images/eleves';
            $redirectUri = 'app_student_profile';
        } elseif ($enseignant !== null) {
            $postUri = $this->generateUrl('app_instructor_profile');
            $path = 'images/enseignants/kyc';
            $redirectUri = 'app_instructor_profile';
        }else {
            $postUri = $this->generateUrl('app_profile_edit');
            $path = 'images/admin';
            $redirectUri = 'app_profile';
        }

        $personneForm = $this->createForm(PersonneFormType::class, $personne, [
            'action' => $postUri,

        ]);
        $personneForm->handleRequest($request);

        if ($personneForm->isSubmitted() && $personneForm->isValid()) {
            $this->uploadImagesFiles($personne, $fileUploader, $path);
            $personneRepository->save($personne, true);

            $this->addFlash('success', 'Your personnal informations was updated');

            return $this->redirectToRoute($redirectUri);
        }

        return $this->render('profile/index.html.twig', [
            'isProfile' => true,
            'student' => $eleve,
            'personneForm' => $personneForm->createView(),
            "personne" => $personne,
            'enseignant' => $enseignant,
        ]);
    }

    #[Route('/student/profile/change-email', name: 'app_student_profile_change_email', methods: ['POST'])]
    #[Route('/instructor/profile/change-email', name: 'app_instructor_profile_change_email', methods: ['POST'])]
    #[Route('/admin/profile/change-email', name: 'app_profile_change_email', methods: ['POST'])]
    public function changeEmail(Request $request, UserRepository $userRepository, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        
        if (!$this->isCsrfTokenValid('change_email', $request->request->get('_csrf_token'))) {
            $this->addFlash('error', 'Token CSRF invalide.');
            return $this->getProfileRedirect();
        }

        $user = $this->getUser();
        $newEmail = $request->request->get('new_email');

        // Validate email format
        if (!filter_var($newEmail, FILTER_VALIDATE_EMAIL)) {
            $this->addFlash('error', 'Format d\'email invalide.');
            return $this->getProfileRedirect();
        }

        // Check if email is already used
        if ($userRepository->findOneBy(['email' => $newEmail])) {
            $this->addFlash('error', 'Cet email est déjà utilisé.');
            return $this->getProfileRedirect();
        }

        try {
            // Store the old email for the message
            $oldEmail = $user->getEmail();
            
            // Update email
            $user->setEmail($newEmail);
            $user->setIsVerified(false);
            
            // Send verification email
            $this->emailVerifier->sendEmailConfirmation(
                'app_verify_email',
                $user,
                (new TemplatedEmail())
                    ->from(new Address('no-reply@kulmapeck.com', 'Kulmapeck'))
                    ->to($newEmail)
                    ->subject('Veuillez confirmer votre email')
                    ->htmlTemplate('registration/confirmation_email.html.twig')
            );

            $entityManager->persist($user);
            $entityManager->flush();

            // Add appropriate flash message
            if ($oldEmail) {
                $this->addFlash('success', 'Votre email a été modifié. Un email de vérification a été envoyé à votre nouvelle adresse.');
            } else {
                $this->addFlash('success', 'Votre email a été ajouté. Un email de vérification vous a été envoyé.');
            }
        } catch (\Exception $e) {
            $this->addFlash('error', 'Une erreur est survenue lors de la mise à jour de l\'email. Veuillez réessayer.');
        }

        return $this->getProfileRedirect();
    }

    private function getProfileRedirect(): Response
    {
        $user = $this->getUser();
        
        if ($user->getEleve()) {
            return $this->redirectToRoute('app_student_profile');
        } elseif ($user->getEnseignant()) {
            return $this->redirectToRoute('app_instructor_profile');
        } else {
            return $this->redirectToRoute('app_profile');
        }
    }

    private function redirectToReferer(Request $request): Response
    {
        $referer = $request->headers->get('referer');
        return $this->redirect($referer ?: $this->generateUrl('app_home'));
    }

    private function uploadImagesFiles(Personne $personne, FileUploader $fileUploader, $path = 'images/eleves')
    {
        // dd($fileName);
        if ($personne->getImageFile() != null) {

            $fileName = $fileUploader->upload($personne->getImageFile(), $path);
            $personne->setAvatar($fileName);
        }
    }
}
