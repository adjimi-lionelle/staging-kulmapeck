<?php

namespace App\Entity;

use App\Repository\InvestisseurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InvestisseurRepository::class)]
class Investisseur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ville = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $phone = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $createAt = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $firstName = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lastName = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $address = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $companyName = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $companyAddress = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $desiredInvestmentType = null;

    #[ORM\OneToMany(targetEntity: PartAction::class, mappedBy: 'investisseur')]
    private Collection $actions;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $investmentAmount = null;

    #[ORM\Column(length: 255)]
    private ?string $cniNumber = null;

    #[ORM\Column(length: 255, type: "datetime")]
    private ?\DateTimeInterface $dateExpiration = null;

    public function __construct()
    {
        $this->actions = new ArrayCollection();
    }


    public function getInvestmentAmount(): ?string
    {
        return $this->investmentAmount;
    }

    public function setInvestmentAmount(?string $investmentAmount): static
    {
        $this->investmentAmount = $investmentAmount;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): static
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): static
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): static
    {
        $this->address = $address;

        return $this;
    }

    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    public function setCompanyName(?string $companyName): static
    {
        $this->companyName = $companyName;

        return $this;
    }

    public function getCompanyAddress(): ?string
    {
        return $this->companyAddress;
    }

    public function setCompanyAddress(?string $companyAddress): static
    {
        $this->companyAddress = $companyAddress;

        return $this;
    }

    public function getDesiredInvestmentType(): ?string
    {
        return $this->desiredInvestmentType;
    }

    public function setDesiredInvestmentType(?string $desiredInvestmentType): static
    {
        $this->desiredInvestmentType = $desiredInvestmentType;

        return $this;
    }

    /**
     * @return Collection<int, PartAction>
     */
    public function getActions(): Collection
    {
        return $this->actions;
    }

    public function addAction(PartAction $action): static
    {
        if (!$this->actions->contains($action)) {
            $this->actions[] = $action;
            $action->setInvestisseur($this);
        }

        return $this;
    }

    public function removeAction(PartAction $action): static
    {
        $this->actions->removeElement($action);
        if ($action->getInvestisseur() === $this) {
            $action->setInvestisseur(null);
        }

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): static
    {
        $this->ville = $ville;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): static
    {
        $this->phone = $phone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getCreateAt(): ?\DateTimeImmutable
    {
        return $this->createAt;
    }

    public function setCreateAt(?\DateTimeImmutable $createAt): static
    {
        $this->createAt = $createAt;

        return $this;
    }

    public function getCniNumber(): ?string
    {
        return $this->cniNumber;
    }

    public function setCniNumber(string $cniNumber): static
    {
        $this->cniNumber = $cniNumber;

        return $this;
    }

    public function getDateExpiration(): ?\DateTimeInterface
    {
        return $this->dateExpiration;
    }

    public function setDateExpiration(?\DateTimeInterface $dateExpiration): self
    {
        $this->dateExpiration = $dateExpiration;

        return $this;
    }
}
