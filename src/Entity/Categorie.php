<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategorieRepository")
 */
class Categorie
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
    private $libelle;
     /**
     * @ORM\OneToMany(targetEntity="App\Entity\Cours", mappedBy="categorie")
     */
    private $cours;
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\AddCours", mappedBy="categorie")
     */
    private $addcours;
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\SousCategorie", mappedBy="categorie")
     */
    private $souscategorie;


    /**
     * @ORM\Column(type="blob")
     */
    private $imgC;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

     /**
    * @ORM\OneToMany(targetEntity="App\Entity\Poste", mappedBy="category")
    */
   private $poste;

    
   

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getImgC()
    {
        return $this->imgC;
    }

    public function setImgC($imgC): self
    {
        $this->imgC = $imgC;

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

    

   /**
    * Get the value of poste
    */ 
   public function getPoste()
   {
      return $this->poste;
   }

   /**
    * Set the value of poste
    *
    * @return  self
    */ 
   public function setPoste($poste)
   {
      $this->poste = $poste;

      return $this;
   }

    /**
     * Get the value of addcours
     */ 
    public function getAddcours()
    {
        return $this->addcours;
    }

    /**
     * Set the value of addcours
     *
     * @return  self
     */ 
    public function setAddcours($addcours)
    {
        $this->addcours = $addcours;

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
}
