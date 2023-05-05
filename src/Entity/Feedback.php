<?php

namespace App\Entity;

use App\Repository\FeedbackRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FeedbackRepository::class)]
class Feedback
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?bool $favoris = null;

    #[ORM\ManyToOne(inversedBy: 'feedback')]
    private ?User $fkIdUser = null;

    #[ORM\ManyToOne(inversedBy: 'feedback')]
    private ?Service $fkIdService = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isFavoris(): ?bool
    {
        return $this->favoris;
    }

    public function setFavoris(?bool $favoris): self
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

    public function getFkIdService(): ?service
    {
        return $this->fkIdService;
    }

    public function setFkIdService(?service $fkIdService): self
    {
        $this->fkIdService = $fkIdService;

        return $this;
    }
}
