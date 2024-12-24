<?php

namespace App\Entity;

use App\Repository\IngredientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: IngredientRepository::class)]
class Ingredient
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?string $nom = null;

    /**
     * @var Collection<int, RecetteIngredient>
     */
    #[ORM\OneToMany(targetEntity: RecetteIngredient::class, mappedBy: 'ingredient')]
    private Collection $recetteIngredients;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    public function __construct()
    {
        $this->recetteIngredients = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection<int, RecetteIngredient>
     */
    public function getRecetteIngredients(): Collection
    {
        return $this->recetteIngredients;
    }

    public function addRecetteIngredient(RecetteIngredient $recetteIngredient): static
    {
        if (!$this->recetteIngredients->contains($recetteIngredient)) {
            $this->recetteIngredients->add($recetteIngredient);
            $recetteIngredient->setIngredient($this);
        }

        return $this;
    }

    public function removeRecetteIngredient(RecetteIngredient $recetteIngredient): static
    {
        if ($this->recetteIngredients->removeElement($recetteIngredient)) {
            // set the owning side to null (unless already changed)
            if ($recetteIngredient->getIngredient() === $this) {
                $recetteIngredient->setIngredient(null);
            }
        }

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }
}
