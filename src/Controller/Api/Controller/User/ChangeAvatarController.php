<?php

namespace App\Controller\Api\Controller\User;

use App\Entity\Personne;
use App\Service\FileUploader;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * Description of ChangeAvatarController
 *
 * @author sensei
 */
#[AsController]
class ChangeAvatarController {
    
    public function __construct(
        private FileUploader $fileUploader,
        private EntityManagerInterface $entityManager,
        private UrlGeneratorInterface $urlGenerator
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
                
                // Set the content URL for the avatar
                $avatarUrl = $this->urlGenerator->generate('app_home', [], UrlGeneratorInterface::ABSOLUTE_URL);
                $avatarUrl = rtrim($avatarUrl, '/') . '/uploads/avatars/' . $fileName;
                $personne->setContentUrl($avatarUrl);
                
                // Persist changes
                $this->entityManager->flush();

                // Return a JSON response with the necessary data
                return new JsonResponse([
                    'success' => true,
                    'data' => [
                        'id' => $personne->getId(),
                        'avatar' => $fileName,
                        'avatarUrl' => $avatarUrl,
                        'message' => 'Avatar updated successfully'
                    ]
                ], JsonResponse::HTTP_OK, [
                    'Content-Type' => 'application/json;charset=UTF-8',
                    'Cache-Control' => 'no-cache'
                ]);
            }
            
            throw new BadRequestHttpException('Failed to upload file');
        } catch (\Exception $e) {
            // Return error response but don't expose internal error details
            return new JsonResponse([
                'success' => false,
                'error' => 'Failed to update avatar. Please try again.'
            ], JsonResponse::HTTP_BAD_REQUEST);
        }
    }
}
