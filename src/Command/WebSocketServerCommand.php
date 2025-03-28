<?php

namespace App\Command;

use Ratchet\Http\HttpServer;
use Ratchet\Server\IoServer;
use Ratchet\WebSocket\WsServer;
use App\WebSocket\ChatServer;
use App\WebSocket\AIMessageHandler;
use App\Repository\EleveRepository;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\ORM\EntityManagerInterface;


class WebSocketServerCommand extends Command
{
    protected static $defaultName = 'websocket:start';
    private $entityManager;
    private $eleveRepository;
    private $jwtSecret; private $aiMessageHandler;

    public function __construct(EntityManagerInterface $entityManager, string $jwtSecret, AIMessageHandler $aiMessageHandler,
    EleveRepository $eleveRepository  )
    {
        parent::__construct();
        $this->entityManager = $entityManager;
        $this->jwtSecret = $jwtSecret;
        $this->aiMessageHandler = $aiMessageHandler;
        $this->eleveRepository = $eleveRepository;
    }


    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        echo "Commande websocket:start exécutée\n"; // AJOUTE CETTE LIGNE
        $output->writeln("Démarrage du serveur WebSocket...");

        try {
            $port = $_ENV['WEBSOCKET_PORT'] ?? 8085;
            $host = $_ENV['WEBSOCKET_HOST'] ?? '0.0.0.0';

            $server = IoServer::factory(
                new HttpServer(new WsServer(new ChatServer($this->entityManager, $this->jwtSecret, $this->aiMessageHandler, $this->eleveRepository))),
                $port,
                $host
            );

            $output->writeln("Serveur WebSocket prêt sur wss://{$host}:{$port}");

        $server->run();

        } catch (\Exception $e) {
            $output->writeln("Erreur WebSocket : " . $e->getMessage());
        }

        return Command::SUCCESS;
    }


}
