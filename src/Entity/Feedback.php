<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

<<<<<<< HEAD
/**
 * Feedback
 *
 * @ORM\Table(name="feedback", indexes={@ORM\Index(name="fk_id_produit", columns={"fk_id_produit"}), @ORM\Index(name="fk_id_userP", columns={"fk_id_userP"})})
 * @ORM\Entity
 */
class Feedback
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_feedbackP", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFeedbackp;
=======
#[ORM\Entity(repositoryClass: FeedbackRepository::class)]
class Feedback
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    
    private ?int $idFeedbackp = null;
>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627

    /**
     * @var bool
     *
     * @ORM\Column(name="favorisP", type="boolean", nullable=false)
     */
    private $favorisp;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_id_userP", type="integer", nullable=false)
     */
    private $fkIdUserp;

    /**
<<<<<<< HEAD
     * @var int
     *
     * @ORM\Column(name="fk_id_produit", type="integer", nullable=false)
=======
     * @var \Produit
     *
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_id_produit", referencedColumnName="id_produit")
     * })
>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627
     */
    private $fkIdProduit;

    public function getIdFeedbackp(): ?int
    {
        return $this->idFeedbackp;
    }

    public function isFavorisp(): ?bool
    {
        return $this->favorisp;
    }

    public function setFavorisp(bool $favorisp): self
    {
        $this->favorisp = $favorisp;

        return $this;
    }

    public function getFkIdUserp(): ?int
    {
        return $this->fkIdUserp;
    }

    public function setFkIdUserp(int $fkIdUserp): self
    {
        $this->fkIdUserp = $fkIdUserp;

        return $this;
    }

<<<<<<< HEAD
    public function getFkIdProduit(): ?int
=======
    public function getFkIdProduit(): ?Produit
>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627
    {
        return $this->fkIdProduit;
    }

<<<<<<< HEAD
    public function setFkIdProduit(int $fkIdProduit): self
=======
    public function setFkIdProduit(?Produit $fkIdProduit): self
>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627
    {
        $this->fkIdProduit = $fkIdProduit;

        return $this;
    }


}
