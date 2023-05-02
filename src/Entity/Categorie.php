<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

<<<<<<< HEAD
/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity
 */
class Categorie
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_categorie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="type_categorie", type="string", length=11, nullable=false)
     */
    private $typeCategorie;
=======
#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    
    private ?int $idCategorie = null;

    #[ORM\Column(length : 11)]
    private ?string $typeCategorie = null;
>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627

    public function getIdCategorie(): ?int
    {
        return $this->idCategorie;
    }

    public function getTypeCategorie(): ?string
    {
        return $this->typeCategorie;
    }

    public function setTypeCategorie(string $typeCategorie): self
    {
        $this->typeCategorie = $typeCategorie;

        return $this;
    }


}
