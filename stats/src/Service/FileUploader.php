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
            $targetPath = rtrim($this->getTargetDirectory(), '/') . '/' . trim($path, '/');
            if (!is_dir($targetPath)) {
                mkdir($targetPath, 0775, true);
            }
            $file->move($targetPath, $fileName);
        } catch (FileException $e) {
            throw $e; // Re-throw to see the actual error
        }

        return $fileName;
    }

    public function getTargetDirectory()
    {
        return $this->targetDirectory;
    }
}