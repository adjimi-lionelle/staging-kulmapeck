<?php
namespace App\Controller;


//use ApiPlatform\OpenApi\Model\Response;
use App\Entity\Notification;
use App\Entity\SubjectChat;
use App\Repository\EleveRepository;
use App\Repository\NetworkConfigRepository; 
use App\Repository\MatiereCycleRepository;          
use App\Repository\NotificationRepository;
use App\Repository\PaymentRepository;
use App\Repository\RetraitRepository;
use App\Repository\UserRepository;
use App\Service\SendAllUsersEmailService;
use App\Utils\Keys;
use App\Utils\ManageNetwork;
use Doctrine\ORM\EntityManagerInterface;
use InvalidArgumentException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

#[Route('/api/pay')]
class PaymentControllers extends AbstractController
{

    private $privateKey;
    private $cacert;
    private $apiUrl;
    private $sendAllUsersEmailService;


    public function __construct(Keys $apiKeys,SendAllUsersEmailService $sendAllUsersEmailService)
    {
        $this->sendAllUsersEmailService = $sendAllUsersEmailService;
        $this->privateKey = $apiKeys->getPrivateKey();
        $this->cacert = $apiKeys->getCacert();
        //$this->apiUrl = $_ENV['API_PAY_URL'];
        $this->apiUrl = 'https://staging-kulmapeck.online/api/pay/';

    }
    /**
     * Fonction de rappel permettant de mettre a jour le statut de la transaction effetuée
     * elle est exécutée automatiquement par le serveur distant à intervalle regulier de 5 min
     */
    #[Route('/callback', name: 'app_payment_callback', methods: 'GET')]
    public function handleCallback(Request $request, NotificationRepository $notificationRepository,
     UserRepository $userRepository, NetworkConfigRepository $networkConfigRepository,
      EleveRepository $eleveRepository, PaymentRepository $paymentRepository, RetraitRepository $retraitRepository, EntityManagerInterface $em,
      MatiereCycleRepository $MatiereCycleRepository):JsonResponse   {
        // Check if Kulmapeck  sender's IP address
	   /* $senderIp = $request->getClientIp();
	  

	    var_dump($senderIp);
	    //$expectedIp = '145.223.98.53';
	    $allowedIps = [
        '145.223.98.53', // IPv4
        '2a02:4780:41:dbbd::1' // IPv6
	    ];

        if ($senderIp !== $expectedIp) {
            throw new InvalidArgumentException("IP invalide : ".$expectedIp);
	}*/

        // Get parameters from the URL
        $transactionRef = $request->query->get('transaction_ref');
        $status = $request->query->get('status');
        // Now you can use $transactionRef and $status as needed

        $payment = $paymentRepository->findOneBy(['transactionReference' => $transactionRef]);
        if ($payment !== null && strtoupper($status) == 'SUCCESS') {
            $eleve = $payment->getEleve();
            $payment->setStatus($status)
                ->setIsExpired(false);
            if ($payment->getAbonnement() !== null) {
                $eleve->setIsPremium(true);
                //$payment->getEleve()->setIsPremium(true);
                $eleveRepository->save($eleve, true);
                $this->manageSubjectChats($eleve, $em, $MatiereCycleRepository);
            }elseif ($payment->getCours() !== null) {
                $eleve->addCour($payment->getCours());
            }
            $paymentRepository->save($payment, true);

            $notification = new Notification();
            $notification->setDestinataire($payment->getEleve()->getUtilisateur())
                ->setTitle("Payment effectué avec succès");
            if($payment->getCours() !== null) {
                $content = "Votre paiement pour l'achat du cours intitulé " . $payment->getCours()->getIntitule() . " a été accepté. Le cours figure desormais dans votre tableau de bord et vous pouvez le lire à tout moment.";
            }elseif ($payment->getAbonnement() !== null) {
                $content = "Votre souscription au plan " . $payment->getAbonnement()->getLabel() . " a été approuvé. Vous avez ainsi la possibilité de consulter toutes les ressources de notre plateforme pour une durée de " . $payment->getAbonnement()->getDuree() . " mois";
            }
            else {
                $content = "Le payement a été approuvé";
            }
            $notification->setContent($content)->setType(1);
            $notificationRepository->save($notification, true);

            // On gère la distribution des points pour le reseau
            /*if ($eleve !== null) {
                // On cherche tous les payments effectués par l'eleve et qui ont abouti
                $payments = $paymentRepository->findBy(['eleve' => $eleve, 'status' => $status]);
                // S'il a moins de deux payments abouti alors on cherche à partager les points
                //if (count($payments) < 2) {
                    $networkConfig = $networkConfigRepository->findOneBy([]);
                    if ($networkConfig !== null) {
                        ManageNetwork::manage($eleve->getUtilisateur(), $networkConfig,
                         $userRepository, $em,$payment->getAbonnement());
                    }
               // }
            }*/
            
        }
        elseif ($payment !== null) {
            $payment->setStatus($status)
                ->setIsExpired(true);
            $paymentRepository->save($payment, true);
        }
        else{
            $retrait = $retraitRepository->findOneBy(['transactionReference' => $transactionRef]);
            if ($retrait !== null && strtoupper($status) == 'SUCCESS') {
                $retrait->setStatus($status);
                $retraitRepository->save($retrait, true);
            }
        }

        // Return a response if needed
//	return new Response('Callback received successfully');
	return new JsonResponse(['message' => 'Callback received successfully'], 200);

    }

    #[Route('/email', name: 'balance', methods: ['GET'])]
    public function emailSender(MailerInterface $mailer )
    {
        $user=$this->getUser();
        $this->sendAllUsersEmailService->send( 'Email Title', 'Email Body', $user);

        $email = (new Email())
            ->from('no-reply@kulmapeck.com')
            ->to("ondouabenoit392@gmail.com")
            ->subject("Demande rejeter")
            ->text("motif")
            ->html("<p>" . "motif" . "</p>");

        // Send the email
        if ($mailer->send($email)) {
            return new JsonResponse('Email sent successfully!');
        } else {
            return new JsonResponse('Email could not be sent. Mailer Error: ');
        }
    }

   private function manageSubjectChats($eleve,$entityManager,$MatiereCycleRepository): void
    {
        // Récupérer la classe et le cycle de l'élève
        $classe = $eleve->getClasse();
        if (!$classe || !$classe->getSkillLevel()) {
            return; // Si la classe ou le niveau de compétence n'est pas défini, on arrête
        }

        $skill_level = $classe->getSkillLevel()->getId();
            
            if ($skill_level >= 5 && $skill_level <= 7) {
                $matieres = $MatiereCycleRepository->findBy(['cycle' => 2]);
            } elseif ($skill_level == 1 || $skill_level ==2) {
                $matieres = $MatiereCycleRepository->findBy(['cycle' => 1]);
            } elseif ($skill_level == 3 || $skill_level == 4) {
                if($classe->getName() == "Quatrième ALL- 4ème ALL" || $classe->getName() == "Troisième ALL- 3ème ALL" || $classe->getName() == "Troisième Bilingue Allemand- 3ème BIL. ALL"){
                    $matieres = $MatiereCycleRepository->createQueryBuilder('sc')
                    ->where('sc.cycle = :cycle1 OR sc.cycle = :cycle2')
                    ->setParameter('cycle1', 1)
                    ->setParameter('cycle2', 11)
                    ->getQuery()
                    ->getResult();
                } elseif ($classe->getName() == "Quatrième ESP- 4ème ESP" || $classe->getName() == "Troisième ESP- 3ème ESP" || $classe->getName() == "Troisième Bilingue Espagnol- 3ème BIL. ESP"){
                    $matieres = $MatiereCycleRepository->createQueryBuilder('sc')
                    ->where('sc.cycle = :cycle1 OR sc.cycle = :cycle2')
                    ->setParameter('cycle1', 1)
                    ->setParameter('cycle2', 12)
                    ->getQuery()
                    ->getResult();
                } elseif ($classe->getName() == "Troisième Chinois- 3ème Chinois"){
                    $matieres = $MatiereCycleRepository->createQueryBuilder('sc')
                    ->where('sc.cycle = :cycle1 OR sc.cycle = :cycle2')
                    ->setParameter('cycle1', 1)
                    ->setParameter('cycle2', 14)
                    ->getQuery()
                    ->getResult();
                }
            
            } else {
                return;
            }

        // Récupérer toutes les matières liées à son cycle
        //$matieres = $entityManager->getRepository(Categorie::class)->findBy(['cycle' => $cycle]);

        foreach ($matieres as $matiere) {
            // Vérifier si un SubjectChat existe déjà pour cette matière et cet élève
            $existingSubjectChat = $entityManager->getRepository(SubjectChat::class)
                ->findOneBy(['eleve' => $eleve, 'matiere' => $matiere->getMatiere()]);

            if ($existingSubjectChat) {
                // Mettre à jour la date de dernière activité pour réactiver la discussion
                $existingSubjectChat->setCreatedAt(new \DateTimeImmutable());
                $entityManager->persist($existingSubjectChat);
            } else {
                // Créer un nouveau SubjectChat pour cette matière
                $subjectChat = new SubjectChat();
                $subjectChat->setEleve($eleve);
                $subjectChat->setMatiere($matiere->getMatiere());
                $subjectChat->setCycle($matiere->getCycle());
                $subjectChat->setName($matiere->getName());
                $subjectChat->setCreatedAt(new \DateTimeImmutable());

                // Récupérer un enseignant par défaut pour cette matière (si applicable)
           /* $teacherPersona = $entityManager->getRepository(Enseignant::class)->findOneBy(['matiere' => $matiere]);
                if ($teacherPersona) {
                    $subjectChat->setTeacherPersona($teacherPersona);
                }*/

             $entityManager->persist($subjectChat);
            }
        }

        // Exécuter les changements en base de données
        $entityManager->flush();
    }


}
