<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Commande extends \App\Entity\Commande implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Commande' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Commande' . "\0" . 'pays', '' . "\0" . 'App\\Entity\\Commande' . "\0" . 'ville', '' . "\0" . 'App\\Entity\\Commande' . "\0" . 'adresse', '' . "\0" . 'App\\Entity\\Commande' . "\0" . 'telephone', '' . "\0" . 'App\\Entity\\Commande' . "\0" . 'subvention', '' . "\0" . 'App\\Entity\\Commande' . "\0" . 'statut', '' . "\0" . 'App\\Entity\\Commande' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Commande' . "\0" . 'cours', '' . "\0" . 'App\\Entity\\Commande' . "\0" . 'date', '' . "\0" . 'App\\Entity\\Commande' . "\0" . 'commande', '' . "\0" . 'App\\Entity\\Commande' . "\0" . 'cursus'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Commande' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Commande' . "\0" . 'pays', '' . "\0" . 'App\\Entity\\Commande' . "\0" . 'ville', '' . "\0" . 'App\\Entity\\Commande' . "\0" . 'adresse', '' . "\0" . 'App\\Entity\\Commande' . "\0" . 'telephone', '' . "\0" . 'App\\Entity\\Commande' . "\0" . 'subvention', '' . "\0" . 'App\\Entity\\Commande' . "\0" . 'statut', '' . "\0" . 'App\\Entity\\Commande' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Commande' . "\0" . 'cours', '' . "\0" . 'App\\Entity\\Commande' . "\0" . 'date', '' . "\0" . 'App\\Entity\\Commande' . "\0" . 'commande', '' . "\0" . 'App\\Entity\\Commande' . "\0" . 'cursus'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Commande $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getPays(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPays', []);

        return parent::getPays();
    }

    /**
     * {@inheritDoc}
     */
    public function setPays(string $pays): \App\Entity\Commande
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPays', [$pays]);

        return parent::setPays($pays);
    }

    /**
     * {@inheritDoc}
     */
    public function getVille(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVille', []);

        return parent::getVille();
    }

    /**
     * {@inheritDoc}
     */
    public function setVille(string $ville): \App\Entity\Commande
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVille', [$ville]);

        return parent::setVille($ville);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodePostal(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodePostal', []);

        return parent::getCodePostal();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodePostal(?int $codePostal): \App\Entity\Commande
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodePostal', [$codePostal]);

        return parent::setCodePostal($codePostal);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubvention(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubvention', []);

        return parent::getSubvention();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubvention(bool $subvention): \App\Entity\Commande
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubvention', [$subvention]);

        return parent::setSubvention($subvention);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatut(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatut', []);

        return parent::getStatut();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatut(int $statut): \App\Entity\Commande
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatut', [$statut]);

        return parent::setStatut($statut);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', []);

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse($adresse)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', [$adresse]);

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelephone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelephone', []);

        return parent::getTelephone();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelephone($telephone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelephone', [$telephone]);

        return parent::setTelephone($telephone);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser($user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', []);

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate(\DateTimeInterface $date): \App\Entity\Commande
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', [$date]);

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommande(): ?array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommande', []);

        return parent::getCommande();
    }

    /**
     * {@inheritDoc}
     */
    public function setCommande(?array $commande): \App\Entity\Commande
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCommande', [$commande]);

        return parent::setCommande($commande);
    }

    /**
     * {@inheritDoc}
     */
    public function getCursus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCursus', []);

        return parent::getCursus();
    }

    /**
     * {@inheritDoc}
     */
    public function setCursus($cursus)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCursus', [$cursus]);

        return parent::setCursus($cursus);
    }

    /**
     * {@inheritDoc}
     */
    public function getCours()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCours', []);

        return parent::getCours();
    }

    /**
     * {@inheritDoc}
     */
    public function setCours($cours)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCours', [$cours]);

        return parent::setCours($cours);
    }

}