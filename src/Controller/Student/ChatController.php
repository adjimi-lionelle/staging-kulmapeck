<?php

namespace App\Controller\Student;

use App\Entity\Categorie;
use App\Entity\ChatMessage;
use App\Entity\Eleve;
use App\Entity\SkillLevel;
use App\Repository\CategorieRepository;
use App\Repository\ChatMessageRepository;
use App\Repository\EleveRepository;
use App\Repository\SkillLevelRepository;
use App\Service\AIService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/student/chat')]
#[IsGranted('ROLE_STUDENT')]
class ChatController extends AbstractController
{
    private const MAX_DAILY_MESSAGES = 500;

    public function __construct(
        private EntityManagerInterface $entityManager,
        private ChatMessageRepository $chatMessageRepository,
        private CategorieRepository $categorieRepository,
        private EleveRepository $eleveRepository,
        private SkillLevelRepository $skillLevelRepository,
        private AIService $aiService
    ) {}

    #[Route('', name: 'app_student_chat')]
    public function index(): Response
    {
        $user = $this->getUser();
        $personne = $user->getPersonne();
        
        /** @var Eleve|null $student */
        $student = $this->eleveRepository->findOneBy(['utilisateur' => $user]);
        
        if (!$student) {
            throw $this->createAccessDeniedException('Student account not found.');
        }

        // Check if student has skill level set
        if (!$student->getSkillLevel()) {
            return $this->render('student/chat/index.html.twig', [
                'needsSetup' => true,
                'skillLevels' => $this->skillLevelRepository->findAll(),
                'student' => $student,
            ]);
        }

        // Get student's subjects based on skill level
        $subjects = $this->categorieRepository->findBySkillLevel(
            $student->getSkillLevel()
        );

        // Add unread count for each subject
        foreach ($subjects as $subject) {
            $unreadCount = $this->chatMessageRepository->getUnreadCount($student, $subject);
            $subject->unreadCount = $unreadCount;
        }

        return $this->render('student/chat/index.html.twig', [
            'needsSetup' => false,
            'subjects' => $subjects,
            'messages' => [],
            'dailyCount' => $this->chatMessageRepository->getDailyMessageCount($student),
            'maxMessages' => self::MAX_DAILY_MESSAGES,
            'student' => $student,
        ]);
    }

    #[Route('/setup', name: 'app_student_chat_setup', methods: ['POST'])]
    public function setup(Request $request): JsonResponse
    {
        $user = $this->getUser();
        /** @var Eleve|null $student */
        $student = $this->eleveRepository->findOneBy(['utilisateur' => $user]);
        
        if (!$student) {
            throw $this->createAccessDeniedException('Student account not found.');
        }

        $data = json_decode($request->getContent(), true);

        $skillLevel = $this->skillLevelRepository->find($data['skillLevel']);

        if (!$skillLevel) {
            return new JsonResponse(['success' => false], Response::HTTP_BAD_REQUEST);
        }

        $student->setSkillLevel($skillLevel);
        $this->entityManager->persist($student);
        $this->entityManager->flush();

        return new JsonResponse(['success' => true]);
    }

    #[Route('/send', name: 'app_student_chat_send', methods: ['POST'])]
    public function send(Request $request): JsonResponse
    {
        $user = $this->getUser();
        /** @var Eleve|null $student */
        $student = $this->eleveRepository->findOneBy(['utilisateur' => $user]);
        
        if (!$student) {
            throw $this->createAccessDeniedException('Student account not found.');
        }

        $data = json_decode($request->getContent(), true);

        // Check daily message limit
        $dailyCount = $this->chatMessageRepository->getDailyMessageCount($student);
        if ($dailyCount >= self::MAX_DAILY_MESSAGES) {
            return new JsonResponse([
                'success' => false,
                'error' => 'Daily message limit reached'
            ], Response::HTTP_TOO_MANY_REQUESTS);
        }

        // Get current subject
        /** @var Categorie|null $subject */
        $subject = $this->categorieRepository->find($data['subject']);
        if (!$subject) {
            return new JsonResponse(['success' => false], Response::HTTP_BAD_REQUEST);
        }

        // Create student message
        $message = new ChatMessage();
        $message->setStudent($student)
            ->setContent($data['message'])
            ->setSubject($subject)
            ->setIsRead(true);
        
        $this->entityManager->persist($message);

        // Get AI response using AIService
        $aiResponse = $this->aiService->generateResponse(
            $data['message'],
            $subject,
            $student
        );

        // Create AI message
        $aiMessage = new ChatMessage();
        $aiMessage->setStudent($student)
            ->setContent($aiResponse)
            ->setIsFromAI(true)
            ->setSubject($subject)
            ->setIsRead(false);
        
        $this->entityManager->persist($aiMessage);
        $this->entityManager->flush();

        return new JsonResponse([
            'success' => true,
            'response' => $aiResponse
        ]);
    }

    #[Route('/messages/{subject}', name: 'app_student_chat_messages', methods: ['GET'])]
    public function getMessages(Categorie $subject): JsonResponse
    {
        $user = $this->getUser();
        /** @var Eleve|null $student */
        $student = $this->eleveRepository->findOneBy(['utilisateur' => $user]);
        
        if (!$student) {
            throw $this->createAccessDeniedException('Student account not found.');
        }
        
        $messages = $this->chatMessageRepository->findStudentMessages($student, $subject);
        
        // Mark messages as read
        foreach ($messages as $message) {
            if (!$message->isRead()) {
                $message->setIsRead(true);
            }
        }
        $this->entityManager->flush();
        
        return new JsonResponse([
            'messages' => array_map(function(ChatMessage $message) {
                return [
                    'content' => $message->getContent(),
                    'isFromAI' => $message->isFromAI(),
                    'createdAt' => $message->getCreatedAt()->format('Y-m-d H:i:s')
                ];
            }, $messages)
        ]);
    }
}
