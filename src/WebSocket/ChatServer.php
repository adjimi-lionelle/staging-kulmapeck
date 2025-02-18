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
        
        // Validate required parameters
        if (!isset($queryParams['token']) || !isset($queryParams['chat_id'])) {
            $conn->close();
            return;
        }

        // Get chat and user from database
        $chat = $this->entityManager->getRepository(SubjectChat::class)->find($queryParams['chat_id']);
        $user = $this->entityManager->getRepository(User::class)->find($queryParams['user_id']);
        
        if (!$chat || !$user) {
            $conn->close();
            return;
        }

        // Create WebSocket connection record
        $wsConnection = new WebSocketConnection();
        $wsConnection->setConnectionId($conn->resourceId);
        $wsConnection->setUser($user);
        $wsConnection->setSubjectChat($chat);
        $wsConnection->setIsTyping(false);
        
        $this->entityManager->persist($wsConnection);
        $this->entityManager->flush();
        
        echo "New connection! ({$conn->resourceId})\n";
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
