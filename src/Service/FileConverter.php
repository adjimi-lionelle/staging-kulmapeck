<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Psr\Log\LoggerInterface;

class FileConverter
{
    private $tempDirectory;
    private $logger;

    public function __construct(string $tempDirectory, LoggerInterface $logger)
    {
        $this->tempDirectory = $tempDirectory;
        $this->logger = $logger;
    }

    public function convertToPdf(UploadedFile $file): ?string
    {
        $extension = strtolower($file->getClientOriginalExtension());
        $tempPath = $this->tempDirectory . '/' . uniqid();
        $originalFilename = $file->getClientOriginalName();
        
        $this->logger->info('Starting file conversion', [
            'originalFile' => $originalFilename,
            'extension' => $extension
        ]);

        // Move the uploaded file to temp directory
        $file->move($this->tempDirectory, $originalFilename);
        $inputFile = $this->tempDirectory . '/' . $originalFilename;
        $outputFile = $tempPath . '.pdf';

        try {
            switch ($extension) {
                case 'doc':
                case 'docx':
                    return $this->convertWordToPdf($inputFile, $outputFile);
                case 'jpg':
                case 'jpeg':
                case 'png':
                    return $this->convertImageToPdf($inputFile, $outputFile);
                case 'pdf':
                    // If it's already a PDF, just return the path
                    return $inputFile;
                default:
                    throw new \Exception("Unsupported file type: {$extension}");
            }
        } catch (\Exception $e) {
            $this->logger->error('File conversion failed', [
                'error' => $e->getMessage(),
                'file' => $originalFilename
            ]);
            throw $e;
        } finally {
            // Cleanup the original file if it's not a PDF
            if ($extension !== 'pdf' && file_exists($inputFile)) {
                unlink($inputFile);
            }
        }
    }

    private function convertWordToPdf(string $input, string $output): string
    {
        // Using unoconv for Word to PDF conversion (more reliable on Ubuntu)
        $process = new Process([
            'unoconv',
            '-f',
            'pdf',
            '-o',
            $output,
            $input
        ]);

        $process->setTimeout(60); // Give it more time for large documents
        $this->executeProcess($process, 'Word to PDF conversion');

        return $output;
    }

    private function convertImageToPdf(string $input, string $output): string
    {
        // Using convert from ImageMagick
        $process = new Process([
            'convert',
            $input,
            $output
        ]);

        $process->setTimeout(30);
        $this->executeProcess($process, 'Image to PDF conversion');

        return $output;
    }

    private function executeProcess(Process $process, string $operation): void
    {
        $process->run();

        if (!$process->isSuccessful()) {
            $this->logger->error("$operation failed", [
                'command' => $process->getCommandLine(),
                'error' => $process->getErrorOutput()
            ]);
            throw new ProcessFailedException($process);
        }

        $this->logger->info("$operation completed successfully");
    }
}
