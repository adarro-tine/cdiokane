<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommandeRepository")
 */
class Commande
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
    private $pays;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;
      /**
     * @ORM\Column(type="string", length=255)
     */
    private $telephone;


    
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $subvention;

    /**
     * @ORM\Column(type="integer")
     */
    private $statut;
    
     /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="commandes",cascade={"persist"})
     */
    private $user;

     /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Cours", inversedBy="commandes",cascade={"persist"})
     */
   
    private $cours;


    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $commande = [];
    
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Cursus", inversedBy="commandes",cascade={"persist"})
     */
   
    private $cursus;

    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->codePostal;
    }

    public function setCodePostal(?int $codePostal): self
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getSubvention(): ?bool
    {
        return $this->subvention;
    }

    public function setSubvention(bool $subvention): self
    {
        $this->subvention = $subvention;

        return $this;
    }

    public function getStatut(): ?int
    {
        return $this->statut;
    }

    public function setStatut(int $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of telephone
     */ 
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @return  self
     */ 
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get the value of user
     */ 
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  self
     */ 
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getCommande(): ?array
    {
        return $this->commande;
    }

    public function setCommande(?array $commande): self
    {
        $this->commande = $commande;

        return $this;
    }

    

    /**
     * Get the value of cursus
     */ 
    public function getCursus()
    {
        return $this->cursus;
    }

    /**
     * Set the value of cursus
     *
     * @return  self
     */ 
    public function setCursus($cursus)
    {
        $this->cursus = $cursus;

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

