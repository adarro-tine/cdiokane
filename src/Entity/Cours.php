<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CoursRepository")
 */
class Cours
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
    private $titreCours;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $petitDescription;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $exigence;

    /**
     * @ORM\Column(type="integer")
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $etiquette;

    /**
     * @ORM\Column(type="boolean")
     */
    private $visibilite;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Categorie", inversedBy="cours",cascade={"persist"})
     */
    private $categorie;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\SousCategorie", inversedBy="cours",cascade={"persist"})
     */
    private $souscategorie;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Chapitre", mappedBy="cour")
     */
    private $chapitres;
    
    /**
     * @ORM\Column(type="blob")
     */
    private $image;

    /**
     * @Gedmo\Slug(fields={"titreCours", "etiquette"})
     * @ORM\Column(length=128, unique=true)
     */
        private $slug;
        

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $duree;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Commande",mappedBy="cours",cascade={"persist"})
     */
    private $commandes;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Universite", inversedBy="cours",cascade={"persist"})
     */
    private $universite;

  

  

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreCours(): ?string
    {
        return $this->titreCours;
    }

    public function setTitreCours(string $titreCours): self
    {
        $this->titreCours = $titreCours;

        return $this;
    }

    public function getPetitDescription(): ?string
    {
        return $this->petitDescription;
    }

    public function setPetitDescription(string $petitDescription): self
    {
        $this->petitDescription = $petitDescription;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getExigence(): ?string
    {
        return $this->exigence;
    }

    public function setExigence(string $exigence): self
    {
        $this->exigence = $exigence;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getEtiquette(): ?string
    {
        return $this->etiquette;
    }

    public function setEtiquette(string $etiquette): self
    {
        $this->etiquette = $etiquette;

        return $this;
    }

    public function getVisibilite(): ?bool
    {
        return $this->visibilite;
    }

    public function setVisibilite(bool $visibilite): self
    {
        $this->visibilite = $visibilite;

        return $this;
    }

   
    public function getSlug()
    {
        return $this->slug;
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

    public function getDuree(): ?string
    {
        return $this->duree;
    }

    public function setDuree(string $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get the value of chapitres
     */ 
    public function getChapitres()
    {
        return $this->chapitres;
    }

    /**
     * Set the value of chapitres
     *
     * @return  self
     */ 
    public function setChapitres($chapitres)
    {
        $this->chapitres = $chapitres;

        return $this;
    }

    


    /**
     * Get the value of commandes
     */ 
    public function getCommandes()
    {
        return $this->commandes;
    }

    /**
     * Set the value of commandes
     *
     * @return  self
     */ 
    public function setCommandes($commandes)
    {
        $this->commandes = $commandes;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of souscategorie
     */ 
    public function getSouscategorie()
    {
        return $this->souscategorie;
    }

    /**
     * Set the value of souscategorie
     *
     * @return  self
     */ 
    public function setSouscategorie($souscategorie)
    {
        $this->souscategorie = $souscategorie;

        return $this;
    }

    /**
     * Get the value of universite
     */ 
    public function getUniversite()
    {
        return $this->universite;
    }

    /**
     * Set the value of universite
     *
     * @return  self
     */ 
    public function setUniversite($universite)
    {
        $this->universite = $universite;

        return $this;
    }
}
