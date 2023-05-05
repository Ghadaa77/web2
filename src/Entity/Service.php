<?php

namespace App\Entity;

use App\Repository\ServiceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ServiceRepository::class)]
class Service
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[NotBlank(message: 'Description doit être non vide')]
    private ?string $descriptionService =null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateService = null;

    #[ORM\Column]
    private ?float $prixService = null;

    #[ORM\Column(length: 255)]
    private ?string $typePaiementService = null;

    #[ORM\ManyToOne(inversedBy: 'services')]
    private ?Categorie $fkIdCategorie = null;

    #[ORM\OneToMany(mappedBy: 'fkIdService', targetEntity: Feedback::class)]
    private Collection $feedback;

    public function __construct()
    {
        $this->feedback = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }



    public function getDescriptionService(): ?string
    {
        return $this->descriptionService;
    }

    public function setDescriptionService(string $descriptionService): self
    {
        $this->descriptionService = $descriptionService;

        return $this;
    }

    public function getDateService(): ?\DateTimeInterface
    {
        return $this->dateService;
    }

    public function setDateService(\DateTimeInterface $dateService): self
    {
        $this->dateService = $dateService;

        return $this;
    }

    public function getPrixService(): ?float
    {
        return $this->prixService;
    }

    public function setPrixService(float $prixService): self
    {
        $this->prixService = $prixService;

        return $this;
    }

    public function getTypePaiementService(): ?string
    {
        return $this->typePaiementService;
    }

    public function setTypePaiementService(string $typePaiementService): self
    {
        $this->typePaiementService = $typePaiementService;

        return $this;
    }

    public function getFkIdCategorie(): ?categorie
    {
        return $this->fkIdCategorie;
    }

    public function setFkIdCategorie(?categorie $fkIdCategorie): self
    {
        $this->fkIdCategorie = $fkIdCategorie;

        return $this;
    }

    /**
     * @return Collection<int, Feedback>
     */
    public function getFeedback(): Collection
    {
        return $this->feedback;
    }

    public function addFeedback(Feedback $feedback): self
    {
        if (!$this->feedback->contains($feedback)) {
            $this->feedback->add($feedback);
            $feedback->setFkIdService($this);
        }

        return $this;
    }

    public function removeFeedback(Feedback $feedback): self
    {
        if ($this->feedback->removeElement($feedback)) {
            // set the owning side to null (unless already changed)
            if ($feedback->getFkIdService() === $this) {
                $feedback->setFkIdService(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return(string) $this->getDescriptionService();

    }

}
