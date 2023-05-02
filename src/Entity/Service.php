<?php

namespace App\Entity;

<<<<<<< HEAD
use Doctrine\ORM\Mapping as ORM;

/**
 * Service
 *
 * @ORM\Table(name="service")
 * @ORM\Entity
 */
class Service
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="description_service", type="string", length=255, nullable=false)
     */
    private $descriptionService;

    /**
     * @var string
     *
     * @ORM\Column(name="type_paiement_service", type="string", length=255, nullable=false)
     */
    private $typePaiementService;

    public function getId(): ?int
    {
        return $this->id;
=======
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ServiceRepository::class)]
class Service
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    
        private ?int $id = null;
    
    
    private $idService;

   
      #[ORM\Column( length:255)]
     
    private ?string $descriptionService = null;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_service", type="date", nullable=false)
     */
    private $dateService;

    /**
     * @var int
     *
     * @ORM\Column(name="prix_service", type="integer", nullable=false)
     */
    private $prixService;

   
      #[ORM\Column( length:255)]
     
    private ?string $typePaiementService = null;

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_id_categorie", referencedColumnName="id_categorie")
     * })
     */
    private $fkIdCategorie;

    public function getIdService(): ?int
    {
        return $this->idService;
>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627
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

<<<<<<< HEAD
=======
    public function getDateService(): ?\DateTimeInterface
    {
        return $this->dateService;
    }

    public function setDateService(\DateTimeInterface $dateService): self
    {
        $this->dateService = $dateService;

        return $this;
    }

    public function getPrixService(): ?int
    {
        return $this->prixService;
    }

    public function setPrixService(int $prixService): self
    {
        $this->prixService = $prixService;

        return $this;
    }

>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627
    public function getTypePaiementService(): ?string
    {
        return $this->typePaiementService;
    }

    public function setTypePaiementService(string $typePaiementService): self
    {
        $this->typePaiementService = $typePaiementService;

        return $this;
    }

<<<<<<< HEAD
=======
    public function getFkIdCategorie(): ?Categorie
    {
        return $this->fkIdCategorie;
    }

    public function setFkIdCategorie(?Categorie $fkIdCategorie): self
    {
        $this->fkIdCategorie = $fkIdCategorie;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627

}
