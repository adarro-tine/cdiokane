<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PosteRepository")
 */
class Poste
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
    private $role;

    

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
    * @ORM\ManyToOne(targetEntity="App\Entity\Categorie", inversedBy="poste",cascade={"persist"})
    */
   private $category;

  


     /**
    * @ORM\OneToMany(targetEntity="App\Entity\Formateur", mappedBy="poste")
    */
   private $formateur;
  

   

   
    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

 


   /**
    * Get the value of category
    */ 
   public function getCategory()
   {
      return $this->category;
   }

   /**
    * Set the value of category
    *
    * @return  self
    */ 
   public function setCategory($category)
   {
      $this->category = $category;

      return $this;
   }



   /**
    * Get the value of formateur
    */ 
   public function getFormateur()
   {
      return $this->formateur;
   }

   /**
    * Set the value of formateur
    *
    * @return  self
    */ 
   public function setFormateur($formateur)
   {
      $this->formateur = $formateur;

      return $this;
   }
}
