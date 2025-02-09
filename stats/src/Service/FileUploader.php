<?php
// src/Service/FileUploader.php
namespace App\Service;

use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;

class FileUploader
{
    private $targetDirectory;
    private $slugger;
    private  $publicDirectory;

    public function __construct($targetDirectory, $publicDirectory, SluggerInterface $slugger)
    {
        $this->targetDirectory = $targetDirectory;
        $this->slugger = $slugger;
        $this->publicDirectory = $publicDirectory;
    }

    public function upload(?UploadedFile $file, string $path=null)
    {
        if ($file === null) {
            return;
        }

        // Validate the file
        if (!$file->isValid()) {
            throw new FileException($file->getErrorMessage());
        }

        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = $this->slugger->slug($originalFilename);
        $fileName = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();

        try {
            $targetPath = rtrim($this->getTargetDirectory(), '/') . '/' . trim($path, '/');
            
            // Create directory if it doesn't exist
            if (!file_exists($targetPath)) {
                if (!mkdir($targetPath, 0775, true)) {
                    throw new FileException(sprintf(
                        'Unable to create directory "%s". Error: %s',
                        $targetPath,
                        error_get_last()['message'] ?? 'Unknown error'
                    ));
                }
            }

            // Check directory permissions
            if (!is_writable($targetPath)) {
                throw new FileException(sprintf(
                    'Directory "%s" is not writable. Current permissions: %s',
                    $targetPath,
                    substr(sprintf('%o', fileperms($targetPath)), -4)
                ));
            }

            // Move the file
            $file->move($targetPath, $fileName);

            // Verify the file was moved successfully
            if (!file_exists($targetPath . '/' . $fileName)) {
                throw new FileException('File was not moved to the target location');
            }

            return $fileName;
        } catch (FileException $e) {
            error_log('File upload failed: ' . $e->getMessage());
            error_log('Target path: ' . $targetPath);
            error_log('Original filename: ' . $originalFilename);
            throw $e;
        }
    }

    public function getTargetDirectory()
    {
        return $this->targetDirectory;
    }
}