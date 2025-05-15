<?php

namespace App\Entity;

use App\Repository\EtapesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EtapesRepository::class)]
class Etapes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Descriptif = null;

    #[ORM\Column(length: 255)]
    private ?string $Consignes = null;

    #[ORM\Column]
    private ?int $Position = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescriptif(): ?string
    {
        return $this->Descriptif;
    }

    public function setDescriptif(string $Descriptif): static
    {
        $this->Descriptif = $Descriptif;

        return $this;
    }

    public function getConsignes(): ?string
    {
        return $this->Consignes;
    }

    public function setConsignes(string $Consignes): static
    {
        $this->Consignes = $Consignes;

        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->Position;
    }

    public function setPosition(int $Position): static
    {
        $this->Position = $Position;

        return $this;
    }
}
