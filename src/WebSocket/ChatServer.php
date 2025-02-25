<?php

namespace App\WebSocket;

use App\Entity\MessageChat;
use App\Entity\SubjectChat;
use App\Entity\User;
use App\Entity\WebSocketConnection;
use Doctrine\ORM\EntityManagerInterface;
use Ratchet\ConnectionInterface;
use Ratchet\WebSocket\MessageComponentInterface;

class ChatServer implements MessageComponentInterface
{
    private $connections;
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->connections = new \SplObjectStorage;
        $this->entityManager = $entityManager;
    }

    public function onOpen(ConnectionInterface $conn)
    {
        $this->connections->attach($conn);
        
        // Parse query parameters
        $queryString = $conn->httpRequest->getUri()->getQuery();
        parse_str($queryString, $queryParams);
        
        echo sprintf(
            "New connection attempt! (ID: %s)\nQuery params: %s\n",
            $conn->resourceId,
            json_encode($queryParams)
        );
        
        // Validate required parameters
        if (!isset($queryParams['token']) || !isset($queryParams['chat_id'])) {
            echo sprintf("Missing required parameters. Connection %s closed.\n", $conn->resourceId);
            $conn->close();
            return;
        }

        // Get chat and user from database
        $chat = $this->entityManager->getRepository(SubjectChat::class)->find($queryParams['chat_id']);
        $user = $this->entityManager->getRepository(User::class)->find($queryParams['user_id']);
        
        echo sprintf(
            "Looking up entities:\nChat ID: %s (Found: %s)\nUser ID: %s (Found: %s)\n",
            $queryParams['chat_id'],
            $chat ? 'yes' : 'no',
            $queryParams['user_id'],
            $user ? 'yes' : 'no'
        );
        
        if (!$chat || !$user) {
            echo sprintf("Chat or user not found. Connection %s closed.\n", $conn->resourceId);
            $conn->close();
            return;
        }

        // Create WebSocket connection record
        try {
            $wsConnection = new WebSocketConnection();
            $wsConnection->setConnectionId($conn->resourceId);
            $wsConnection->setUser($user);
            $wsConnection->setSubjectChat($chat);
            $wsConnection->setIsTyping(false);
            
            $this->entityManager->persist($wsConnection);
            $this->entityManager->flush();
            
            echo sprintf("WebSocket connection %s successfully established and recorded.\n", $conn->resourceId);
        } catch (\Exception $e) {
            echo sprintf("Error creating connection record: %s\n", $e->getMessage());
            $conn->close();
            return;
        }
    }

    public function onMessage(ConnectionInterface $from, $msg)
    {
        $data = json_decode($msg, true);
        if (!$data || !isset($data['type'])) {
            return;
        }

        switch ($data['type']) {
            case 'message':
                $this->handleChatMessage($from, $data);
                break;
            case 'typing':
                $this->handleTypingStatus($from, $data);
                break;
        }
    }

    private function handleChatMessage(ConnectionInterface $from, array $data)
    {
        if (!isset($data['chat_id']) || !isset($data['content'])) {
            return;
        }

        $chat = $this->entityManager->getRepository(SubjectChat::class)->find($data['chat_id']);
        if (!$chat) {
            return;
        }

        $user = $this->entityManager->getRepository(User::class)->find($data['user_id']);
        
        $message = new MessageChat();
        $message->setContent($data['content']);
        $message->setSender($user);
        $message->setSubjectChat($chat);
        $message->setIsRead(false);
        $message->setIsFromAI(false);
        
        $this->entityManager->persist($message);
        $this->entityManager->flush();
        
        // Broadcast to other users in the same chat
        foreach ($this->connections as $client) {
            if ($from !== $client) {
                $client->send(json_encode([
                    'type' => 'message',
                    'message' => [
                        'id' => $message->getId(),
                        'content' => $message->getContent(),
                        'sender' => [
                            'id' => $user->getId(),
                            'name' => $user->getUsername()
                        ],
                        'isFromAI' => false,
                        'createAt' => $message->getCreateAt()->format('Y-m-d H:i:s')
                    ]
                ]));
            }
        }
    }

    private function handleTypingStatus(ConnectionInterface $from, array $data)
    {
        if (!isset($data['chat_id']) || !isset($data['isTyping'])) {
            return;
        }

        $wsConnection = $this->entityManager->getRepository(WebSocketConnection::class)
            ->findOneBy(['connectionId' => $from->resourceId]);
            
        if ($wsConnection) {
            $wsConnection->setIsTyping($data['isTyping']);
            $this->entityManager->flush();
            
            // Broadcast typing status to other users
            foreach ($this->connections as $client) {
                if ($from !== $client) {
                    $client->send(json_encode([
                        'type' => 'typing',
                        'user_id' => $wsConnection->getUser()->getId(),
                        'isTyping' => $data['isTyping']
                    ]));
                }
            }
        }
    }

    public function onClose(ConnectionInterface $conn)
    {
        $this->connections->detach($conn);
        
        // Remove WebSocket connection record
        $wsConnection = $this->entityManager->getRepository(WebSocketConnection::class)
            ->findOneBy(['connectionId' => $conn->resourceId]);
            
        if ($wsConnection) {
            $this->entityManager->remove($wsConnection);
            $this->entityManager->flush();
        }
        
        echo "Connection {$conn->resourceId} has disconnected\n";
    }

    public function onError(ConnectionInterface $conn, \Exception $e)
    {
        echo "An error has occurred: {$e->getMessage()}\n";
        $conn->close();
    }
}
