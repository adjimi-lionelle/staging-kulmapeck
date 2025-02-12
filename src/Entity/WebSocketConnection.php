<?php

namespace App\Entity;

use App\Repository\WebSocketConnectionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WebSocketConnectionRepository::class)]
class WebSocketConnection
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'webSocketConnections')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\ManyToOne(inversedBy: 'webSocketConnections')]
    #[ORM\JoinColumn(nullable: false)]
    private ?GroupChat $groupChat = null;

    #[ORM\Column]
    private ?bool $isTyping = false;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $lastActivity = null;


    public function __construct()
    {
        $this->lastActivity = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getGroupChat(): ?GroupChat
    {
        return $this->groupChat;
    }

    public function setGroupChat(?GroupChat $groupChat): static
    {
        $this->groupChat = $groupChat;

        return $this;
    }

    public function isIsTyping(): ?bool
    {
        return $this->isTyping;
    }

    public function setIsTyping(bool $isTyping): static
    {
        $this->isTyping = $isTyping;

        return $this;
    }

    public function getLastActivity(): ?\DateTimeInterface
    {
        return $this->lastActivity;
    }

    public function setLastActivity(\DateTimeInterface $lastActivity): static
    {
        $this->lastActivity = $lastActivity;

        return $this;
    }
}
