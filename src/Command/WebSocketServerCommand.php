<?php

namespace App\Command;

use Ratchet\Http\HttpServer;
use Ratchet\Server\IoServer;
use Ratchet\WebSocket\WsServer;
use App\WebSocket\ChatServer;
use App\WebSocket\AIMessageHandler;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\ORM\EntityManagerInterface;


class WebSocketServerCommand extends Command
{
    protected static $defaultName = 'websocket:start';
    private $entityManager;
    private $jwtSecret; private $aiMessageHandler;

    public function __construct(EntityManagerInterface $entityManager, string $jwtSecret, AIMessageHandler $aiMessageHandler)
    {
        parent::__construct();
        $this->entityManager = $entityManager;
        $this->jwtSecret = $jwtSecret;
        $this->aiMessageHandler = $aiMessageHandler;
    }


    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln("Démarrage du serveur WebSocket...");

        try {
            $port = $_ENV['WEBSOCKET_PORT'] ?? 9000;
            $host = $_ENV['WEBSOCKET_HOST'] ?? '0.0.0.0';

            $server = IoServer::factory(
                new HttpServer(new WsServer(new ChatServer($this->entityManager, $this->jwtSecret, $this->aiMessageHandler))),
                $port,
                $host
            );

            $output->writeln("Serveur WebSocket prêt sur ws://{$host}:{$port}");
            $server->run();
        } catch (\Exception $e) {
            $output->writeln("Erreur WebSocket : " . $e->getMessage());
        }

        return Command::SUCCESS;
    }

}
