<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

<<<<<<< HEAD
/**
 * Affectation
 *
 * @ORM\Table(name="affectation", indexes={@ORM\Index(name="fk_id_commande", columns={"fk_id_commande"}), @ORM\Index(name="fk_id_produit", columns={"fk_id_produit"})})
 * @ORM\Entity
 */
class Affectation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_affectation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAffectation;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_id_produit", type="integer", nullable=false)
     */
    private $fkIdProduit;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_id_commande", type="integer", nullable=false)
     */
    private $fkIdCommande;
=======
#[ORM\Entity(repositoryClass: AffectationRepository::class)]
class Affectation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    
    private ?int $idAffectation = null;

    /**
     * @var \Commande
     *
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_idcommande", referencedColumnName="id_commande")
     * })
     */
    private $fkIdcommande;

    /**
     * @var \Produit
     *
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_idproduit", referencedColumnName="id_produit")
     * })
     */
    private $fkIdproduit;
>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627

    public function getIdAffectation(): ?int
    {
        return $this->idAffectation;
    }

<<<<<<< HEAD
    public function getFkIdProduit(): ?int
    {
        return $this->fkIdProduit;
    }

    public function setFkIdProduit(int $fkIdProduit): self
    {
        $this->fkIdProduit = $fkIdProduit;
=======
    public function getFkIdcommande(): ?Commande
    {
        return $this->fkIdcommande;
    }

    public function setFkIdcommande(?Commande $fkIdcommande): self
    {
        $this->fkIdcommande = $fkIdcommande;
>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627

        return $this;
    }

<<<<<<< HEAD
    public function getFkIdCommande(): ?int
    {
        return $this->fkIdCommande;
    }

    public function setFkIdCommande(int $fkIdCommande): self
    {
        $this->fkIdCommande = $fkIdCommande;
=======
    public function getFkIdproduit(): ?Produit
    {
        return $this->fkIdproduit;
    }

    public function setFkIdproduit(?Produit $fkIdproduit): self
    {
        $this->fkIdproduit = $fkIdproduit;
>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627

        return $this;
    }


}
