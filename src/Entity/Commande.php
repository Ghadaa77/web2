<?php

namespace App\Entity;
<<<<<<< HEAD
use App\Entity\Livraison;
use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande", indexes={@ORM\Index(name="fk_id_livraison", columns={"fk_id_livraison"})})
 * @ORM\Entity
 */
class Commande
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_commande", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCommande;
=======

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandeRepository::class)]
class Commande
{
    #[ORM\Id]
     #[ORM\GeneratedValue]
     #[ORM\Column]
     
    private ?int $idCommande = null ;
>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627

    /**
     * @var int
     *
     * @ORM\Column(name="nbr_produit", type="integer", nullable=false)
     */
    private $nbrProduit;

    /**
<<<<<<< HEAD
     * @var float
     *
     * @ORM\Column(name="total", type="float", precision=10, scale=0, nullable=false)
     */
    private $total;

    #[ORM\ManyToOne(targetEntity: Livraison::class, inversedBy: 'Commande')]
    #[ORM\JoinColumn(name: 'fk_id_livraison', referencedColumnName: 'idLivraison')]
    private ?Livraison $fkIdLivraison=null ;
   
=======
     * @var \DateTime
     *
     * @ORM\Column(name="date_commande", type="date", nullable=false)
     */
    private $dateCommande;

    
     #[ORM\Column] 
     
    private ?float $total = null ;

    /**
     * @var \Pointderelais
     *
     * @ORM\ManyToOne(targetEntity="Pointderelais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_id_pointderelais", referencedColumnName="id_pointderelais")
     * })
     */
    private $fkIdPointderelais;

    /**
     * @var \Livraison
     *
     * @ORM\ManyToOne(targetEntity="Livraison")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_id_livraison", referencedColumnName="id_livraison")
     * })
     */
    private $fkIdLivraison;
>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627

    public function getIdCommande(): ?int
    {
        return $this->idCommande;
    }

    public function getNbrProduit(): ?int
    {
        return $this->nbrProduit;
    }

    public function setNbrProduit(int $nbrProduit): self
    {
        $this->nbrProduit = $nbrProduit;

        return $this;
    }

<<<<<<< HEAD
=======
    public function getDateCommande(): ?\DateTimeInterface
    {
        return $this->dateCommande;
    }

    public function setDateCommande(\DateTimeInterface $dateCommande): self
    {
        $this->dateCommande = $dateCommande;

        return $this;
    }

>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627
    public function getTotal(): ?float
    {
        return $this->total;
    }

    public function setTotal(float $total): self
    {
        $this->total = $total;

        return $this;
    }

<<<<<<< HEAD
=======
    public function getFkIdPointderelais(): ?Pointderelais
    {
        return $this->fkIdPointderelais;
    }

    public function setFkIdPointderelais(?Pointderelais $fkIdPointderelais): self
    {
        $this->fkIdPointderelais = $fkIdPointderelais;

        return $this;
    }

>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627
    public function getFkIdLivraison(): ?Livraison
    {
        return $this->fkIdLivraison;
    }

<<<<<<< HEAD
    public function setFkIdLivraison(Livraison $fkIdLivraison): self
=======
    public function setFkIdLivraison(?Livraison $fkIdLivraison): self
>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627
    {
        $this->fkIdLivraison = $fkIdLivraison;

        return $this;
    }


}
