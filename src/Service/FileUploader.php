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

    public function upload(?UploadedFile $file, string $path=null)
    {
        if ($file === null) {
            return;
        }

        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = $this->slugger->slug($originalFilename);
        $extension = $file->guessExtension();

        // Skip PDF conversion for avatar images
        if (!str_contains($path, 'images/admin') && 
            !str_contains($path, 'images/eleves') && 
            !str_contains($path, 'images/enseignants/kyc') &&
            in_array($extension, ['doc', 'docx', 'jpg', 'jpeg', 'png'])) {
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
                // If conversion fails, fall back to original file
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