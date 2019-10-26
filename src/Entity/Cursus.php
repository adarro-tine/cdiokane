<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CursusRepository")
 */
class Cursus
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
     * @ORM\Column(type="string", length=255)
     */
    private $cout;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dureeCursus;

     /**
     * @ORM\OneToMany(targetEntity="App\Entity\Commande", mappedBy="cursus")
     */
    private $commandes;

   
    

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

    public function getCout(): ?string
    {
        return $this->cout;
    }

    public function setCout(string $cout): self
    {
        $this->cout = $cout;

        return $this;
    }

    public function getDureeCursus(): ?string
    {
        return $this->dureeCursus;
    }

    public function setDureeCursus(string $dureeCursus): self
    {
        $this->dureeCursus = $dureeCursus;

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
}

