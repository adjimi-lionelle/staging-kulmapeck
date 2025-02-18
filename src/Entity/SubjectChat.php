<?php

namespace App\Entity;

use App\Repository\SubjectChatRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SubjectChatRepository::class)]
#[ORM\Table(name: 'group_chat')] // Keep the table name for DB compatibility
class SubjectChat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'subjectChats')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Categorie $matiere = null;

    #[ORM\Column]
    private ?int $cycle = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 20)]
    private ?string $type = 'teacher';

    #[ORM\OneToMany(mappedBy: 'subjectChat', targetEntity: MessageChat::class, orphanRemoval: true)]
    private Collection $messageChats;

    #[ORM\Column(name: 'g0_create_at')]
    private ?\DateTimeImmutable $createAt = null;

    #[ORM\OneToMany(mappedBy: 'subjectChat', targetEntity: WebSocketConnection::class, orphanRemoval: true)]
    private Collection $webSocketConnections;

    public function __construct()
    {
        $this->messageChats = new ArrayCollection();
        $this->createAt = new \DateTimeImmutable;
        $this->webSocketConnections = new ArrayCollection();
        $this->type = 'teacher';
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatiere(): ?Categorie
    {
        return $this->matiere;
    }

    public function setMatiere(?Categorie $matiere): static
    {
        $this->matiere = $matiere;
        return $this;
    }

    public function getCycle(): ?int
    {
        return $this->cycle;
    }

    public function setCycle(int $cycle): static
    {
        $this->cycle = $cycle;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return Collection<int, MessageChat>
     */
    public function getMessageChats(): Collection
    {
        return $this->messageChats;
    }

    public function addMessageChat(MessageChat $messageChat): static
    {
        if (!$this->messageChats->contains($messageChat)) {
            $this->messageChats->add($messageChat);
            $messageChat->setSubjectChat($this);
        }
        return $this;
    }

    public function removeMessageChat(MessageChat $messageChat): static
    {
        if ($this->messageChats->removeElement($messageChat)) {
            if ($messageChat->getSubjectChat() === $this) {
                $messageChat->setSubjectChat(null);
            }
        }
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

    /**
     * @return Collection<int, WebSocketConnection>
     */
    public function getWebSocketConnections(): Collection
    {
        return $this->webSocketConnections;
    }

    public function addWebSocketConnection(WebSocketConnection $webSocketConnection): static
    {
        if (!$this->webSocketConnections->contains($webSocketConnection)) {
            $this->webSocketConnections->add($webSocketConnection);
            $webSocketConnection->setSubjectChat($this);
        }
        return $this;
    }

    public function removeWebSocketConnection(WebSocketConnection $webSocketConnection): static
    {
        if ($this->webSocketConnections->removeElement($webSocketConnection)) {
            if ($webSocketConnection->getSubjectChat() === $this) {
                $webSocketConnection->setSubjectChat(null);
            }
        }
        return $this;
    }
}
