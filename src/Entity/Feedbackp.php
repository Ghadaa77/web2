<?php

namespace App\Entity;

use App\Repository\FeedbackpRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FeedbackpRepository::class)]
class Feedbackp
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $favoris = null;

    #[ORM\ManyToOne(inversedBy: 'feedbackps')]
    private ?User $fkIdUser = null;

    #[ORM\ManyToOne(inversedBy: 'feedbackps')]
    private ?Produit $fkIdProduit = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isFavoris(): ?bool
    {
        return $this->favoris;
    }

    public function setFavoris(bool $favoris): self
    {
        $this->favoris = $favoris;

        return $this;
    }

    public function getFkIdUser(): ?User
    {
        return $this->fkIdUser;
    }

    public function setFkIdUser(?User $fkIdUser): self
    {
        $this->fkIdUser = $fkIdUser;

        return $this;
    }

    public function getFkIdProduit(): ?Produit
    {
        return $this->fkIdProduit;
    }

    public function setFkIdProduit(?Produit $fkIdProduit): self
    {
        $this->fkIdProduit = $fkIdProduit;

        return $this;
    }
}
