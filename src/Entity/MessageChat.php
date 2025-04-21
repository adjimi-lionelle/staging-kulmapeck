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
    #[ORM\JoinColumn(name: 'subject_chat_id', nullable: false)]
    private ?SubjectChat $subjectChat = null;

    #[ORM\Column(type: "text")]
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

    #[ORM\Column]
    private ?\DateTimeImmutable $expiresAt = null;

    #[ORM\ManyToOne(inversedBy: 'messageChats')]
    #[ORM\JoinColumn(nullable: true)]
    private ?Enseignant $teacherPersona = null;

    #[ORM\Column]
    private ?bool $isModerated = false;

    #[ORM\Column]
    private ?bool $isDeleted = false;

    public function __construct()
    {
        $this->createAt = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSubjectChat(): ?SubjectChat
    {
        return $this->subjectChat;
    }

    public function setSubjectChat(?SubjectChat $subjectChat): static
    {
        $this->subjectChat = $subjectChat;
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

    public function getExpiresAt(): ?\DateTimeImmutable
    {
        return $this->expiresAt;
    }

    public function setExpiresAt(\DateTimeImmutable $expiresAt): static
    {
        $this->expiresAt = $expiresAt;

        return $this;
    }

    public function getTeacherPersona(): ?Enseignant
    {
        return $this->teacherPersona;
    }

    public function setTeacherPersona(?Enseignant $teacherPersona): static
    {
        $this->teacherPersona = $teacherPersona;

        return $this;
    }

    public function isIsModerated(): ?bool
    {
        return $this->isModerated;
    }

    public function setIsModerated(bool $isModerated): static
    {
        $this->isModerated = $isModerated;

        return $this;
    }

    public function isIsDeleted(): ?bool
    {
        return $this->isDeleted;
    }

    public function setIsDeleted(bool $isDeleted): static
    {
        $this->isDeleted = $isDeleted;

        return $this;
    }
}
