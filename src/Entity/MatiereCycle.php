<?php

namespace App\Entity;

use App\Repository\MatiereCycleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MatiereCycleRepository::class)]
class MatiereCycle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'matiereCycles')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Categorie $matiere = null;

    #[ORM\Column]
    private ?int $cycle = null;

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
}
