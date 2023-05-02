<?php

namespace App\Entity;

<<<<<<< HEAD
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\User;
use App\Entity\Pointderelais;
/**
 * Livraison
 *
 * @ORM\Table(name="livraison", indexes={@ORM\Index(name="fk_id_livreur", columns={"fk_id_livreur"})})
 * @ORM\Entity
 */
class Livraison
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_livraison", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLivraison;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_livraison", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixLivraison;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_livraison", type="string", length=255, nullable=false)
     */
    private $adresseLivraison;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_livraison", type="date", nullable=false)
     */

    private $dateLivraison;
     /**
     * @var string
     *
     * @ORM\Column(name="etat_livraison", type="string", length=255, nullable=false)
     */
    private $etatLivraison;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(name="fk_id_livreur", referencedColumnName="id")
     */
    private $fkIdLivreur;

    #[ORM\ManyToOne(inversedBy: 'livraisons')]
    #[ORM\JoinColumn(name:"fk_id_pointderelais", referencedColumnName: "id_pointderelais")]
    private ?Pointderelais $fkIdPointderelais = null;
=======
use Doctrine\ORM\Mapping as ORM;
use App\Repository\LivraisonRepository;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\User;
use App\Entity\Pointderelais;
use Doctrine\DBAL\Types\Types;



#[ORM\Entity(repositoryClass: LivraisonRepository::class)]
class Livraison
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idLivraison = null;



    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message:"date est requis")]
    private ?\DateTimeInterface $dateLivraison = null;


    
     #[ORM\Column]
     #[Assert\Positive(message:"Le prix doit etre un nombre positive")]
    private ?float $prixLivraison = null;

    
      #[ORM\Column( length :255 )]
      #[Assert\NotBlank(message:"Le champ texte doit contenir au moins 10 caractères")]
      private ?string $adresseLivraison = null;

      #[ORM\Column( length :255 )]
      #[Assert\NotBlank(message:"Le champ texte doit contenir au moins 5 caractères")]
      private ?string $etatLivraison= null;

      #[ORM\ManyToOne(inversedBy: 'livraisons')]
      #[ORM\JoinColumn(name: "fk_id_livreur", referencedColumnName: "id")]

      private ?User $fkIdLivreur = null;
    

      #[ORM\ManyToOne(inversedBy: 'livraisons')]
      #[ORM\JoinColumn(name:"fk_id_pointderelais", referencedColumnName: "id_pointderelais")]
      private ?Pointderelais $fkIdPointderelais = null;

>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627

    public function getIdLivraison(): ?int
    {
        return $this->idLivraison;
    }

<<<<<<< HEAD
=======
    public function getDateLivraison(): ?\DateTimeInterface
    {
        return $this->dateLivraison;
    }

    public function setDateLivraison(\DateTimeInterface $dateLivraison): self
    {
        $this->dateLivraison = $dateLivraison;

        return $this;
    }

>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627
    public function getPrixLivraison(): ?float
    {
        return $this->prixLivraison;
    }

    public function setPrixLivraison(float $prixLivraison): self
    {
        $this->prixLivraison = $prixLivraison;

        return $this;
    }

    public function getAdresseLivraison(): ?string
    {
        return $this->adresseLivraison;
    }

    public function setAdresseLivraison(string $adresseLivraison): self
    {
        $this->adresseLivraison = $adresseLivraison;

        return $this;
    }

<<<<<<< HEAD
    public function getDateLivraison(): ?\DateTimeInterface
    {
        return $this->dateLivraison;
    }

    public function setDateLivraison(\DateTimeInterface $dateLivraison): self
    {
        $this->dateLivraison = $dateLivraison;

        return $this;
    }
=======
>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627
    public function getEtatLivraison(): ?string
    {
        return $this->etatLivraison;
    }

    public function setEtatLivraison(string $etatLivraison): self
    {
        $this->etatLivraison = $etatLivraison;

        return $this;
    }

    public function getFkIdLivreur(): ?User
    {
        return $this->fkIdLivreur;
    }

<<<<<<< HEAD
    public function setFkIdLivreur(User $fkIdLivreur): self
=======
    public function setFkIdLivreur(?User $fkIdLivreur): self
>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627
    {
        $this->fkIdLivreur = $fkIdLivreur;

        return $this;
    }
<<<<<<< HEAD
=======

>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627
    public function getFkIdPointderelais(): ?Pointderelais
    {
        return $this->fkIdPointderelais;
    }

    public function setFkIdPointderelais(?Pointderelais $fkIdPointderelais): self
    {
        $this->fkIdPointderelais = $fkIdPointderelais;

        return $this;
    }

<<<<<<< HEAD
}
=======
}
>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627
