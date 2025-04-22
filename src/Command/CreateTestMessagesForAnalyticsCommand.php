<?php

namespace App\Command;

use Doctrine\DBAL\Connection;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:create-test-messages-for-analytics',
    description: 'Create test messages for analytics testing',
)]
class CreateTestMessagesForAnalyticsCommand extends Command
{
    private $connection;

    public function __construct(Connection $connection)
    {
        parent::__construct();
        $this->connection = $connection;
    }

    protected function configure(): void
    {
        $this
            ->addOption('count', 'c', InputOption::VALUE_REQUIRED, 'Number of messages to generate', 50)
            ->addOption('days', 'd', InputOption::VALUE_REQUIRED, 'Number of days to spread messages over', 30)
            ->setHelp('This command generates test messages directly into the database for analytics testing');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $count = (int)$input->getOption('count');
        $days = (int)$input->getOption('days');
        
        $io->title("Generating $count Test Messages for Analytics");
        
        try {
            // Get available student IDs
            $studentIds = $this->connection->executeQuery("SELECT id FROM eleve LIMIT 100")->fetchFirstColumn();
            
            if (empty($studentIds)) {
                $io->error('No students found in the database');
                return Command::FAILURE;
            }
            
            // Get available subject chat IDs
            $subjectChatIds = $this->connection->executeQuery("SELECT id FROM subject_chat LIMIT 100")->fetchFirstColumn();
            
            if (empty($subjectChatIds)) {
                $io->error('No subject chats found in the database');
                return Command::FAILURE;
            }
            
            // Define message templates for different categories
            $messageTemplates = [
                'Question' => [
                    'How do I solve this problem?',
                    'What is the meaning of this term?',
                    'Can you explain this concept to me?',
                    'When do we need to submit the assignment?',
                    'Where can I find more resources about this topic?',
                    'Why is this concept important?',
                    'Help me understand please?'
                ],
                'Assignment' => [
                    'I\'ve completed my assignment.',
                    'The homework was challenging.',
                    'My project is almost done.',
                    'When is the submission due?',
                    'Can I get feedback on my project?'
                ],
                'Clarification' => [
                    'I\'m confused about the concept.',
                    'I don\'t understand what this means.',
                    'Could you clarify what you meant?',
                    'I\'m not sure what the instruction refers to.',
                    'I need clarification on the requirements.'
                ],
                'Feedback' => [
                    'Can I get feedback on my work?',
                    'What did you think of my presentation?',
                    'Any suggestions for improving my assignment?',
                    'I\'d like your opinion on my approach.',
                    'Could you review my work?'
                ],
                'Technical' => [
                    'I\'m having an issue with the software.',
                    'The application doesn\'t work for me.',
                    'There\'s a problem with the tool we\'re using.',
                    'I got an error when trying to submit.',
                    'The feature is broken on my device.'
                ]
            ];
            
            // Categories for message selection
            $categories = array_keys($messageTemplates);
            
            // Create progress bar
            $io->progressStart($count);
            $successCount = 0;
            
            // Generate and insert messages
            for ($i = 0; $i < $count; $i++) {
                // Select random category, student, and subject
                $category = $categories[array_rand($categories)];
                $studentId = $studentIds[array_rand($studentIds)];
                $subjectChatId = $subjectChatIds[array_rand($subjectChatIds)];
                
                // Select random message template from the category
                $templates = $messageTemplates[$category];
                $message = $templates[array_rand($templates)];
                
                // Generate a random date within the specified range
                $randomDays = rand(1, $days);
                $randomHours = rand(0, 23);
                $randomMinutes = rand(0, 59);
                $randomSeconds = rand(0, 59);
                
                $date = new \DateTime("-{$randomDays} days");
                $date->modify("+{$randomHours} hours");
                $date->modify("+{$randomMinutes} minutes");
                $date->modify("+{$randomSeconds} seconds");
                
                try {
                    // Use a simpler insertSql approach
                    $this->connection->executeStatement(
                        'INSERT INTO message_chat (subject_chat_id, sender_id, content, is_from_ai, is_read, create_at, expires_at, is_moderated) 
                         VALUES (?, ?, ?, 0, 0, ?, ?, 0)',
                        [
                            $subjectChatId, 
                            $studentId, 
                            $message, 
                            $date->format('Y-m-d H:i:s'),
                            (new \DateTime('+10 years'))->format('Y-m-d H:i:s') // Set a far future expiration date
                        ]
                    );
                    
                    $successCount++;
                } catch (\Exception $e) {
                    $io->error("Error inserting message: " . $e->getMessage());
                }
                
                $io->progressAdvance();
            }
            
            $io->progressFinish();
            $io->success("Successfully created $successCount test messages for analytics testing");
            
            return Command::SUCCESS;
            
        } catch (\Exception $e) {
            $io->error("Command failed: " . $e->getMessage());
            return Command::FAILURE;
        }
    }
}
