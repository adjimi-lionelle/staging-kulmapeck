<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiProperty;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Post;
use ApiPlatform\OpenApi\Model\Operation;
use ApiPlatform\OpenApi\Model\RequestBody;
use App\Controller\Api\Controller\User\ChangeAvatarController;
use App\Controller\Api\Controller\User\NetworkController;
use App\Repository\PersonneRepository;
use App\Service\FileUploader;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Serializer\Annotation\Ignore;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[Vich\Uploadable]
#[ORM\Entity(repositoryClass: PersonneRepository::class)]
#[ApiResource(
    types: ['https://schema.org/MediaObject'],
    operations: [
        new Post(
            uriTemplate: '/post/{id}/avatar',
            controller: ChangeAvatarController::class,
            openapiContext: [
                'security' => [['bearerAuth' => []]],
                'responses' => [
                    '200' => [
                        'description' => 'Avatar updated successfully',
                        'content' => [
                            'application/json' => [
                                'schema' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'success' => ['type' => 'boolean'],
                                        'data' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'id' => ['type' => 'integer'],
                                                'avatar' => ['type' => 'string'],
                                                'avatarUrl' => ['type' => 'string'],
                                                'message' => ['type' => 'string']
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            openapi: new Operation(
                requestBody: new RequestBody(
                    content: new \ArrayObject([
                        'multipart/form-data' => [
                            'schema' => [
                                'type' => 'object',
                                'properties' => [
                                    'file' => [
                                        'type' => 'string',
                                        'format' => 'binary'
                                    ]
                                ]
                            ]
                        ]
                    ])
                )
            ),
            deserialize: false,
            validate: false,
            write: false
        ),
        new GetCollection(
            uriTemplate: '/personne/{id}/network',
            controller: NetworkController::class,
            openapiContext: [
                'security' => [['bearerAuth' => []]]
            ],
            read: false,
        ),
    ],
    normalizationContext: [
        'groups' => ['read:personne:item']
    ],
)]
class Personne
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['read:course:collection', 'read:forum:item', 'read:forum:messsage:collection', 'read:sujet:item', 'read:sujet:collection', 'read:review:collection', 'read:exam:collection', 'read:payment:collection','read:personne:item', 'read:quizresult:collection'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Ne peut être vide !")]
    #[Assert\NotNull(message: "Ne peut être nul !")]
    #[Assert\Length(min: 2, minMessage: "Le nom doit faire au moins 2 caractères !")]
    #[Groups(['read:course:collection', 'read:forum:item', 'read:forum:messsage:collection', 'read:sujet:item', 'read:sujet:collection', 'read:review:collection', 'read:exam:collection', 'post:user:item','read:payment:collection','read:personne:item', 'read:quizresult:collection'])]
    private ?string $lastName = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['read:course:collection', 'read:forum:item', 'read:forum:messsage:collection', 'read:sujet:item', 'read:sujet:collection', 'read:review:collection','read:exam:collection', 'post:user:item','read:payment:collection','read:personne:item', 'read:quizresult:collection'])]
    private ?string $firstName = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Ne peut être vide !")]
    #[Assert\NotNull(message: "Ne peut être nul !")]
    #[Assert\Length(min: 5, max: 8, minMessage: "Il faut 5 caractères minimum !", maxMessage: "Il faut 8 caractères maximun")]
    #[Groups(['read:course:collection', 'read:forum:messsage:collection', 'read:sujet:item', 'read:sujet:collection', 'read:review:collection','read:exam:collection','post:user:item', 'read:personne:item'])]
    private ?string $pseudo = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    #[Groups(['post:user:item', 'read:personne:item'])]
    private ?\DateTimeInterface $bornAt = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['post:user:item', 'read:personne:item'])]
    private ?string $lieuNaissance = null;

    #[ORM\Column(length: 100, nullable: true)]
    #[Groups(['read:course:item', 'read:forum:messsage:collection', 'read:sujet:item', 'read:sujet:collection', 'read:review:collection', 'read:exam:collection','post:user:item', 'read:personne:item'])]
    private ?string $sexe = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['read:course:collection', 'read:forum:item', 'read:forum:messsage:collection', 'read:sujet:item', 'read:sujet:collection', 'read:review:collection', 'read:exam:collection', 'read:payment:collection', 'read:personne:item'])]
    private ?string $avatar = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['post:user:item', 'read:personne:item'])]
    private ?string $adresse = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['read:course:collection', 'read:forum:item', 'read:forum:messsage:collection', 'read:sujet:item', 'read:sujet:collection', 'read:review:collection', 'read:exam:collection', 'post:user:item', 'read:payment:collection', 'read:personne:item'])]
    private ?string $telephone = null;

    #[ORM\OneToOne(mappedBy: "personne", cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $utilisateur = null;

    #[ORM\Column(length: 255, unique: true)]
    #[Groups(['read:personne:item'])]
    private ?string $invitationCode = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Groups(['read:personne:item'])]
    private ?string $invitationLink = null;

    #[ORM\ManyToOne(targetEntity: self::class, inversedBy: 'invites')]
    private ?self $parent = null;

    #[ORM\OneToMany(mappedBy: 'parent', targetEntity: self::class)]
    private Collection $invites;

    #[ORM\ManyToOne(inversedBy: 'personnes')]
    #[Groups(['read:course:item', 'post:user:item'])]
    private ?Pays $pays = null;

    #[Ignore]
    private ?File $imageFile = null;

    #[ApiProperty(types: ['https://schema.org/contentUrl'])]
    #[Groups(['read:course:item', 'read:course:collection', 'read:review:collection', 'read:personne:item'])]
    private ?string $contentUrl = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $joinAt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updateAt = null;

    public function __construct()
    {
        $this->invites = new ArrayCollection();
        $this->joinAt = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getBornAt(): ?\DateTimeInterface
    {
        return $this->bornAt;
    }

    public function setBornAt(?\DateTimeInterface $bornAt): self
    {
        $this->bornAt = $bornAt;

        return $this;
    }

    public function getLieuNaissance(): ?string
    {
        return $this->lieuNaissance;
    }

    public function setLieuNaissance(?string $lieuNaissance): self
    {
        $this->lieuNaissance = $lieuNaissance;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(?string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(?string $avatar): self
    {
        $this->avatar = $avatar;
        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getUtilisateur(): ?User
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(User $utilisateur): self
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    public function getInvitationCode(): ?string
    {
        return $this->invitationCode;
    }

    public function setInvitationCode(string $invitationCode): self
    {
        $this->invitationCode = $invitationCode;

        return $this;
    }

    public function getInvitationLink()
    {
        return json_decode($this->invitationLink);
    }

    public function setInvitationLink(string $invitationLink): self
    {
        $this->invitationLink = $invitationLink;

        return $this;
    }

    public function getParent(): ?self
    {
        return $this->parent;
    }

    public function setParent(?self $parent): self
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * @return Collection<int, self>
     */
    public function getInvites(): Collection
    {
        return $this->invites;
    }

    public function addInvite(self $invite): self
    {
        if (!$this->invites->contains($invite)) {
            $this->invites->add($invite);
            $invite->setParent($this);
        }

        return $this;
    }

    public function removeInvite(self $invite): self
    {
        if ($this->invites->removeElement($invite)) {
            // set the owning side to null (unless already changed)
            if ($invite->getParent() === $this) {
                $invite->setParent(null);
            }
        }

        return $this;
    }

    public function getPays(): ?Pays
    {
        return $this->pays;
    }

    public function setPays(?Pays $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        return $this;
    }

    public function getImageFile()
    {
        return $this->imageFile;
    }

    public function getNomComplet(): ? string
    {
        if ($this->getLastName() === null) {
            return $this->getFirstName();
        }
        return $this->getFirstName() .' '. $this->getLastName();
    }

    public function getAvatarPath(): string
    {
        if (!$this->getUtilisateur()) {
            return "assets/images/avatar/avatar.png";
        }

        $avatarPath = 'uploads/images/admin/' . $this->getAvatar();
        if ($this->getUtilisateur()->getEleve() !== null) {
            $avatarPath = 'uploads/images/eleves/' . $this->getAvatar();
        } elseif ($this->getUtilisateur()->getEnseignant() !== null) {
            $avatarPath = 'uploads/images/enseignants/kyc/' . $this->getAvatar();
        }

        if (!$this->getAvatar()) {
            $avatarPath = "assets/images/avatar/avatar.png";
        }

        return $avatarPath;
    }

    public function getJoinAt(): ?\DateTimeImmutable
    {
        return $this->joinAt;
    }

    public function setJoinAt(?\DateTimeImmutable $joinAt): self
    {
        $this->joinAt = $joinAt;

        return $this;
    }

    public function getUpdateAt(): ?\DateTimeImmutable
    {
        return $this->updateAt;
    }

    public function setUpdateAt(?\DateTimeImmutable $updateAt): self
    {
        $this->updateAt = $updateAt;

        return $this;
    }

    /**
     * Get the value of contentUrl
     */ 
    public function getContentUrl()
    {
        return $this->contentUrl;
    }

    /**
     * Set the value of contentUrl
     *
     * @return  self
     */ 
    public function setContentUrl(?string $contentUrl)
    {
        $this->contentUrl = $contentUrl;
        return $this;
    }
}
