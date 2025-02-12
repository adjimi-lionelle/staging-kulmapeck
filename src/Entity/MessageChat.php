<?php

namespace App\Entity;

use App\Repository\MessageChatRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MessageChatRepository::class)]
class MessageChat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'messageChats')]
    #[ORM\JoinColumn(nullable: false)]
    private ?GroupChat $groupChat = null;

    #[ORM\Column(length: 255)]
    private ?string $content = null;

    #[ORM\ManyToOne(inversedBy: 'messageChats')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $sender = null;

    #[ORM\Column]
    private ?bool $isFromAI = false;

    #[ORM\Column]
    private ?bool $isRead = false;

    #[ORM\Column]
    private ?\DateTimeImmutable $createAt = null;


    public function __construct()
    {
        //$this->isIsRead = false;
        //$this->isIsFromAI = false;
        $this->createAt = new \DateTimeImmutable();
    }
 

    public function getId(): ?int
    {
        return $this->id;
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

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): static
    {
        $this->content = $content;

        return $this;
    }

    public function getSender(): ?User
    {
        return $this->sender;
    }

    public function setSender(?User $sender): static
    {
        $this->sender = $sender;

        return $this;
    }

    public function isIsFromAI(): ?bool
    {
        return $this->isFromAI;
    }

    public function setIsFromAI(bool $isFromAI): static
    {
        $this->isFromAI = $isFromAI;

        return $this;
    }

    public function isIsRead(): ?bool
    {
        return $this->isRead;
    }

    public function setIsRead(bool $isRead): static
    {
        $this->isRead = $isRead;

        return $this;
    }

    public function getCreateAt(): ?\DateTimeImmutable
    {
        return $this->createAt;
    }

    public function setCreateAt(\DateTimeImmutable $createAt): static
    {
        $this->createAt = $createAt;

        return $this;
    }
}
