<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
<<<<<<< HEAD
use Doctrine\DBAL\Types\Types;
use App\Entity\Livraison;

/**
 * Pointderelais
 *
 * @ORM\Table(name="pointderelais", indexes={@ORM\Index(name="fk_id_livraisonp", columns={"fk_id_livraisonp"})})
 * @ORM\Entity
 */
class Pointderelais
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_pointderelais", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPointderelais;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_pointderelais", type="string", length=255, nullable=false)
     */
    private $adressePointderelais;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=255, nullable=false)
     */
    private $region;

    /**
     * @var int
     *
     * @ORM\Column(name="horaire", type="integer", nullable=false)
     */
    private $horaire;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Livraison", inversedBy="pointderelais")
     * @ORM\JoinColumn(name="fk_id_livraisonp", referencedColumnName="id_livraison")
     */
    private $fkIdLivraisonp;
=======

use App\Repository\PointderelaisRepository;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Livraison;

#[ORM\Entity(repositoryClass: PointderelaisRepository::class)]
class Pointderelais
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idPointderelais=null;

    
    #[ORM\Column( length :255 )]
    #[Assert\NotBlank(message:"L'adresse  doit contenir au moins 10 caractères")]
    private ?string $adressePointderelais=null;

    
    #[ORM\Column( length :255 )]
    #[Assert\NotBlank(message:"La region  doit contenir au moins 5 caractères")]
    private ?string $region=null;

    #[ORM\Column]
    #[Assert\Positive(message:"L'horaire doit etre un nombre positive")]
    private ?int $horaire=null;
    
   


    #[ORM\ManyToOne(inversedBy: 'pointderelais')]
    #[ORM\JoinColumn(name: "fk_id_livraisonp", referencedColumnName: "id_livraison")]
   
    private ?Livraison $fkIdLivraisonp = null;
  
>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627

    public function getIdPointderelais(): ?int
    {
        return $this->idPointderelais;
    }

<<<<<<< HEAD
=======

>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627
    public function getAdressePointderelais(): ?string
    {
        return $this->adressePointderelais;
    }

<<<<<<< HEAD
    public function setAdressePointderelais(string $adressePointderelais): self
=======
    public function setAdressePointderelais(String $adressePointderelais): self
>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627
    {
        $this->adressePointderelais = $adressePointderelais;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(string $region): self
    {
<<<<<<< HEAD
        $this->region = $region;
=======
        $this->region= $region;
>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627

        return $this;
    }

    public function getHoraire(): ?int
    {
        return $this->horaire;
    }

    public function setHoraire(int $horaire): self
    {
<<<<<<< HEAD
        $this->horaire = $horaire;

        return $this;
    }

=======
        $this->horaire= $horaire;

        return $this;
    }
>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627
    public function getFkIdLivraisonp(): ?Livraison
    {
        return $this->fkIdLivraisonp;
    }

    public function setFkIdLivraisonp(?Livraison $fkIdLivraisonp): self
    {
        $this->fkIdLivraisonp= $fkIdLivraisonp;

        return $this;
    }
<<<<<<< HEAD
=======

>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627
}