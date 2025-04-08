<?php

namespace App\Service;

use App\Entity\SubjectChat;
use ZMQContext;
use ZMQSocket;

class WebSocketPusher
{
    private string $zmqHost;
    private int $zmqPort;

    public function __construct(string $zmqHost = '127.0.0.1', int $zmqPort = 5555)
    {
        $this->zmqHost = $zmqHost;
        $this->zmqPort = $zmqPort;
    }

    public function pushToSubject(SubjectChat $subjectChat, array $payload): void
    {
        try {
            $context = new \ZMQContext();
            $socket = $context->getSocket(\ZMQ::SOCKET_PUSH);
            $socket->connect("tcp://{$this->zmqHost}:{$this->zmqPort}");

            $message = [
                'subject_id' => $subjectChat->getId(),
                'payload' => $payload
            ];

            $socket->send(json_encode($message));
        } catch (\Throwable $e) {
            error_log("[ZMQ ERROR] " . $e->getMessage());
        }
    }
}
