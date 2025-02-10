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
        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = $this->slugger->slug($originalFilename);
        $fileName = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();

        try {
            // Create directory if it doesn't exist
            $targetPath = $this->getTargetDirectory().$path;
            if (!file_exists($targetPath)) {
                mkdir($targetPath, 0777, true);
            }
            
            $file->move($targetPath, $fileName);
        } catch (FileException $e) {
            throw new FileException('Could not upload file: ' . $e->getMessage());
        }

        return $fileName;
    }

    public function getTargetDirectory()
    {
        return $this->targetDirectory;
    }
}