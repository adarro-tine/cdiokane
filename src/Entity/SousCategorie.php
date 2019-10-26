<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SousCategorieRepository")
 */
class SousCategorie
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Categorie", inversedBy="souscategorie",cascade={"persist"})
     */
    private $categorie;
     /**
     * @ORM\OneToMany(targetEntity="App\Entity\Cours", mappedBy="souscategorie")
     */
    private $cours;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of categorie
     */ 
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set the value of categorie
     *
     * @return  self
     */ 
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get the value of cours
     */ 
    public function getCours()
    {
        return $this->cours;
    }

    /**
     * Set the value of cours
     *
     * @return  self
     */ 
    public function setCours($cours)
    {
        $this->cours = $cours;

        return $this;
    }
}
