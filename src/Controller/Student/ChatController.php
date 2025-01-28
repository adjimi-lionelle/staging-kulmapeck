<?php

namespace App\Controller\Student;

use App\Entity\Categorie;
use App\Entity\ChatMessage;
use App\Entity\Eleve;
use App\Repository\CategorieRepository;
use App\Repository\ChatMessageRepository;
use App\Repository\ClasseRepository;
use App\Repository\SpecialiteRepository;
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
        private ClasseRepository $classeRepository,
        private SpecialiteRepository $specialiteRepository,
        private AIService $aiService
    ) {}

    #[Route('', name: 'app_student_chat')]
    public function index(): Response
    {
        /** @var Eleve $student */
        $student = $this->getUser()->getPersonne();

        // Check if student has class and specialization set
        if (!$student->getClasse() || !$student->getSpecialite()) {
            return $this->render('student/chat/index.html.twig', [
                'needsSetup' => true,
                'classes' => $this->classeRepository->findAll(),
                'specialites' => $this->specialiteRepository->findAll(),
            ]);
        }

        // Get student's subjects based on class and specialization
        $subjects = $this->categorieRepository->findByClasseAndSpecialite(
            $student->getClasse(),
            $student->getSpecialite()
        );

        // Get messages for the first subject (default)
        $currentSubject = $subjects[0] ?? null;
        $messages = $currentSubject ? $this->chatMessageRepository->findStudentMessages($student, $currentSubject) : [];

        return $this->render('student/chat/index.html.twig', [
            'needsSetup' => false,
            'subjects' => $subjects,
            'currentSubject' => $currentSubject,
            'messages' => $messages,
            'dailyCount' => $this->chatMessageRepository->getDailyMessageCount($student),
            'maxMessages' => self::MAX_DAILY_MESSAGES
        ]);
    }

    #[Route('/setup', name: 'app_student_chat_setup', methods: ['POST'])]
    public function setup(Request $request): JsonResponse
    {
        /** @var Eleve $student */
        $student = $this->getUser()->getPersonne();
        $data = json_decode($request->getContent(), true);

        $classe = $this->classeRepository->find($data['classe']);
        $specialite = $this->specialiteRepository->find($data['specialite']);

        if (!$classe || !$specialite) {
            return new JsonResponse(['success' => false], Response::HTTP_BAD_REQUEST);
        }

        $student->setClasse($classe);
        $student->setSpecialite($specialite);
        $this->entityManager->flush();

        return new JsonResponse(['success' => true]);
    }

    #[Route('/send', name: 'app_student_chat_send', methods: ['POST'])]
    public function send(Request $request): JsonResponse
    {
        /** @var Eleve $student */
        $student = $this->getUser()->getPersonne();
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
            ->setSubject($subject);
        
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
            ->setSubject($subject);
        
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
        /** @var Eleve $student */
        $student = $this->getUser()->getPersonne();
        
        $messages = $this->chatMessageRepository->findStudentMessages($student, $subject);
        
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
