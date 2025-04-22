<?php

namespace App\Command;

use App\Service\MessageAnalyticsService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:process-message-analytics',
    description: 'Process student message analytics daily',
)]
class ProcessMessageAnalyticsCommand extends Command
{
    private $messageAnalyticsService;

    public function __construct(MessageAnalyticsService $messageAnalyticsService)
    {
        parent::__construct();
        $this->messageAnalyticsService = $messageAnalyticsService;
    }

    protected function configure(): void
    {
        $this->setHelp('This command processes student message analytics for the admin dashboard. It should be run daily.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('Processing Student Message Analytics');

        $startDate = new \DateTime('-30 days');
        $endDate = new \DateTime();

        $io->section('Processing message trends');
        $messageTrends = $this->messageAnalyticsService->getMessageTrends($startDate, $endDate);
        $io->success(sprintf('Processed %d days of message trends', count($messageTrends)));

        $io->section('Processing message categories');
        $messageCategories = $this->messageAnalyticsService->getMessageCategories();
        $io->success(sprintf('Processed %d message categories', count($messageCategories)));

        $io->section('Processing top subjects');
        $topSubjects = $this->messageAnalyticsService->getTopSubjects(10);
        $io->success(sprintf('Processed %d top subjects', count($topSubjects)));

        $io->section('Processing top students');
        $topStudents = $this->messageAnalyticsService->getTopStudents(10);
        $io->success(sprintf('Processed %d top students', count($topStudents)));

        $io->section('Processing common terms');
        $commonTerms = $this->messageAnalyticsService->getCommonTerms(50);
        $io->success(sprintf('Processed %d common terms', count($commonTerms)));

        $io->success('Message analytics processing completed successfully!');

        return Command::SUCCESS;
    }
}
