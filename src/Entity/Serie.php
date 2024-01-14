<?php

namespace App\Entity;

use App\Repository\SerieRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SerieRepository::class)]
class Serie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $año = null;

    #[ORM\Column(length: 90)]
    private ?string $creador = null;

    #[ORM\Column(length: 255)]
    private ?string $titulo = null;

    #[ORM\Column(length: 255)]
    private ?string $descripción = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAño(): ?int
    {
        return $this->año;
    }

    public function setAño(int $año): static
    {
        $this->año = $año;

        return $this;
    }

    public function getCreador(): ?string
    {
        return $this->creador;
    }

    public function setCreador(string $creador): static
    {
        $this->creador = $creador;

        return $this;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): static
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getDescripción(): ?string
    {
        return $this->descripción;
    }

    public function setDescripción(string $descripción): static
    {
        $this->descripción = $descripción;

        return $this;
    }
}
