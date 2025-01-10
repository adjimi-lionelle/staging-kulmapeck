<?php

namespace App\Controller\Api\Controller\User;

use App\Entity\Personne;
use App\Service\FileUploader;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Description of ChangeAvatarController
 *
 * @author sensei
 */
#[AsController]
class ChangeAvatarController {
    
    public function __construct(
        private FileUploader $fileUploader,
        private EntityManagerInterface $entityManager
    ) {}
    
    public function __invoke(Personne $personne, Request $request): JsonResponse
    {
        $uploadedFile = $request->files->get('file');
        if (!$uploadedFile) {
            throw new BadRequestHttpException('"file" is required');
        }

        try {
            // Upload the file and get the filename
            $fileName = $this->fileUploader->upload($uploadedFile, '/avatars');
            
            // Update the entity with just the filename
            if ($fileName) {
                $personne->setAvatar($fileName);
                $personne->setUpdateAt(new \DateTimeImmutable());
                $this->entityManager->flush();

                // Return a JSON response instead of the entity
                return new JsonResponse([
                    'id' => $personne->getId(),
                    'avatar' => $fileName,
                    'message' => 'Avatar updated successfully'
                ]);
            }
            
            throw new BadRequestHttpException('Failed to upload file');
        } catch (\Exception $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
    }
}
