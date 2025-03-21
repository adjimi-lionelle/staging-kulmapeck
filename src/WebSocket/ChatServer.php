<?php

namespace App\WebSocket;

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use Doctrine\ORM\EntityManagerInterface;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use App\Entity\MessageChat;
use App\Entity\User;
use App\Repository\EleveRepository;
use App\Entity\SubjectChat;
use App\Entity\WebSocketConnection;
use App\WebSocket\AIMessageHandler;

class ChatServer implements MessageComponentInterface
{
    private $entityManager;
    private $aiMessageHandler;
    private $jwtSecret;
    private $eleveRepository;
    private \SplObjectStorage $clients;

    public function __construct(EntityManagerInterface $entityManager, string $jwtSecret, AIMessageHandler $aiMessageHandler, EleveRepository $eleveRepository)
    {
        $this->entityManager = $entityManager;
        $this->clients = new \SplObjectStorage();
        $this->jwtSecret = $jwtSecret;
        $this->aiMessageHandler = $aiMessageHandler;
        $this->eleveRepository = $eleveRepository;
    }

  /*  public function onOpen(ConnectionInterface $conn)
    {
        $queryParams = [];
        parse_str(parse_url($conn->httpRequest->getUri(), PHP_URL_QUERY), $queryParams);

        if (!isset($queryParams['token']) || !isset($queryParams['subjectChat_id'])) {
            echo "Connexion refusée : paramètre manquant.\n";
            $conn->close();
            return;
        }

        $token = $queryParams['token'];
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

            //  Ajout de la nouvelle connexion (uniquement si aucune connexion existante)
            $this->clients->attach($conn, ['user' => $user, 'subjectChat' => $subjectChat]);
            echo "Nouvelle connexion : Utilisateur #{$userId} dans la discussion #{$subjectChatId}.\n";

            

            //  Mise à jour de la connexion en base de données
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

        } catch (\Exception $e) {
            echo "Erreur lors de la connexion WebSocket : " . $e->getMessage() . "\n";
            $conn->close();
        }
    }*/

    public function onOpen(ConnectionInterface $conn)
{
    // Récupération des paramètres de l'URL WebSocket
    $queryParams = [];
    parse_str(parse_url($conn->httpRequest->getUri(), PHP_URL_QUERY), $queryParams);

     // Afficher les paramètres reçus pour debug
     echo "DEBUG: Connexion tentée avec paramètres -> " . json_encode($queryParams) . "\n";
     error_log("DEBUG: Connexion tentée avec paramètres -> " . json_encode($queryParams), 3, "/var/log/websocket.log");
 
  

    // 🔍 Vérifier si les paramètres `token` et `subjectChat_id` sont bien envoyés
    if (!isset($queryParams['token']) || !isset($queryParams['subjectChat_id'])) {
        echo "❌ Connexion refusée pas de token : paramètre manquant. Requête reçue: " . json_encode($queryParams) . "\n";
        error_log("❌ Connexion refusée pas de token : paramètre manquant. Query reçu: " . json_encode($queryParams), 3, "/var/log/websocket.log");
        $conn->close();
        return;
    }

    $token = $queryParams['token'];
    $subjectChatId = $queryParams['subjectChat_id'];

    try {
        // 🔑 Vérification et décodage du token JWT
        $decoded = JWT::decode($token, new Key($this->jwtSecret, 'HS256'));
        $userId = $decoded->user_id;
        echo "✅ Token décodé avec succès pour l'utilisateur #{$userId}\n";

        // 🔍 Vérifier si l'utilisateur existe en base de données
        $user = $this->entityManager->getRepository(User::class)->find($userId);
        if (!$user) {
            echo "❌ Utilisateur introuvable pour l'ID {$userId}\n";
            error_log("❌ Utilisateur introuvable: {$userId}", 3, "/var/log/websocket.log");
            $conn->close();
            return;
        }

        // 🔍 Vérifier si le `subjectChat` existe en base de données
        $subjectChat = $this->entityManager->getRepository(SubjectChat::class)->find($subjectChatId);
        if (!$subjectChat) {
            echo "❌ Discussion introuvable pour l'ID {$subjectChatId}\n";
            error_log("❌ Discussion introuvable: {$subjectChatId}", 3, "/var/log/websocket.log");
            $conn->close();
            return;
        }

        // ✅ Ajouter la nouvelle connexion WebSocket
        $this->clients->attach($conn, ['user' => $user, 'subjectChat' => $subjectChat]);
        echo "🔗 Nouvelle connexion : Utilisateur #{$userId} dans la discussion #{$subjectChatId}.\n";

        // 📌 Mise à jour de la connexion dans la base de données
        $existingConnection = $this->entityManager->getRepository(WebSocketConnection::class)
            ->findOneBy(['user' => $user, 'subjectChat' => $subjectChat]);

        if (!$existingConnection) {
            echo "🆕 Création d'une nouvelle entrée WebSocketConnection pour l'utilisateur #{$userId}\n";

            $webSocketConnection = new WebSocketConnection();
            $webSocketConnection->setUser($user);
            $webSocketConnection->setSubjectChat($subjectChat);
            $webSocketConnection->setLastActivity(new \DateTime());

            $this->entityManager->persist($webSocketConnection);
            $this->entityManager->flush();
        } else {
            echo "🔄 Mise à jour de l'activité pour WebSocketConnection de l'utilisateur #{$userId}\n";
            $existingConnection->setLastActivity(new \DateTime());
            $this->entityManager->flush();
        }

    } catch (\Exception $e) {
        // 🔥 Gérer les erreurs et afficher le message d'erreur
        echo "❌ Erreur lors de la connexion WebSocket : " . $e->getMessage() . "\n";
        error_log("❌ Erreur WebSocket: " . $e->getMessage(), 3, "/var/log/websocket.log");
        $conn->close();
    }
}



    public function onMessage(ConnectionInterface $from, $msg)
    {
        echo "Message reçu : " . $msg . "\n";
        try {
            $data = json_decode($msg, true);

            if (!isset($data['message']) || empty(trim($data['message']))) {
                echo "Message invalide ou vide.\n";
                return;
            }

            $user = $this->clients[$from]['user'];
            $subjectChat = $this->clients[$from]['subjectChat'];
            $eleve = $this->eleveRepository->findOneBy(['utilisateur' => $user]);
            $class = $eleve->getClasse()->getName();

            $message = new MessageChat();
            $message->setSender($user);
            $message->setSubjectChat($subjectChat);
            $message->setContent($data['message']);
            $message->setIsFromAI(false);
            $message->setIsRead(true);
            $message->setExpiresAt((new \DateTimeImmutable())->modify('+30 days'));

            $this->entityManager->persist($message);
            $this->entityManager->flush();

            echo "Message sauvegardé en BD avec ID : " . $message->getId() . "\n";

            $response = json_encode([
                'type' => 'new_message',
                'message' => [
                    'id' => $message->getId(),
                    'content' => $message->getContent(),
                    'sender_id' => $user->getId(),
                    'createdAt' => $message->getExpiresAt()->format('Y-m-d H:i:s'),
                ]
            ]);

            //  Envoyer le message uniquement aux autres clients connectés
            foreach ($this->clients as $client) {
                if ($client !== $from && $this->clients[$client]['subjectChat'] === $subjectChat) {
                    $client->send($response);
                }
            }

            // Appel de l'IA (éviter l'envoi en double)
            echo "DEBUG: Appel de l'IA pour générer une réponse...\n";
            $aiResponse = $this->aiMessageHandler->handleMessage($data, $user, $class);
            // Vérifie si une réponse a bien été générée
            if (!$aiResponse) {
                echo "DEBUG ERROR: Aucune réponse IA générée !\n";
                return; // Sortie anticipée si pas de réponse IA
            }

            echo "DEBUG: Réponse de l'IA générée: " . json_encode($aiResponse) . "\n";

            if ($aiResponse) {
                $aiResponseData = [
                    'type' => 'new_message',
                    'message' => [
                        'id' => null, 
                        'content' => $aiResponse['message'],
                        'sender_id' => $aiResponse['author'],  
                        'isFromAI'  => $aiResponse['isFromAI'],
                        'createdAt' => $aiResponse['timestamp'],
                    ]
                ];
                echo "DEBUG: Nombre de clients connectés : " . count($this->clients) . "\n";

                //  Envoyer la réponse IA uniquement **une seule fois**
               /* foreach ($this->clients as $client) {
                    echo "DEBUG: Vérification client WebSocket - Utilisateur #" . $this->clients[$client]['user']->getId() . " - Discussion #" . $this->clients[$client]['subjectChat']->getId() . "\n";
                    if ($client !== $from && $this->clients[$client]['subjectChat'] === $subjectChat) {
                        echo "DEBUG: Envoi de la réponse IA à un seul client\n";
                        $client->send(json_encode($aiResponseData));
                       // break; //  Empêche l'envoi multiple
                    }
                }*/

                foreach ($this->clients as $client) {
                    echo "DEBUG: Vérification client WebSocket - Utilisateur #" . $this->clients[$client]['user']->getId() . " - Discussion #" . $this->clients[$client]['subjectChat']->getId() . "\n";
                    
                    if ($this->clients[$client]['subjectChat']->getId() === $subjectChat->getId()) {
                        echo "DEBUG: Envoi de la réponse IA au client WebSocket ID: " . $this->clients[$client]['user']->getId() . "\n";
                        $client->send(json_encode($aiResponseData));
                    }
                }
                
            }

        } catch (\Exception $e) {
            echo "Erreur lors de la sauvegarde du message : " . $e->getMessage() . "\n";
        }
    }

    public function onClose(ConnectionInterface $conn)
    {
        if (isset($this->clients[$conn])) {
            $userId = $this->clients[$conn]['user']->getId();
            echo "Connexion WebSocket fermée pour l'utilisateur : " . $userId . "\n";
            $this->clients->detach($conn);
        }
    }

    public function onError(ConnectionInterface $conn, \Exception $e)
    {
        echo "Erreur WebSocket : " . $e->getMessage() . "\n";
        $conn->close();
    }
}
