<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ChapitreRepository")
 */
class Chapitre
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
    private $titreChapitre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $video;

     /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Cours", inversedBy="chapitres",cascade={"persist"})
     */
    private $cour;

    

    /**
     * @ORM\Column(type="boolean")
     */
    private $etat;

    /**
     * @ORM\Column(type="text")
     */
    private $chapitre;

    /**
     * @ORM\Column(type="datetime")
     */
    private $duree;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

   

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreChapitre(): ?string
    {
        return $this->titreChapitre;
    }

    public function setTitreChapitre(string $titreChapitre): self
    {
        $this->titreChapitre = $titreChapitre;

        return $this;
    }

    

    public function getVideo(): ?string
    {
        return $this->video;
    }

    public function setVideo(string $video): self
    {
        $this->video = $video;

        return $this;
    }
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Get the value of cour
     */ 
    public function getCour()
    {
        return $this->cour;
    }

    /**
     * Set the value of cour    
     *
     * @return  self
     */ 
    public function setCour($cour)
    {
        $this->cour = $cour;

        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getEtat(): ?bool
    {
        return $this->etat;
    }

    public function setEtat(bool $etat): self
    {
        $this->etat = $etat;

        return $this;
    }
    public function __toString(){
        return $this->cour;
    }

    public function getChapitre(): ?string
    {
        return $this->chapitre;
    }

    public function setChapitre(string $chapitre): self
    {
        $this->chapitre = $chapitre;

        return $this;
    }

    public function getDuree(): ?\DateTimeInterface
    {
        return $this->duree;
    }

    public function setDuree(\DateTimeInterface $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

}
