<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\SimpleRegistrationType;
use App\Repository\NetworkConfigRepository;
use App\Repository\PersonneRepository;
use App\Repository\UserRepository;
use App\Service\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{

    public function __construct()
    {
    }

    #[Route('/register', name: 'app_front_register')]

    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager, FileUploader $fileUploader, UserRepository $userRepository, NetworkConfigRepository $networkConfigRepository, PersonneRepository $personneRepository): Response
    {
        $user = new User();
        if ($request->query->get('invitation')) {
            $user->parentCode = $request->query->get('invitation');
        }

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

            // Set the user as verified immediately
            $user->setIsVerified(true);
            
            // Create and set Personne entity
            $personne = new Personne();
            $personne->setNomComplet($form->get('fullName')->getData());
            $personne->setUtilisateur($user);
            $user->setPersonne($personne);

            if ($form->get('parentCode')->getData()) {
                $personne->setParent($personneRepository->findOneBy(['invitationCode' => $form->get('parentCode')->getData()]));
            }

            // Generate invitation code
            $codeInvitation = self::generateInvitationCode($personneRepository);
            $invitationLink = json_encode([
                'trainer' => 'https://kulmapeck.com' . $this->generateUrl('app_front_register', ['type' => 'trainer', 'invitation' => $codeInvitation]),
                'student' => 'https://kulmapeck.com' . $this->generateUrl('app_front_register', ['type' => 'student', 'invitation' => $codeInvitation])
            ]);
            
            $personne->setInvitationCode($codeInvitation)
                    ->setInvitationLink($invitationLink);

            $entityManager->persist($user);
            $entityManager->flush();

            // Automatically authenticate the user
            return $this->redirectToRoute('app_login');
        }

        return $this->render('registration/register_simple.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    #[Route('/registration/success', name: 'app_registration_success')]

    public function confirmation(Request $request)
    {
        return $this->render('registration/success.html.twig', [ 'activatedConfirmation' => $request->query->get('activated') ] );
    }

    private function uploadImagesFiles(User $user, FileUploader $fileUploader, $path = 'images/enseignants/kyc')
    {

        // dd( $user->getPersonne() );
        if ($user->getPersonne()->getImageFile() != null ) {

            $fileName = $fileUploader->upload($user->getPersonne()->getImageFile(), $path);
            $user->getPersonne()->setAvatar($fileName);
        }

        if ($user->getEnseignant() !== null ) {
            $user->getEnseignant()->setDiplome($fileUploader->upload($user->getEnseignant()->diplomeFile, $path))
            ->setRectoCNI($fileUploader->upload($user->getEnseignant()->rectoCNIFile, $path))
            ->setVersoCNI($fileUploader->upload($user->getEnseignant()->versoCNIFile, $path))
            ->setSelfieCNI($fileUploader->upload($user->getEnseignant()->selfieCNIFile, $path))
            ->setEmploiDuTemps($fileUploader->upload($user->getEnseignant()->emploiDuTempsFile, $path));
            $user->setRoles(['ROLE_INSTRUCTOR']);
        } elseif ($user->getEleve() !== null ) {
            $user->setRoles(['ROLE_STUDENT']);
        }

        return $user;
    }

    public static function generateInvitationCode(PersonneRepository $pr)
    {
        $tab = ['A', 'Z', 'E', 'R', 'T', 'Y', 'U', 'I', 'O', 'P', 'Q', 'S', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'W', 'X', 'C', 'V', 'B', 'N', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'];
        $exist = true;
        $code = '';
        while ($exist) {
            $code = '';
            for ($i = 0; $i < 8; $i++) {
                $code .= $tab[rand(0, count($tab) - 1)];
            }
            $p = $pr->findOneBy(['invitationCode' => $code]);
            if (is_null($p)) {
                $exist = false;
            }
        }

        return $code;
    }
}
