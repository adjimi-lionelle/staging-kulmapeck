<?php

namespace App\WebSocket;

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use Doctrine\ORM\EntityManagerInterface;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use App\Entity\MessageChat;
use App\Entity\User;
use App\Entity\GroupChat;
use App\Entity\WebSocketConnection;

class ChatServer implements MessageComponentInterface
{

    private $entityManager;
    private $clients;
    private $jwtSecret;

    public function __construct(EntityManagerInterface $entityManager, string $jwtSecret)
    {
        $this->entityManager = $entityManager;
        $this->clients = new \SplObjectStorage();
        $this->jwtSecret = $jwtSecret;
    }


    public function onOpen(ConnectionInterface $conn)
{
    $query = $conn->httpRequest->getUri()->getQuery();
    parse_str($query, $queryParams);

    if (!isset($queryParams['token']) || !isset($queryParams['group_id'])) {
        echo "Aucun token ou group_id fourni !\n";
        $conn->close();
        return;
    }

    try {
        // Décodage du token JWT
        $decoded = JWT::decode($queryParams['token'], new Key($this->jwtSecret, 'HS256'));
        echo "Token décodé avec succès : " . print_r($decoded, true) . "\n";

        // Vérifier si l'utilisateur existe
        $user = $this->entityManager->getRepository(User::class)->find($decoded->user_id);
        if (!$user) {
            echo "Utilisateur introuvable !\n";
            $conn->close();
            return;
        }

        // Vérifier si le groupe existe
        $groupChat = $this->entityManager->getRepository(GroupChat::class)->find($queryParams['group_id']);
        if (!$groupChat) {
            echo "Groupe introuvable !\n";
            $conn->close();
            return;
        }

        echo "Nouvelle connexion WebSocket : Utilisateur " . $user->getId() . " connecté au groupe " . $groupChat->getId() . "\n";

        // **Récupérer l'historique des messages**
        $messages = $this->entityManager->getRepository(MessageChat::class)
            ->findBy(['groupChat' => $groupChat], ['createAt' => 'ASC']);

        $history = [];
        foreach ($messages as $msg) {
            $history[] = [
                'id' => $msg->getId(),
                'content' => $msg->getContent(),
                'author' => $msg->getSender()->getemail(),
                'createdAt' => $msg->getCreateAt()->format('Y-m-d H:i:s')
            ];
        }

        // **Envoyer l'historique des messages au nouvel utilisateur**
        $conn->send(json_encode([
            'type' => 'history',
            'messages' => $history
        ]));

        // **Attacher l'utilisateur et le groupe au WebSocket**
        $this->clients->attach($conn, ['user' => $user, 'groupChat' => $groupChat]);

        // ** Enregistrement en base de données de la connexion**
        $wsConnection = new WebSocketConnection();
        $wsConnection->setUser($user);
        $wsConnection->setGroupChat($groupChat);
        $wsConnection->setIsTyping(false);
        $wsConnection->setLastActivity(new \DateTime());
        $this->entityManager->persist($wsConnection);
        $this->entityManager->flush();

    } catch (\Exception $e) {
        echo "Erreur de décodage du token : " . $e->getMessage() . "\n";
        $conn->close();
    }
}

    public function onMessage(ConnectionInterface $from, $msg)
{

    echo "Message reçu : " . $msg . "\n";
    try {
        $data = json_decode($msg, true);

        if (!isset($data['group_id']) || !isset($data['message'])) {
            throw new \Exception("Données de message invalides");
        }

        $groupChat = $this->entityManager->getRepository(GroupChat::class)->find($data['group_id']);

        if (!$groupChat) {
            throw new \Exception("Groupe introuvable");
        }

        if (!isset($this->clients[$from]['user'])) {
            throw new \Exception("Utilisateur non trouvé dans la session WebSocket");
        }

        $message = new MessageChat();
        $message->setSender($this->clients[$from]['user']);
        $message->setGroupChat($groupChat);
        $message->setContent($data['message']);
        $this->entityManager->persist($message);
        $this->entityManager->flush();

        // Diffuser le message aux autres clients du même groupe
        foreach ($this->clients as $client) {
            if ($this->clients[$client]['groupChat'] === $groupChat) {
                $client->send(json_encode([
                    'message' => $data['message'],
                    'author' => $this->clients[$from]['user']->getEmail()
                ]));
            }    
        }

    } catch (\Exception $e) {
        echo "Erreur WebSocket : " . $e->getMessage() . "\n";
        $from->close(); // Fermer la connexion en cas d'erreur
    }
}


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
