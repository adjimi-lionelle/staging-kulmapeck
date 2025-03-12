<?php

namespace App\WebSocket;

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use Doctrine\ORM\EntityManagerInterface;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use App\Entity\MessageChat;
use App\Entity\User;
use App\Entity\SubjectChat;
use App\Entity\WebSocketConnection;

class ChatServer implements MessageComponentInterface
{

    private $entityManager;
   // private $clients;
    private $jwtSecret;
    private \SplObjectStorage $clients;

    public function __construct(EntityManagerInterface $entityManager, string $jwtSecret)
    {
        $this->entityManager = $entityManager;
        $this->clients = new \SplObjectStorage();
        $this->jwtSecret = $jwtSecret;
    }


    public function onOpen(ConnectionInterface $conn)
{
     $queryParams = [];
     parse_str(parse_url($conn->httpRequest->getUri(), PHP_URL_QUERY), $queryParams);

     if (!isset($queryParams['token']) || !isset($queryParams['subjectChat_id'])) {
         echo "Connexion refusée : paramètre manquant.\n";
         $conn->close();
         return;
     }$token = $queryParams['token'];
     $subjectChatId = $queryParams['subjectChat_id'];

     try {
        
         $decoded = JWT::decode($token, new Key($this->jwtSecret, 'HS256'));
         $userId = $decoded->user_id;

         $user = $this->entityManager->getRepository(User::class)->find($userId);
         if (!$user) {
             echo "Utilisateur introuvable.\n";
             $conn->close();
             return;
         }

         $subjectChat = $this->entityManager->getRepository(SubjectChat::class)->find($subjectChatId);
         if (!$subjectChat) {
             echo "Discussion introuvable.\n";
             $conn->close();
             return;
         }

        $existingConnection = $this->entityManager->getRepository(WebSocketConnection::class)
        ->findOneBy(['user' => $user, 'subjectChat' => $subjectChat]);

    if (!$existingConnection) {
        $webSocketConnection = new WebSocketConnection();
        $webSocketConnection->setUser($user);
        $webSocketConnection->setSubjectChat($subjectChat);
        $webSocketConnection->setLastActivity(new \DateTime());

        $this->entityManager->persist($webSocketConnection);
        $this->entityManager->flush();
    } else {
        $existingConnection->setLastActivity(new \DateTime());
        $this->entityManager->flush();
    }

         $this->clients->attach($conn, ['user' => $user, 'subjectChat' => $subjectChat]);
         echo "Nouvelle connexion : Utilisateur #{$userId} dans la discussion #{$subjectChatId}.\n";

         // Envoyer un message de bienvenue
         $conn->send(json_encode([
             'type' => 'success',
             'message' => "Connexion réussie à la discussion #{$subjectChatId}."
         ]));

     } catch (\Exception $e) {
         echo "Erreur lors de la connexion WebSocket : " . $e->getMessage() . "\n";
         $conn->close();
     }
 }

    /**
     * Quand un message est reçu
    */
    public function onMessage(ConnectionInterface $from, $msg)
    {
        echo "Message reçu : " . $msg . "\n";
        try {
            $data = json_decode($msg, true);

            if (!isset($data['message']) || empty(trim($data['message']))) {
                echo "Message invalide ou vide.\n";
                return;
            }

            if (!isset($this->clients[$from])) {
                echo "Erreur : Connexion non trouvée.\n";
                return;
            }

            $user = $this->clients[$from]['user'];
            $subjectChat = $this->clients[$from]['subjectChat'];

            $student = $subjectChat->getEleve();
            $studentUser = $student ? $student->getUtilisateur() : null;

            echo "DEBUG: ID de l'élève dans le chat: " . ($student ? $student->getId() : 'NULL') . "\n";
            echo "DEBUG: ID de l'utilisateur associé à l'élève: " . ($studentUser ? $studentUser->getId() : 'NULL') . "\n";
            echo "DEBUG: ID de l'utilisateur connecté: " . $user->getId() . "\n";

            if (!$student || $studentUser != $user) {
                echo "Seul l'élève peut poser des questions.\n";
                return;
            }
            

            
                $message = new MessageChat();
                $message->setSender($user);
                $message->setSubjectChat($subjectChat);
                $message->setContent($data['message']);
            // $message->setCreateAt(new \DateTimeImmutable());
                $message->setIsFromAI(false);
                $message->setIsRead(false);
                $message->setExpiresAt((new \DateTimeImmutable())->modify('+30 days'));
                $message->setTeacherPersona(null); // Aucun enseignant assigné par défaut
            
                echo "DEBUG: Message prêt à être enregistré en BD.\n";
            
                $this->entityManager->persist($message);
                $this->entityManager->flush();
            
                echo "Message sauvegardé en BD avec ID : " . $message->getId() . "\n";
        
        } catch (\Exception $e) {
            echo "Erreur lors de la sauvegarde du message : " . $e->getMessage() . "\n";
        }
        

    }
       /* if (!isset($data['message'])) {
            echo "Message invalide.\n";
            return;
        }

        foreach ($this->clients as $client) {
            if ($client !== $from) {
                $client->send(json_encode([
                    'message' => $data['message'],
                    'author' => "User"
                ]));
            }
        }*/
    


    public function onClose(ConnectionInterface $conn)
    {
        $this->clients->detach($conn);
        //echo "Connexion WebSocket fermée : ({$conn->resourceId})\n";
        echo "Connexion WebSocket fermée pour l'utilisateur : " . ($this->clients[$conn]['user']->getId() ?? "inconnu") . "\n";
    }


    public function onError(ConnectionInterface $conn, \Exception $e)
    {
       // echo "Erreur WebSocket : {$e->getMessage()}\n";
        $conn->close();
    }
}
