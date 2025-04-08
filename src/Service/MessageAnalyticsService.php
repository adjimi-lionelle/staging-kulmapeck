<?php

namespace App\Service;

use App\Entity\Categorie;
use App\Entity\ChatMessage;
use App\Entity\Eleve;
use App\Repository\ChatMessageRepository;
use App\Repository\EleveRepository;
use App\Repository\CategorieRepository;
use Doctrine\ORM\EntityManagerInterface;

class MessageAnalyticsService
{
    private $entityManager;
    private $chatMessageRepository;
    private $eleveRepository;
    private $categorieRepository;
    
    public function __construct(
        EntityManagerInterface $entityManager,
        ChatMessageRepository $chatMessageRepository,
        EleveRepository $eleveRepository,
        CategorieRepository $categorieRepository
    ) {
        $this->entityManager = $entityManager;
        $this->chatMessageRepository = $chatMessageRepository;
        $this->eleveRepository = $eleveRepository;
        $this->categorieRepository = $categorieRepository;
    }

    /**
     * Get message trends over a time period
     */
    public function getMessageTrends(\DateTime $startDate, \DateTime $endDate): array
    {
        // Query directly from the message_chat table
        $connection = $this->entityManager->getConnection();
        $startDateStr = $startDate->format('Y-m-d H:i:s');
        $endDateStr = $endDate->format('Y-m-d H:i:s');
        
        $sql = "SELECT DATE(create_at) as date, COUNT(*) as count
                FROM message_chat
                WHERE create_at BETWEEN :startDate AND :endDate
                AND is_from_ai = 0
                GROUP BY DATE(create_at)
                ORDER BY date ASC";
                
        $stmt = $connection->prepare($sql);
        $stmt->bindValue('startDate', $startDateStr);
        $stmt->bindValue('endDate', $endDateStr);
        $results = $stmt->executeQuery()->fetchAllAssociative();
        
        // Fill in missing dates with zero counts
        $filledResults = [];
        $currentDate = clone $startDate;
        $dateMap = [];
        
        // Create map of existing dates
        foreach ($results as $result) {
            $dateMap[$result['date']] = (int)$result['count'];
        }
        
        // Fill in all dates in range
        while ($currentDate <= $endDate) {
            $dateString = $currentDate->format('Y-m-d');
            $count = $dateMap[$dateString] ?? 0;
            
            $filledResults[] = [
                'date' => $dateString,
                'count' => $count
            ];
            
            $currentDate->modify('+1 day');
        }
        
        return $filledResults;
    }

    /**
     * Get top subjects with most messages
     */
    public function getTopSubjects(int $limit = 10): array
    {
        // Query subjects and message counts directly
        $connection = $this->entityManager->getConnection();
        $sql = "SELECT sc.id, sc.name, COUNT(m.id) as message_count
                FROM message_chat m
                JOIN subject_chat sc ON m.subject_chat_id = sc.id
                WHERE m.is_from_ai = 0
                GROUP BY sc.id, sc.name
                ORDER BY message_count DESC
                LIMIT :limit";
                
        $stmt = $connection->prepare($sql);
        $stmt->bindValue('limit', $limit, \PDO::PARAM_INT);
        $results = $stmt->executeQuery()->fetchAllAssociative();
        
        // Format the results
        $formattedResults = [];
        foreach ($results as $result) {
            $formattedResults[] = [
                'id' => $result['id'],
                'name' => $result['name'],
                'messageCount' => (int)$result['message_count']
            ];
        }
        
        return $formattedResults;
    }

    /**
     * Get top students by message count
     */
    public function getTopStudents(int $limit = 10): array
    {
        // Query students and message counts directly
        $connection = $this->entityManager->getConnection();
        $sql = "SELECT e.id, p.first_name, p.last_name, u.email, COUNT(m.id) as message_count
                FROM message_chat m
                JOIN eleve e ON m.sender_id = e.id
                JOIN kulmapeck_user u ON e.utilisateur_id = u.id
                JOIN personne p ON p.utilisateur_id = u.id
                WHERE m.is_from_ai = 0
                GROUP BY e.id, p.first_name, p.last_name, u.email
                ORDER BY message_count DESC
                LIMIT :limit";
                
        $stmt = $connection->prepare($sql);
        $stmt->bindValue('limit', $limit, \PDO::PARAM_INT);
        $results = $stmt->executeQuery()->fetchAllAssociative();
        
        // Format the results
        $formattedResults = [];
        foreach ($results as $result) {
            $formattedResults[] = [
                'id' => $result['id'],
                'name' => $result['first_name'] . ' ' . $result['last_name'],
                'email' => $result['email'],
                'messageCount' => (int)$result['message_count']
            ];
        }
        
        return $formattedResults;
    }

    /**
     * Get message categories by analyzing content
     */
    public function getMessageCategories(): array
    {
        // Query messages directly from the message_chat table
        $connection = $this->entityManager->getConnection();
        $sql = "SELECT content FROM message_chat WHERE is_from_ai = 0 AND content IS NOT NULL AND LENGTH(content) > 0";
        $results = $connection->executeQuery($sql)->fetchAllAssociative();
        
        // Define categories and their keywords
        $categories = [
            'Question' => ['?', 'how', 'what', 'when', 'where', 'why', 'can you', 'could you', 'help', 'explain'],
            'Assignment' => ['assignment', 'homework', 'project', 'task', 'due', 'submission', 'submit'],
            'Clarification' => ['clarify', 'understand', 'confused', 'mean', 'meant', 'refers', 'referring'],
            'Feedback' => ['feedback', 'review', 'comment', 'suggestion', 'grade', 'mark', 'score'],
            'Technical' => ['error', 'issue', 'problem', 'bug', 'doesn\'t work', 'not working', 'broken'],
            'Other' => []
        ];
        
        // Categorize messages
        $categoryCounts = array_fill_keys(array_keys($categories), 0);
        $totalMessages = count($results);
        
        foreach ($results as $result) {
            $content = strtolower($result['content']);
            $categorized = false;
            
            foreach ($categories as $category => $keywords) {
                if ($category === 'Other') continue;
                
                foreach ($keywords as $keyword) {
                    if (strpos($content, strtolower($keyword)) !== false) {
                        $categoryCounts[$category]++;
                        $categorized = true;
                        break;
                    }
                }
                
                if ($categorized) break;
            }
            
            if (!$categorized) {
                $categoryCounts['Other']++;
            }
        }
        
        // Convert to percentage
        $result = [];
        foreach ($categoryCounts as $category => $count) {
            $percentage = $totalMessages > 0 ? ($count / $totalMessages) * 100 : 0;
            $result[] = [
                'name' => $category,
                'value' => $count,
                'percentage' => round($percentage, 1)
            ];
        }
        
        return $result;
    }

    /**
     * Get common terms/words used in student messages
     */
    public function getCommonTerms(int $limit = 30): array
    {
        // Get all student messages directly
        $connection = $this->entityManager->getConnection();
        $sql = "SELECT content FROM message_chat WHERE is_from_ai = 0 AND content IS NOT NULL AND LENGTH(content) > 0";
        $results = $connection->executeQuery($sql)->fetchAllAssociative();
        
        return $this->analyzeTerms($results, $limit);
    }
    
    /**
     * Get common terms/words used in messages for a specific subject
     */
    public function getSubjectCommonTerms(Categorie $subject, int $limit = 20): array
    {
        $connection = $this->entityManager->getConnection();
        $subjectId = $subject->getId();
        
        // Get student messages for this subject
        $sql = "SELECT m.content
                FROM message_chat m
                JOIN subject_chat sc ON m.subject_chat_id = sc.id
                WHERE sc.matiere_id = :subjectId
                AND m.is_from_ai = 0
                AND m.content IS NOT NULL 
                AND LENGTH(m.content) > 0";
                
        $stmt = $connection->prepare($sql);
        $stmt->bindValue('subjectId', $subjectId);
        $messages = $stmt->executeQuery()->fetchAllAssociative();
        
        return $this->analyzeTerms($messages, $limit);
    }
    
    /**
     * Analyze terms in messages (helper method)
     */
    private function analyzeTerms(array $messages, int $limit): array
    {
        // Initialize word count
        $wordCounts = [];
        $stopWords = $this->getStopWords();
        
        // Count word occurrences
        foreach ($messages as $message) {
            $content = strtolower($message['content']);
            
            // Remove punctuation
            $content = preg_replace('/[^\p{L}\p{N}\s]/u', ' ', $content);
            
            // Split into words
            $words = preg_split('/\s+/', $content, -1, PREG_SPLIT_NO_EMPTY);
            
            foreach ($words as $word) {
                // Skip short words and stop words
                if (strlen($word) < 3 || in_array($word, $stopWords)) {
                    continue;
                }
                
                if (!isset($wordCounts[$word])) {
                    $wordCounts[$word] = 0;
                }
                
                $wordCounts[$word]++;
            }
        }
        
        // Sort by count (descending)
        arsort($wordCounts);
        
        // Take the top terms
        $wordCounts = array_slice($wordCounts, 0, $limit, true);
        
        // Format for jQCloud
        $result = [];
        foreach ($wordCounts as $word => $count) {
            $result[] = [
                'text' => $word,
                'weight' => $count
            ];
        }
        
        return $result;
    }
    
    /**
     * Get common stop words to exclude from analysis
     */
    private function getStopWords(): array
    {
        return [
            'the', 'and', 'that', 'for', 'this', 'with', 'you', 'not', 'are', 'from', 
            'have', 'was', 'but', 'they', 'your', 'all', 'can', 'has', 'there', 'been',
            'which', 'would', 'will', 'more', 'also', 'their', 'than', 'its', 'only', 'then',
            'our', 'may', 'these', 'who', 'some', 'other', 'into', 'should', 'could', 'about',
            'now', 'any', 'such', 'being', 'because', 'when', 'were', 'even', 'had', 'what',
            'since', 'those', 'after', 'before', 'through', 'very', 'just', 'where', 'how', 'why'
        ];
    }

    /**
     * Get message statistics for a specific subject
     */
    public function getSubjectMessageStats(Categorie $subject): array
    {
        $connection = $this->entityManager->getConnection();
        $subjectId = $subject->getId();
        
        // Get total messages for this subject
        $sql = "SELECT COUNT(*) as total 
                FROM message_chat m
                JOIN subject_chat sc ON m.subject_chat_id = sc.id
                WHERE sc.matiere_id = :subjectId
                AND m.is_from_ai = 0";
        
        $stmt = $connection->prepare($sql);
        $stmt->bindValue('subjectId', $subjectId);
        $totalMessages = (int)$stmt->executeQuery()->fetchOne();
        
        // Get count of unique students for this subject
        $sql = "SELECT COUNT(DISTINCT m.sender_id) as unique_students
                FROM message_chat m
                JOIN subject_chat sc ON m.subject_chat_id = sc.id
                WHERE sc.matiere_id = :subjectId
                AND m.is_from_ai = 0";
                
        $stmt = $connection->prepare($sql);
        $stmt->bindValue('subjectId', $subjectId);
        $uniqueStudents = (int)$stmt->executeQuery()->fetchOne();
        
        // Get average message length
        $sql = "SELECT AVG(LENGTH(m.content)) as avg_length
                FROM message_chat m
                JOIN subject_chat sc ON m.subject_chat_id = sc.id
                WHERE sc.matiere_id = :subjectId
                AND m.is_from_ai = 0";
                
        $stmt = $connection->prepare($sql);
        $stmt->bindValue('subjectId', $subjectId);
        $averageLength = $stmt->executeQuery()->fetchOne();
        
        if ($averageLength === null) {
            $averageLength = 0;
        }
        
        return [
            'totalMessages' => $totalMessages,
            'uniqueStudents' => $uniqueStudents,
            'averageLength' => round((float)$averageLength)
        ];
    }

    /**
     * Get message categories for a specific subject
     */
    public function getSubjectMessageCategories(Categorie $subject): array
    {
        $connection = $this->entityManager->getConnection();
        $subjectId = $subject->getId();
        
        // Get all student messages for this subject
        $sql = "SELECT m.content
                FROM message_chat m
                JOIN subject_chat sc ON m.subject_chat_id = sc.id
                WHERE sc.matiere_id = :subjectId
                AND m.is_from_ai = 0
                AND m.content IS NOT NULL 
                AND LENGTH(m.content) > 0";
                
        $stmt = $connection->prepare($sql);
        $stmt->bindValue('subjectId', $subjectId);
        $messages = $stmt->executeQuery()->fetchAllAssociative();
        
        // Define categories and their keywords
        $categories = [
            'Question' => ['?', 'how', 'what', 'when', 'where', 'why', 'can you', 'could you', 'help', 'explain'],
            'Assignment' => ['assignment', 'homework', 'project', 'task', 'due', 'submission', 'submit'],
            'Clarification' => ['clarify', 'understand', 'confused', 'mean', 'meant', 'refers', 'referring'],
            'Feedback' => ['feedback', 'review', 'comment', 'suggestion', 'grade', 'mark', 'score'],
            'Technical' => ['error', 'issue', 'problem', 'bug', 'doesn\'t work', 'not working', 'broken'],
            'Other' => []
        ];
        
        // Categorize messages
        $categoryCounts = array_fill_keys(array_keys($categories), 0);
        $totalMessages = count($messages);
        
        foreach ($messages as $message) {
            $content = strtolower($message['content']);
            $categorized = false;
            
            foreach ($categories as $category => $keywords) {
                if ($category === 'Other') continue;
                
                foreach ($keywords as $keyword) {
                    if (strpos($content, strtolower($keyword)) !== false) {
                        $categoryCounts[$category]++;
                        $categorized = true;
                        break;
                    }
                }
                
                if ($categorized) break;
            }
            
            if (!$categorized) {
                $categoryCounts['Other']++;
            }
        }
        
        // Convert to percentage
        $result = [];
        foreach ($categoryCounts as $category => $count) {
            $percentage = $totalMessages > 0 ? ($count / $totalMessages) * 100 : 0;
            $result[] = [
                'name' => $category,
                'value' => $count,
                'percentage' => round($percentage, 1)
            ];
        }
        
        return $result;
    }
}
