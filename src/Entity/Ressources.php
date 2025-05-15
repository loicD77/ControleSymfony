<?php

namespace App\Entity;

use App\Repository\RessourcesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RessourcesRepository::class)]
class Ressources
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Intitulé = null;

    #[ORM\Column(length: 255)]
    private ?string $Présentation = null;

    #[ORM\Column]
    private array $Support = [];

    #[ORM\Column(length: 255)]
    private ?array $Nature = null;

    #[ORM\Column(length: 255)]
    private ?string $urldoc = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIntitulé(): ?string
    {
        return $this->Intitulé;
    }

    public function setIntitulé(string $Intitulé): static
    {
        $this->Intitulé = $Intitulé;

        return $this;
    }

    public function getPrésentation(): ?string
    {
        return $this->Présentation;
    }

    public function setPrésentation(string $Présentation): static
    {
        $this->Présentation = $Présentation;

        return $this;
    }

    public function getSupport(): array
    {
        return $this->Support;
    }

    public function setSupport(array $Support): static
    {
        $this->Support = $Support;

        return $this;
    }

    public function getNature(): ?array
    {
        return $this->Nature;
    }

    public function setNature(array $Nature): static
    {
        $this->Nature = $Nature;

        return $this;
    }

    public function getUrldoc(): ?string
    {
        return $this->urldoc;
    }

    public function setUrldoc(string $urldoc): static
    {
        $this->urldoc = $urldoc;

        return $this;
    }
}
