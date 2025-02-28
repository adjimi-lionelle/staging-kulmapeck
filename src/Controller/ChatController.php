<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\EleveRepository;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Security;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;


class ChatController extends AbstractController
{

    private string $jwtSecret;
    private JWTTokenManagerInterface $jwtManager;



    public function __construct(string $jwtSecret,
    private EleveRepository $eleveRepository,)
    {
        
        $this->jwtSecret = $jwtSecret;
    }  


    
    #[Route('/chat', name: 'app_chat')]
    #[IsGranted('ROLE_USER')]
    public function index(): Response
    {
        /** @var User $user */
        $user = $this->getUser();

        if (!$user) {
            return new JsonResponse(['error' => 'Utilisateur non connecté'], 401);
        }
        return $this->render('student/chat/index.html.twig');
    }


    #[Route('/chat1', name: 'app_chat1')]
    public function chat(): Response
    {
        return $this->render('front/chat/chat.html.twig');
    }

     /* Création d'un token temporaire */
     #[Route('/websocket/token', name: 'api_websocket_token', methods: ['GET'])]
     #[IsGranted('ROLE_USER')]
     public function generateWebSocketToken(): JsonResponse
     {
        $user = $this->getUser();
 
         if (!$user) {
             return new JsonResponse(['error' => 'Utilisateur non connecté'], 401);
         }
          /** @var Eleve $student */
        $student = $this->eleveRepository->findOneBy(['utilisateur' => $user]);
        if (!$student) {
            throw $this->createAccessDeniedException('Student account not found.');
        }
 
         // Générer un token sécurisé avec expiration
         $payload = [
             'user_id' => $student->getId(),
             'exp' => time() + 3600, // Expire dans 1 heure
         ];
 
         // Génération du token avec Firebase JWT
         $token = JWT::encode($payload, $this->jwtSecret, 'HS256');
 
         return new JsonResponse(['token' => $token]);
     }

}
