<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\GroupChatGenerator;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\GroupChatRepository;
use App\Repository\PersonneRepository;
use App\Repository\MessageChatRepository;   
use App\Repository\EleveRepository;
use App\Repository\ClasseRepository;
use App\Repository\SpecialiteRepository;
use App\Entity\GroupChat;
use App\Entity\MessageChat;
use DateTime;

#[Route('/api/chat')]
class GroupChatController extends AbstractController
{
    private EntityManagerInterface $entityManager;
    private string $jwtSecret;
    private JWTTokenManagerInterface $jwtManager;
    private EleveRepository $eleveRepository;
    private ClasseRepository $classeRepository;
    private SpecialiteRepository $specialiteRepository;
    private GroupChatRepository $groupChatRepository;



    public function __construct(EntityManagerInterface $entityManager, string $jwtSecret, JWTTokenManagerInterface $jwtManager, EleveRepository $eleveRepository, ClasseRepository $classeRepository, SpecialiteRepository $specialiteRepository, GroupChatRepository $groupChatRepository)
    {
        $this->entityManager = $entityManager;
        $this->jwtSecret = $jwtSecret;
        $this->jwtManager = $jwtManager;
        $this->eleveRepository = $eleveRepository;
        $this->classeRepository = $classeRepository;
        $this->specialiteRepository = $specialiteRepository;
        $this->groupChatRepository = $groupChatRepository;
    }
    
     

    #[Route('/groupchat/init', name: 'api_groupchat_init', methods: ['POST'])]
    public function initGroupChats(GroupChatGenerator $groupChatGenerator): JsonResponse
    {
        $groupChatGenerator->generateGroupChats();
        return $this->json(['message' => 'Les groupes de discussion ont été créés avec succès !']);
    }

   




        /**
     * Récupérer les groupes auxquels un élève connecté appartient/ completer  
     * cette fonction pour envoyer le nombbre de message non lu pr un user connecté dans chacun de ses groupe 
     * exempele groupe 1 nombre de message non lu groupe 2 nombre de message non lu groupe 3 nombre de message non lu
     */
    #[Route('/my-groups', name: 'api_chat_my_groups', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function getMyGroups(GroupChatRepository $groupChatRepository,
                                PersonneRepository $personneRepository,
                                MessageChatRepository $messageChatRepository): JsonResponse
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
            $groups = $groupChatRepository->findBy(['cycle' => 2]);
        } elseif ($skill_level >= 1 && $skill_level <= 4) {
            $groups = $groupChatRepository->findBy(['cycle' => 1]);
        } else {
            return new JsonResponse(['error' => 'Niveau de compétence non valide'], 400);
        }

    
        $data = array_map(function ($group) {
            return [
                'id' => $group->getId(),
                'name' => $group->getName(),
                'matiere' => $group->getMatiere()->getName(),
                'cycle' => $group->getCycle()
            ];
        }, $groups);

    

        return new JsonResponse($data);
    }



    /**
     *  Envoyer un message dans un groupe
     */
    #[Route('/send', name: 'api_chat_send', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function sendMessage(Request $request, GroupChatRepository $groupChatRepository, PersonneRepository $personneRepository): JsonResponse
    {
        $user = $this->getUser();
        
        $personne = $personneRepository->findOneBy(['utilisateur' => $user]);

        if (!$personne) {
            return new JsonResponse(['error' => 'Aucune entité Personne trouvée pour cet utilisateur'], 403);
        }

        $eleve = $personne->getUtilisateur()->getEleve();
        if (!$eleve || !$eleve->isIsPremium()) {
            return new JsonResponse(['error' => 'Accès refusé : vous devez être premium pour accéder au chat'], 403);
        }
       
        $data = json_decode($request->getContent(), true);

        if (!isset($data['group_id']) || !isset($data['content'])) {
            return $this->json(['error' => 'Données incomplètes'], 400);
        }

        $groupChat = $groupChatRepository->find($data['group_id']);

        if (!$groupChat) {
            return $this->json(['error' => 'Groupe introuvable'], 404);
        }

        $message = new MessageChat();
        $message->setContent($data['content']);
        $message->setSender($user);
        $message->setGroupChat($groupChat);
        //$message->setCreatedAt(new DateTime());

        $this->entityManager->persist($message);
        $this->entityManager->flush();

        return $this->json(['message' => 'Message envoyé avec succès !']);
    }

    /**
     * Récupérer les messages d'un groupe spécifique
     */
    #[Route('/messages/{group_id}', name: 'api_chat_messages', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function getGroupMessages(int $group_id, MessageChatRepository $messageChatRepository, PersonneRepository $personneRepository): JsonResponse
    {

        $user = $this->getUser();
        $personne = $personneRepository->findOneBy(['utilisateur' => $user]);

        if (!$personne) {
            return new JsonResponse(['error' => 'Aucune entité Personne trouvée'], 403);
        }

        $eleve = $personne->getUtilisateur()->getEleve();
        if (!$eleve || !$eleve->isIsPremium()) {
            return new JsonResponse(['error' => 'Accès refusé : vous devez être premium'], 403);
        }

        $messages = $messageChatRepository->findBy(['groupChat' => $group_id], ['createAt' => 'ASC']);

        $data = array_map(fn($msg) => [
            'id' => $msg->getId(),
            'content' => $msg->getContent(),
            'author' => $msg->getSender()->getPersonne()->getPseudo(),
            'createAt' => $msg->getCreateAt()->format('Y-m-d H:i:s')
        ], $messages);

        return $this->json($data);
    }

    #[Route('', name: 'app_chat')]
    #[IsGranted('ROLE_STUDENT')]
    public function index(): Response
    {
        $user = $this->getUser();
        /** @var Eleve|null $student */
        $student = $this->eleveRepository->findOneBy(['utilisateur' => $user]);
        
        if (!$student) {
            throw $this->createAccessDeniedException('Student account not found.');
        }

        // Check if student has class set
        if (!$student->getClasse()) {
            // Get all classes and specializations
            $classes = $this->classeRepository->findAll();
            $specialites = $this->specialiteRepository->findAll();

            return $this->render('front/chat/index.html.twig', [
                'needsSetup' => true,
                'student' => $student,
                'classes' => $classes,
                'specialites' => $specialites,
                'groups' => [] // Empty array since student has no class yet
            ]);
        }

        // Get student's groups if they have a class
        $groups = $this->groupChatRepository->findByStudent($student);

        return $this->render('front/chat/index.html.twig', [
            'needsSetup' => false,
            'student' => $student,
            'groups' => $groups,
            'classes' => [], // Not needed when student has a class
            'specialites' => [] // Not needed when student has a class
        ]);
    }

    #[Route('/setup', name: 'app_student_chat_setup', methods: ['POST'])]
    #[IsGranted('ROLE_STUDENT')]
    public function setup(Request $request): JsonResponse
    {
        try {
            $data = json_decode($request->getContent(), true);
            
            if (!isset($data['classe']) || !isset($data['specialite'])) {
                throw new \InvalidArgumentException('Missing required fields');
            }

            /** @var User $user */
            $user = $this->getUser();
            $student = $this->eleveRepository->findOneBy(['utilisateur' => $user]);
            
            if (!$student) {
                throw new \RuntimeException('Student not found');
            }

            $classe = $this->entityManager->getReference('App\Entity\Classe', $data['classe']);
            $specialite = $this->entityManager->getReference('App\Entity\Specialite', $data['specialite']);

            $student->setClasse($classe);
            $student->setSpecialite($specialite);

            $this->entityManager->flush();

            return new JsonResponse(['success' => true]);
        } catch (\Exception $e) {
            return new JsonResponse(['success' => false, 'error' => $e->getMessage()], 400);
        }
    }
}
