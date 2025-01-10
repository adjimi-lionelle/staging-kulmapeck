<?php
// src/Service/FileUploader.php
namespace App\Service;

use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;
use Psr\Log\LoggerInterface;

class FileUploader
{
    private $targetDirectory;
    private $slugger;
    private $publicDirectory;
    private $fileConverter;
    private $logger;

    // File paths that should skip conversion
    private const SKIP_CONVERSION_PATHS = [
        '/avatars/',
        '/profile_pictures/',
        '/profile_images/',
        '/user_photos/'
    ];

    public function __construct(
        $targetDirectory,
        $publicDirectory,
        SluggerInterface $slugger,
        FileConverter $fileConverter,
        LoggerInterface $logger
    ) {
        $this->targetDirectory = $targetDirectory;
        $this->slugger = $slugger;
        $this->publicDirectory = $publicDirectory;
        $this->fileConverter = $fileConverter;
        $this->logger = $logger;
    }

    public function upload(?UploadedFile $file, string $path = null)
    {
        if ($file === null) {
            return;
        }

        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = $this->slugger->slug($originalFilename);
        $extension = $file->guessExtension();

        // Check if this is a profile/avatar upload path
        $shouldSkipConversion = false;
        foreach (self::SKIP_CONVERSION_PATHS as $skipPath) {
            if ($path && strpos($path, $skipPath) !== false) {
                $shouldSkipConversion = true;
                $this->logger->info('Skipping conversion for profile/avatar image', [
                    'path' => $path,
                    'file' => $originalFilename
                ]);
                break;
            }
        }

        // Convert to PDF if it's a supported format and not a profile picture
        if (!$shouldSkipConversion && in_array($extension, ['doc', 'docx', 'jpg', 'jpeg', 'png'])) {
            try {
                $this->logger->info('Converting file to PDF', [
                    'originalFile' => $originalFilename,
                    'extension' => $extension
                ]);
                
                $pdfPath = $this->fileConverter->convertToPdf($file);
                $fileName = $safeFilename . '-' . uniqid() . '.pdf';
                rename($pdfPath, $this->getTargetDirectory() . $path . '/' . $fileName);
                
                $this->logger->info('File converted and moved successfully', [
                    'newFile' => $fileName
                ]);
                
                return $fileName;
            } catch (\Exception $e) {
                $this->logger->warning('File conversion failed, uploading original file', [
                    'error' => $e->getMessage(),
                    'file' => $originalFilename
                ]);
            }
        }

        // If not converted to PDF or conversion failed, handle original file
        $fileName = $safeFilename . '-' . uniqid() . '.' . $extension;
        try {
            $file->move($this->getTargetDirectory() . $path, $fileName);
            
            $this->logger->info('File uploaded successfully', [
                'file' => $fileName
            ]);
        } catch (FileException $e) {
            $this->logger->error('File upload failed', [
                'error' => $e->getMessage(),
                'file' => $originalFilename
            ]);
            throw $e;
        }

        return $fileName;
    }

    public function getTargetDirectory()
    {
        return $this->targetDirectory;
    }
}