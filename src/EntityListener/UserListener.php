<?php
namespace App\EntityListener;

use App\Entity\User;
use App\Repository\PersonneRepository;
use App\Security\EmailVerifier;
use App\Service\InvitationCodeGenerator;
use Symfony\Component\Mime\Address;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Security;

class UserListener
{
    public function __construct(private PersonneRepository $personneRepository, 
        private UrlGeneratorInterface $urlGeneratorInterface,
        private InvitationCodeGenerator $invitationCodeGenerator,
        private EmailVerifier $emailVerifier)
    {
        
    }
    public function prePersist(User $user): void
    {
        if (!$user->getPersonne()->getInvitationCode()) {
            $codeInvitation = $this->invitationCodeGenerator->generateCode();
            $invitationLink = json_encode([
                'trainer' => $this->urlGeneratorInterface->generate('app_front_register', ['type' => 'trainer', 'invitation' => $codeInvitation], UrlGeneratorInterface::ABSOLUTE_URL),
                'student' => $this->urlGeneratorInterface->generate('app_front_register', ['type' => 'student', 'invitation' => $codeInvitation], UrlGeneratorInterface::ABSOLUTE_URL)
            ]);
            $user->getPersonne()->setInvitationCode($codeInvitation)
                ->setInvitationLink($invitationLink)
                ->setParent($this->personneRepository->findOneBy(['invitationCode' => $user->parentCode]));
        }

        if ($user->getEleve() && !$user->getEleve()->getReference()) {
            $user->getEleve()->setReference((time() + $user->getId() + $user->getEleve()->getId()) . '');
            $user->setRoles(['ROLE_STUDENT']);
        }

        if ($user->getEnseignant() && !$user->getEnseignant()->getReference()) {
            $user->getEnseignant()->setReference((time() + $user->getId() + $user->getEnseignant()->getId()) . '');
            $user->setRoles(['ROLE_INSTRUCTOR']);
        }

        $user->getPersonne()->setUtilisateur($user);
    }

    public function postPersist(User $user): void 
    {
        // Skip email verification if email is null or user is already verified
        if (!$user->getEmail() || $user->isVerified()) {
            return;
        }

        // generate a signed url and email it to the user
        $this->emailVerifier->sendEmailConfirmation(
            'app_verify_email',
            $user,
            (new TemplatedEmail())
                ->from('no-reply@kulmapeck.com')
                ->to($user->getEmail())
                ->subject('Please Confirm your Email')
                ->htmlTemplate('registration/confirmation_email.html.twig')
        );
    }

    public function preUpdate(User $user): void 
    {

    }
}
