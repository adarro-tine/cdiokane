<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass="App\Repository\FormateurRepository")
 */
class Formateur
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
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;
   

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telephone;

 

   /**
     * @ORM\Column(type="string",length=255,nullable=true)
     *
     * @Assert\NotBlank(message="Ajouter une image jpg")
     * @Assert\File(mimeTypes={ "image/jpeg","image/png" })
     */
    private $photo;

   /**
     * @ORM\Column(type="string",length=255,nullable=true)
     *
     * @Assert\NotBlank(message="Ajouter un cv")
     * @Assert\File(mimeTypes={ "application/pdf" })
     */
   
    private $cv;
    

    /**
     * @ORM\Column(type="text")
     */
    private $motivation;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $q1;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $q2;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $q3;

    


    /**
     * @ORM\Column(type="json")
     */
    private $role = [];

    /**
    * @ORM\ManyToOne(targetEntity="App\Entity\Poste", inversedBy="formateur",cascade={"persist"})
    */
    private $poste;
    

    
 

   

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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

   

    

    public function getMotivation(): ?string
    {
        return $this->motivation;
    }

    public function setMotivation(string $motivation): self
    {
        $this->motivation = $motivation;

        return $this;
    }

    


    public function getRole(): ?array
    {
        $role = $this->role;

        // Afin d'être sûr qu'un user a toujours au moins 1 rôle
        if (empty($role)) {
            $role[] = 'ROLE_FORMATEUR';
        }
        return array_unique($role);   
     }

    public function setRole(array $role): self
    {
        $this->role = $role;

        return $this;
    }


    /**
     * Get the value of photo
     */ 
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set the value of photo
     *
     * @return  self
     */ 
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get the value of cv
     */ 
    public function getCv()
    {
        return $this->cv;
    }

    /**
     * Set the value of cv
     *
     * @return  self
     */ 
    public function setCv($cv)
    {
        $this->cv = $cv;

        return $this;
    }

    /**
     * Get the value of q1
     */ 
    public function getQ1()
    {
        return $this->q1;
    }

    /**
     * Set the value of q1
     *
     * @return  self
     */ 
    public function setQ1($q1)
    {
        $this->q1 = $q1;

        return $this;
    }

    /**
     * Get the value of q2
     */ 
    public function getQ2()
    {
        return $this->q2;
    }

    /**
     * Set the value of q2
     *
     * @return  self
     */ 
    public function setQ2($q2)
    {
        $this->q2 = $q2;

        return $this;
    }

    /**
     * Get the value of q3
     */ 
    public function getQ3()
    {
        return $this->q3;
    }

    /**
     * Set the value of q3
     *
     * @return  self
     */ 
    public function setQ3($q3)
    {
        $this->q3 = $q3;

        return $this;
    }

   
    

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

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

    

}
