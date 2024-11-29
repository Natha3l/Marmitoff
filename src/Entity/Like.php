<?php

namespace App\Entity;

use App\Repository\LikeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LikeRepository::class)]
#[ORM\Table(name: '`like`')]
class Like
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'likes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?UserGuard $user = null;

    #[ORM\ManyToOne(inversedBy: 'likes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Recette $recette = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?UserGuard
    {
        return $this->user;
    }

    public function setUser(?UserGuard $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getIdRecette(): ?Recette
    {
        return $this->recette;
    }

    public function setIdRecette(?Recette $recette): static
    {
        $this->recette = $recette;

        return $this;
    }
}
