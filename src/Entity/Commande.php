<?php

namespace App\Entity;
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

    /**
     * @var int
     *
     * @ORM\Column(name="nbr_produit", type="integer", nullable=false)
     */
    private $nbrProduit;

    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float", precision=10, scale=0, nullable=false)
     */
    private $total;

    #[ORM\ManyToOne(targetEntity: Livraison::class, inversedBy: 'Commande')]
    #[ORM\JoinColumn(name: 'fk_id_livraison', referencedColumnName: 'idLivraison')]
    private ?Livraison $fkIdLivraison=null ;
   

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

    public function getTotal(): ?float
    {
        return $this->total;
    }

    public function setTotal(float $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getFkIdLivraison(): ?Livraison
    {
        return $this->fkIdLivraison;
    }

    public function setFkIdLivraison(Livraison $fkIdLivraison): self
    {
        $this->fkIdLivraison = $fkIdLivraison;

        return $this;
    }


}
