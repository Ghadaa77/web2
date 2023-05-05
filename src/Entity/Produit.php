<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $prixProduit = null;

    #[ORM\Column(length: 255)]
    private ?string $typePaiement = null;

    #[ORM\Column(length: 255)]
    private ?string $descriptionProduit = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\OneToMany(mappedBy: 'fkIdProduit', targetEntity: Feedbackp::class)]
    private Collection $feedbackps;

    public function __construct()
    {
        $this->feedbackps = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrixProduit(): ?float
    {
        return $this->prixProduit;
    }

    public function setPrixProduit(float $prixProduit): self
    {
        $this->prixProduit = $prixProduit;

        return $this;
    }

    public function getTypePaiement(): ?string
    {
        return $this->typePaiement;
    }

    public function setTypePaiement(string $typePaiement): self
    {
        $this->typePaiement = $typePaiement;

        return $this;
    }

    public function getDescriptionProduit(): ?string
    {
        return $this->descriptionProduit;
    }

    public function setDescriptionProduit(string $descriptionProduit): self
    {
        $this->descriptionProduit = $descriptionProduit;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return Collection<int, Feedbackp>
     */
    public function getFeedbackps(): Collection
    {
        return $this->feedbackps;
    }

    public function addFeedbackp(Feedbackp $feedbackp): self
    {
        if (!$this->feedbackps->contains($feedbackp)) {
            $this->feedbackps->add($feedbackp);
            $feedbackp->setFkIdProduit($this);
        }

        return $this;
    }

    public function removeFeedbackp(Feedbackp $feedbackp): self
    {
        if ($this->feedbackps->removeElement($feedbackp)) {
            // set the owning side to null (unless already changed)
            if ($feedbackp->getFkIdProduit() === $this) {
                $feedbackp->setFkIdProduit(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return(string) $this->getDescriptionProduit();

    }
}
