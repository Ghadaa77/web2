<?php

namespace App\Entity;
<<<<<<< HEAD
use App\Repository\ProduitRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity
 */
class Produit
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_produit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProduit;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_produit", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="type_paiement", type="string", length=255, nullable=false)
     */
    private $typePaiement;

    /**
     * @var string
     *
     * @ORM\Column(name="type_produit", type="string", length=255, nullable=false)
     */
    private $typeProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="description_produit", type="string", length=255, nullable=false)
     */


    private $descriptionProduit;

    #[ORM\Column( length:255)]
   
    private ?string $image = null;

=======

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    
    private ?int $idProduit = null;


      #[ORM\Column]
     
    private ?float $prixProduit = null;

    
     #[ORM\Column( length:255)]
     
    private ?string $typePaiement =null;

   
      #[ORM\Column(length:255)]
     
    private ?string $typeProduit = null;

    
      #[ORM\Column( length:255)]
   
    private ?string $descriptionProduit = null;
>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627

    public function getIdProduit(): ?int
    {
        return $this->idProduit;
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

    public function getTypeProduit(): ?string
    {
        return $this->typeProduit;
    }

    public function setTypeProduit(string $typeProduit): self
    {
        $this->typeProduit = $typeProduit;

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


<<<<<<< HEAD
    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

=======
>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627
}
