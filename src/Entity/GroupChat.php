<?php

namespace App\Entity;

use App\Repository\GroupChatRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GroupChatRepository::class)]
class GroupChat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'groupChats')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Categorie $matiere = null;

    #[ORM\Column]
    private ?int $cycle = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToMany(mappedBy: 'groupChat', targetEntity: MessageChat::class, orphanRemoval: true)]
    private Collection $messageChats;

    #[ORM\Column]
    private ?\DateTimeImmutable $createAt = null;

    #[ORM\OneToMany(mappedBy: 'groupChat', targetEntity: WebSocketConnection::class, orphanRemoval: true)]
    private Collection $webSocketConnections;

    public function __construct()
    {
        $this->messageChats = new ArrayCollection();
        $this->createAt = new \DateTimeImmutable;
        $this->webSocketConnections = new ArrayCollection();
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
            $messageChat->setGroupChat($this);
        }

        return $this;
    }

    public function removeMessageChat(MessageChat $messageChat): static
    {
        if ($this->messageChats->removeElement($messageChat)) {
            // set the owning side to null (unless already changed)
            if ($messageChat->getGroupChat() === $this) {
                $messageChat->setGroupChat(null);
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
            $webSocketConnection->setGroupChat($this);
        }

        return $this;
    }

    public function removeWebSocketConnection(WebSocketConnection $webSocketConnection): static
    {
        if ($this->webSocketConnections->removeElement($webSocketConnection)) {
            // set the owning side to null (unless already changed)
            if ($webSocketConnection->getGroupChat() === $this) {
                $webSocketConnection->setGroupChat(null);
            }
        }

        return $this;
    }
}
