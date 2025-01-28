<?php

namespace App\Entity;

use App\Repository\ChatMessageRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ChatMessageRepository::class)]
class ChatMessage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'chatMessages')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Eleve $student = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $content = null;

    #[ORM\Column]
    private ?bool $isFromAI = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Matiere $subject = null;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
        $this->isFromAI = false;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStudent(): ?Eleve
    {
        return $this->student;
    }

    public function setStudent(?Eleve $student): self
    {
        $this->student = $student;
        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;
        return $this;
    }

    public function isFromAI(): ?bool
    {
        return $this->isFromAI;
    }

    public function setIsFromAI(bool $isFromAI): self
    {
        $this->isFromAI = $isFromAI;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getSubject(): ?Matiere
    {
        return $this->subject;
    }

    public function setSubject(?Matiere $subject): self
    {
        $this->subject = $subject;
        return $this;
    }
}
