<?php

namespace App\Controller;


use App\Entity\MessageChat;
use App\Entity\MatiereCycle;    
use App\Entity\SubjectChat;
use App\Repository\EleveRepository;
use App\Repository\SubjectChatRepository;
use App\Repository\PersonneRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Security;
use Doctrine\ORM\EntityManagerInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;


class ChatController extends AbstractController
{

    private string $jwtSecret;
    private JWTTokenManagerInterface $jwtManager;


    public function __construct(string $jwtSecret,
    private EleveRepository $eleveRepository,
    private SubjectChatRepository $subjectChatRepository)
    {
        
        $this->jwtSecret = $jwtSecret;
        $this->subjectChatRepository = $subjectChatRepository;
    }  

    
    #[Route('/chat', name: 'app_chat')]
    #[IsGranted('ROLE_USER')]
    public function index(): Response
    {
        /** @var User $user */
        $user = $this->getUser();

        if (!$user) {
            return new JsonResponse(['error' => 'Utilisateur non connecté'], 401);
        }
        return $this->render('student/chat/index.html.twig');
    }


     /* Création d'un token temporaire */
    /* #[Route('/websocket/token', name: 'api_websocket_token', methods: ['GET'])]*/
   /*  #[IsGranted('ROLE_USER')]*/
    /* public function generateWebSocketToken(): JsonResponse
     {
        $user = $this->getUser();
 
         if (!$user) {
             return new JsonResponse(['error' => 'Utilisateur non connecté'], 401);
         }

          /** @var Eleve $student */
       /* $student = $this->eleveRepository->findOneBy(['utilisateur' => $user]);
        if (!$student) {
            throw $this->createAccessDeniedException('Student account not found.');
        }
 
         // Générer un token sécurisé avec expiration
         $payload = [
             'user_id' => $student->getId(),
             'exp' => time() + 3600,
         ];
 
         // Génération du token avec Firebase JWT
         $token = JWT::encode($payload, $this->jwtSecret, 'HS256');
 
         return new JsonResponse(['token' => $token]);
     }*/

    #[Route('/websocket/token/{subjectChatId}', name: 'api_websocket_token', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function generateWebSocketToken(int $subjectChatId, EntityManagerInterface $entityManager): JsonResponse
    {
        $user = $this->getUser();

        if (!$user) {
            return new JsonResponse(['error' => 'Utilisateur non connecté'], 401);
        }

        /** @var Eleve $student */
        $student = $this->eleveRepository->findOneBy(['utilisateur' => $user]);
        if (!$student) {
            throw $this->createAccessDeniedException('Student account not found.');
        }

        // Vérifier que la discussion existe
        $subjectChat = $entityManager->getRepository(SubjectChat::class)->find($subjectChatId);
        if (!$subjectChat) {
            return new JsonResponse(['error' => 'Discussion non trouvée'], 404);
        }

        // Vérifier que l’élève appartient bien à cette discussion
       /* if ($subjectChat->getCycle()->getId() !== $student->getClasse()->getSkillLevel()->getId()) {
            return new JsonResponse(['error' => 'Accès refusé à cette discussion'], 403);
        }*/

        // Générer un token sécurisé avec expiration
        $payload = [
            'user_id' => $student->getId(),
            'discussion_id' => $subjectChat->getId(),
            'exp' => time() + 3600, // Expire dans 1 heure
        ];

        // Génération du token avec Firebase JWT
        $token = JWT::encode($payload, $this->jwtSecret, 'HS256');

        return new JsonResponse(['token' => $token]);
    }


     #[Route('/subjectchat/init', name: 'api_groupchat_init')]
     public function createSubjectChats(EntityManagerInterface $entityManager): JsonResponse
    {

        $matiereCycles = $entityManager->getRepository(MatiereCycle::class)
            ->createQueryBuilder('mc')
            ->setMaxResults(15)
            ->getQuery()
            ->getResult();

        foreach ($matiereCycles as $matiereCycle) {
            $subjectChat = new SubjectChat();
            
            // Associer la matière et le cycle
            $subjectChat->setMatiere($matiereCycle->getMatiere());
            $subjectChat->setCycle($matiereCycle->getCycle());
            
            // Définir un nom basé sur la matière et le cycle
            $subjectChat->setName($matiereCycle->getMatiere()->getName());
            
            // Définir le type par défaut (enseignant ou IA)
            //$subjectChat->setType('teacher'); // Change en 'ai' si nécessaire
            
            $entityManager->persist($subjectChat);
        }

        $entityManager->flush();
        
        return $this->json(['message' => '15 SubjectChats créés avec succès !']);
    }

        /**
     * Récupérer les groupes auxquels un élève connecté appartient/ completer  
     * cette fonction pour envoyer le nombbre de message non lu pr un user connecté dans chacun de ses groupe 
     * exempele groupe 1 nombre de message non lu groupe 2 nombre de message non lu groupe 3 nombre de message non lu
     */
    #[Route('/subjectChats', name: 'api_chat_subjectChats', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function getMyGroups(SubjectChatRepository $groupChatRepository,
                                PersonneRepository $personneRepository,
                                /*essageChatRepository $messageChatRepository*/): JsonResponse
    {
        $user = $this->getUser();
        //echo $user->getId();

        if (!$user) {
            return new JsonResponse(['error' => 'Utilisateur non connecté'], 401);
        }

        $personne = $personneRepository->findOneBy(['utilisateur' => $user]);

        if (!$personne) {
            return new JsonResponse(['error' => 'Aucune entité Personne trouvée pour cet utilisateur'], 403);
        }

        $eleve = $personne->getUtilisateur()->getEleve();
        if (!$eleve) {
            return new JsonResponse(['error' => 'L\'utilisateur n\'est pas un élève'], 403);
        }

        if (!$eleve->isIsPremium()) {
            return new JsonResponse(['error' => 'Accès refusé : vous devez être premium pour accéder au chat'], 403);
        }

        $classe = $eleve->getClasse();
        if (!$classe || !$classe->getSkillLevel()) {
            return new JsonResponse(['error' => 'Aucune classe ou niveau de compétence trouvé'], 400);
        }

        $skill_level = $classe->getSkillLevel()->getId();
        
        if ($skill_level >= 5 && $skill_level <= 7) {
            $subjectChats = $groupChatRepository->findBy(['cycle' => 2]);
        } elseif ($skill_level == 1 || $skill_level ==2) {
            $subjectChats = $groupChatRepository->findBy(['cycle' => 1]);
        } elseif ($skill_level == 3 || $skill_level == 4) {
            if($classe->getName() == "Quatrième ALL- 4ème ALL" || $classe->getName() == "Troisième ALL- 3ème ALL" || $classe->getName() == "Troisième Bilingue Allemand- 3ème BIL. ALL"){
                $subjectChats = $groupChatRepository->createQueryBuilder('sc')
                ->where('sc.cycle = :cycle1 OR sc.cycle = :cycle2')
                ->setParameter('cycle1', 1)
                ->setParameter('cycle2', 11)
                ->getQuery()
                ->getResult();
            } elseif ($classe->getName() == "Quatrième ESP- 4ème ESP" || $classe->getName() == "Troisième ESP- 3ème ESP" || $classe->getName() == "Troisième Bilingue Espagnol- 3ème BIL. ESP"){
                $subjectChats = $groupChatRepository->createQueryBuilder('sc')
                ->where('sc.cycle = :cycle1 OR sc.cycle = :cycle2')
                ->setParameter('cycle1', 1)
                ->setParameter('cycle2', 12)
                ->getQuery()
                ->getResult();
            } elseif ($classe->getName() == "Troisième Chinois- 3ème Chinois"){
                $subjectChats = $groupChatRepository->createQueryBuilder('sc')
                ->where('sc.cycle = :cycle1 OR sc.cycle = :cycle2')
                ->setParameter('cycle1', 1)
                ->setParameter('cycle2', 14)
                ->getQuery()
                ->getResult();
            }
        
        } else {
            return new JsonResponse(['error' => 'Niveau de compétence non valide'], 400);
        }

    
        $data = array_map(function ($subjectChat) {
            return [
                'id' => $subjectChat->getId(),
                'name' => $subjectChat->getName(),
                'type' => $subjectChat->getType(),
                //'matiere' => $subjectChat->getMatiere()->getName(),
                //'matiere' => $subjectChat->getMatiere(),
                'cycle' => $subjectChat->getCycle()
            ];
        }, $subjectChats);

    

        return new JsonResponse($data);
    }


}
