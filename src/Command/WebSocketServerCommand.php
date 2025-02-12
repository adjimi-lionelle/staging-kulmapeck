<?php

namespace App\Command;

use Ratchet\Http\HttpServer;
use Ratchet\Server\IoServer;
use Ratchet\WebSocket\WsServer;
use App\WebSocket\ChatServer;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\ORM\EntityManagerInterface;


class WebSocketServerCommand extends Command
{
    protected static $defaultName = 'websocket:start';
    private $entityManager;
    private $jwtSecret;

    public function __construct(EntityManagerInterface $entityManager, string $jwtSecret)
    {
        parent::__construct();
        $this->entityManager = $entityManager;
        $this->jwtSecret = $jwtSecret;
    }


    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln("Démarrage du serveur WebSocket...");

        try {
            $server = IoServer::factory(
                new HttpServer(new WsServer(new ChatServer($this->entityManager, $this->jwtSecret))),
                9000
            );

            $output->writeln("Serveur WebSocket prêt sur ws://127.0.0.1:9000");
            $server->run();
        } catch (\Exception $e) {
            $output->writeln("Erreur WebSocket : " . $e->getMessage());
        }

        return Command::SUCCESS;
    }

}
