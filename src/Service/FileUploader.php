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

    // Allowed image extensions
    private const ALLOWED_IMAGE_EXTENSIONS = [
        'jpg', 'jpeg', 'jfif', 'jpe', 'png', 'gif'
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
            return null;
        }

        // Log initial upload attempt
        $this->logger->info('Starting file upload', [
            'originalName' => $file->getClientOriginalName(),
            'size' => $file->getSize(),
            'mimeType' => $file->getMimeType(),
            'path' => $path
        ]);

        // Validate file
        if (!$file->isValid()) {
            $errorMessage = $this->getUploadErrorMessage($file->getError());
            $this->logger->error('Invalid upload file', [
                'error' => $file->getError(),
                'errorMessage' => $errorMessage,
                'file' => $file->getClientOriginalName()
            ]);
            throw new FileException('Invalid upload file: ' . $errorMessage);
        }

        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = strtolower($file->getClientOriginalExtension());
        
        // If it's a JFIF file, convert extension to jpg
        if ($extension === 'jfif') {
            $extension = 'jpg';
        }

        $safeFilename = $this->slugger->slug($originalFilename);

        // Ensure target directory exists
        $fullUploadPath = $this->getTargetDirectory() . ($path ? $path : '');
        if (!file_exists($fullUploadPath)) {
            if (!mkdir($fullUploadPath, 0777, true)) {
                $error = error_get_last();
                $this->logger->error('Failed to create upload directory', [
                    'path' => $fullUploadPath,
                    'error' => $error['message'] ?? 'Unknown error'
                ]);
                throw new FileException('Unable to create upload directory');
            }
            chmod($fullUploadPath, 0777); // Ensure directory is writable
        }

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

        // For profile pictures, validate that it's an image
        if ($shouldSkipConversion && !in_array($extension, self::ALLOWED_IMAGE_EXTENSIONS)) {
            $this->logger->error('Invalid image file type', [
                'extension' => $extension,
                'allowedTypes' => implode(', ', self::ALLOWED_IMAGE_EXTENSIONS)
            ]);
            throw new FileException('Invalid image file type. Allowed types: ' . implode(', ', self::ALLOWED_IMAGE_EXTENSIONS));
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
                
                if (!rename($pdfPath, $fullUploadPath . '/' . $fileName)) {
                    throw new FileException('Failed to move converted file');
                }
                
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
            // Try to move the file
            if (!$file->move($fullUploadPath, $fileName)) {
                throw new FileException('Failed to move uploaded file');
            }
            
            $this->logger->info('File uploaded successfully', [
                'file' => $fileName,
                'path' => $fullUploadPath
            ]);
            
            return $fileName;
        } catch (FileException $e) {
            $this->logger->error('File upload failed', [
                'error' => $e->getMessage(),
                'file' => $originalFilename,
                'path' => $fullUploadPath
            ]);
            throw $e;
        }
    }

    private function getUploadErrorMessage($errorCode)
    {
        switch ($errorCode) {
            case UPLOAD_ERR_INI_SIZE:
                return 'The file is too large (exceeds PHP upload_max_filesize)';
            case UPLOAD_ERR_FORM_SIZE:
                return 'The file is too large (exceeds HTML MAX_FILE_SIZE)';
            case UPLOAD_ERR_PARTIAL:
                return 'The file was only partially uploaded';
            case UPLOAD_ERR_NO_FILE:
                return 'No file was uploaded';
            case UPLOAD_ERR_NO_TMP_DIR:
                return 'Missing a temporary folder';
            case UPLOAD_ERR_CANT_WRITE:
                return 'Failed to write file to disk';
            case UPLOAD_ERR_EXTENSION:
                return 'A PHP extension stopped the file upload';
            default:
                return 'Unknown upload error';
        }
    }

    public function getTargetDirectory()
    {
        return rtrim($this->targetDirectory, '/\\');
    }
}