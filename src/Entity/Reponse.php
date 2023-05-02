<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
<<<<<<< HEAD
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Reponse
 *
 * @ORM\Table(name="reponse", indexes={@ORM\Index(name="IDX_5FB6DEC75D06C2B1", columns={"fk_id_admin"}), @ORM\Index(name="IDX_5FB6DEC7A37C401A", columns={"fk_id_reclamation"})})
 * @ORM\Entity
 */
class Reponse
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_reponse", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReponse;

    /**
     * @var string
     *
     * @ORM\Column(name="message_rep", type="string", length=255, nullable=false)
     */
    #[Assert\Regex(
        pattern: "/^[a-zA-Z\s]*$/",
        message: "Le message de la réponse ne doit contenir que des lettres de l'alphabet anglais"
    )]
    private $messageRep;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255, nullable=false)
     */
    #[Assert\Choice(
        choices: ["en cours", "validé", "annulé"],
        message: "L'état doit être l'un des suivants : en cours, valide, annule"
    )]
    private $etat;

    #[ORM\ManyToOne(inversedBy: 'reponses')]
    private ?User $fkIdAdmin = null;

    #[ORM\ManyToOne(inversedBy: 'reponses')]
    #[ORM\JoinColumn(name: "fk_id_reclamation", referencedColumnName: "id_rec")]
    private ?Reclamation $fkIdReclamation = null;
=======

#[ORM\Entity(repositoryClass: ReponseRepository::class)]
class Reponse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    
    private ?int $idReponse = null;

   #[ORM\Column( length:255)]
    
    private ?string $messageRep = null;


      #[ORM\Column(length:255)]
     
    private ?string $etat = null;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_id_admin", referencedColumnName="id")
     * })
     */
    private $fkIdAdmin;

    /**
     * @var \Reclamation
     *
     * @ORM\ManyToOne(targetEntity="Reclamation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_id_reclamation", referencedColumnName="id_rec")
     * })
     */
    private $fkIdReclamation;
>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627

    public function getIdReponse(): ?int
    {
        return $this->idReponse;
    }

    public function getMessageRep(): ?string
    {
        return $this->messageRep;
    }

    public function setMessageRep(string $messageRep): self
    {
        $this->messageRep = $messageRep;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getFkIdAdmin(): ?User
    {
        return $this->fkIdAdmin;
    }

    public function setFkIdAdmin(?User $fkIdAdmin): self
    {
        $this->fkIdAdmin = $fkIdAdmin;

        return $this;
    }

    public function getFkIdReclamation(): ?Reclamation
    {
        return $this->fkIdReclamation;
    }

    public function setFkIdReclamation(?Reclamation $fkIdReclamation): self
    {
        $this->fkIdReclamation = $fkIdReclamation;

        return $this;
    }


<<<<<<< HEAD
}   
=======
}
>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627
