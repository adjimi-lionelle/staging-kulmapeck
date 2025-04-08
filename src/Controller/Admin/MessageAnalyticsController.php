<?php

namespace App\Controller\Admin;

use App\Entity\Categorie;
use App\Entity\ChatMessage;
use App\Repository\CategorieRepository;
use App\Repository\ChatMessageRepository;
use App\Repository\EleveRepository;
use App\Service\MessageAnalyticsService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

#[Route('/admin/analytics')]
class MessageAnalyticsController extends AbstractController
{
    private $messageAnalyticsService;
    private $entityManager;

    public function __construct(
        MessageAnalyticsService $messageAnalyticsService,
        EntityManagerInterface $entityManager
    ) {
        $this->messageAnalyticsService = $messageAnalyticsService;
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'app_admin_message_analytics')]
    public function index(): Response
    {
        // Allow any user that can access the admin area
        // No explicit role check - security is handled by the firewall
        
        // Get stats directly from the database
        $connection = $this->entityManager->getConnection();
        
        // Get total messages
        $totalMessages = $connection->fetchOne("SELECT COUNT(*) FROM message_chat WHERE is_from_ai = 0");
        
        // Get count of unique students
        $totalStudentsWithMessages = $connection->fetchOne("SELECT COUNT(DISTINCT sender_id) FROM message_chat WHERE is_from_ai = 0");
        
        // Get message trend data for the last 30 days
        $startDate = new \DateTime('-30 days');
        $endDate = new \DateTime();
        $messageTrends = $this->messageAnalyticsService->getMessageTrends($startDate, $endDate);
        
        // Get top subjects and students
        $topSubjects = $this->messageAnalyticsService->getTopSubjects(5);
        $topStudents = $this->messageAnalyticsService->getTopStudents(5);
        
        // Get message categories
        $messageCategories = $this->messageAnalyticsService->getMessageCategories();
        
        // Get common terms in messages
        $commonTerms = $this->messageAnalyticsService->getCommonTerms(20);

        return $this->render('admin/analytics/index.html.twig', [
            'totalMessages' => $totalMessages,
            'totalStudentsWithMessages' => $totalStudentsWithMessages,
            'messageTrends' => json_encode($messageTrends),
            'topSubjects' => $topSubjects,
            'topStudents' => $topStudents,
            'messageCategories' => json_encode($messageCategories),
            'commonTerms' => json_encode($commonTerms),
            'isMessageAnalytics' => true,
        ]);
    }

    #[Route('/data/message-trends', name: 'app_admin_message_trends', methods: ['GET'])]
    public function messageTrends(Request $request): JsonResponse
    {
        // Allow any user that can access the admin area
        // No explicit role check - security is handled by the firewall
        
        $startDate = $request->query->has('startDate') 
            ? new \DateTime($request->query->get('startDate')) 
            : new \DateTime('-30 days');
        
        $endDate = $request->query->has('endDate') 
            ? new \DateTime($request->query->get('endDate')) 
            : new \DateTime();

        $trends = $this->messageAnalyticsService->getMessageTrends($startDate, $endDate);

        return new JsonResponse($trends);
    }

    #[Route('/data/message-categories', name: 'app_admin_message_categories', methods: ['GET'])]
    public function messageCategories(): JsonResponse
    {
        // Allow any user that can access the admin area
        // No explicit role check - security is handled by the firewall
        
        $categories = $this->messageAnalyticsService->getMessageCategories();

        return new JsonResponse($categories);
    }

    #[Route('/data/top-subjects', name: 'app_admin_top_subjects', methods: ['GET'])]
    public function topSubjects(Request $request): JsonResponse
    {
        // Allow any user that can access the admin area
        // No explicit role check - security is handled by the firewall
        
        $limit = $request->query->getInt('limit', 10);
        $subjects = $this->messageAnalyticsService->getTopSubjects($limit);

        return new JsonResponse($subjects);
    }

    #[Route('/data/top-students', name: 'app_admin_top_students', methods: ['GET'])]
    public function topStudents(Request $request): JsonResponse
    {
        // Allow any user that can access the admin area
        // No explicit role check - security is handled by the firewall
        
        $limit = $request->query->getInt('limit', 10);
        $students = $this->messageAnalyticsService->getTopStudents($limit);

        return new JsonResponse($students);
    }

    #[Route('/data/common-terms', name: 'app_admin_common_terms', methods: ['GET'])]
    public function commonTerms(Request $request): JsonResponse
    {
        // Allow any user that can access the admin area
        // No explicit role check - security is handled by the firewall
        
        $limit = $request->query->getInt('limit', 30);
        $terms = $this->messageAnalyticsService->getCommonTerms($limit);

        return new JsonResponse($terms);
    }

    #[Route('/subject/{id}', name: 'app_admin_subject_analytics')]
    public function subjectAnalytics(Categorie $subject): Response
    {
        // Allow any user that can access the admin area
        // No explicit role check - security is handled by the firewall
        
        $messageStats = $this->messageAnalyticsService->getSubjectMessageStats($subject);
        $commonTerms = $this->messageAnalyticsService->getSubjectCommonTerms($subject, 20);
        $messageCategories = $this->messageAnalyticsService->getSubjectMessageCategories($subject);

        return $this->render('admin/analytics/subject.html.twig', [
            'subject' => $subject,
            'messageStats' => $messageStats,
            'commonTerms' => json_encode($commonTerms),
            'messageCategories' => json_encode($messageCategories),
            'isMessageAnalytics' => true,
        ]);
    }
}
