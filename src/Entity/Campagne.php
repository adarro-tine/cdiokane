<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CampagneRepository")
 */
class Campagne
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $photo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telephone;
   
/**
     * @ORM\Column(type="datetime")
     */
    private $date;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pays;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $facebook;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $twitter;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $linkedin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $instagram;
    
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="users")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="CASCADE")
     */
  private $user;
 
  /**
   * @ORM\ManyToOne(targetEntity="App\Entity\Cours", cascade={"persist"})
   */
  private $cours;


  /**
   * @ORM\Column(type="text")
   */
  private $attentes;

  /**
   * @ORM\Column(type="text")
   */
  private $motivation;

  /**
   * @ORM\Column(type="string", length=255)
   */
  private $perspective;

  /**
     * @ORM\OneToMany(targetEntity="App\Entity\Donateur", mappedBy="campagne")
     */
    private $donateur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $video;

    /**
     * @ORM\Column(type="text")
     */
    private $parcoursEdu;
 

    public function getId(): ?int
    {
        return $this->id;
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
    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of ville
     */ 
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set the value of ville
     *
     * @return  self
     */ 
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get the value of pays
     */ 
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set the value of pays
     *
     * @return  self
     */ 
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get the value of slug
     */ 
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set the value of slug
     *
     * @return  self
     */ 
    public function setSlug($slug)
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

  public function getFacebook(): ?string
  {
      return $this->facebook;
  }

  public function setFacebook(string $facebook): self
  {
      $this->facebook = $facebook;

      return $this;
  }

  public function getTwitter(): ?string
  {
      return $this->twitter;
  }

  public function setTwitter(string $twitter): self
  {
      $this->twitter = $twitter;

      return $this;
  }

  public function getLinkedin(): ?string
  {
      return $this->linkedin;
  }

  public function setLinkedin(string $linkedin): self
  {
      $this->linkedin = $linkedin;

      return $this;
  }

  public function getInstagram(): ?string
  {
      return $this->instagram;
  }

  public function setInstagram(string $instagram): self
  {
      $this->instagram = $instagram;

      return $this;
  }

    public function getPerspective(): ?string
    {
        return $this->perspective;
    }

    public function setPerspective(string $perspective): self
    {
        $this->perspective = $perspective;

        return $this;
    }

  /**
   * Get the value of attentes
   */ 
  public function getAttentes()
  {
    return $this->attentes;
  }

  /**
   * Set the value of attentes
   *
   * @return  self
   */ 
  public function setAttentes($attentes)
  {
    $this->attentes = $attentes;

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

    /**
     * Get the value of donateur
     */ 
    public function getDonateur()
    {
        return $this->donateur;
    }

    /**
     * Set the value of donateur
     *
     * @return  self
     */ 
    public function setDonateur($donateur)
    {
        $this->donateur = $donateur;

        return $this;
    }

  /**
   * Get the value of motivation
   */ 
  public function getMotivation()
  {
    return $this->motivation;
  }

  /**
   * Set the value of motivation
   *
   * @return  self
   */ 
  public function setMotivation($motivation)
  {
    $this->motivation = $motivation;

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

  public function getParcoursEdu(): ?string
  {
      return $this->parcoursEdu;
  }

  public function setParcoursEdu(string $parcoursEdu): self
  {
      $this->parcoursEdu = $parcoursEdu;

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
}
