<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Chapitre extends \App\Entity\Chapitre implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Chapitre' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Chapitre' . "\0" . 'titreChapitre', '' . "\0" . 'App\\Entity\\Chapitre' . "\0" . 'duration', '' . "\0" . 'App\\Entity\\Chapitre' . "\0" . 'video', '' . "\0" . 'App\\Entity\\Chapitre' . "\0" . 'cour', '' . "\0" . 'App\\Entity\\Chapitre' . "\0" . 'slug', '' . "\0" . 'App\\Entity\\Chapitre' . "\0" . 'etat'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Chapitre' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Chapitre' . "\0" . 'titreChapitre', '' . "\0" . 'App\\Entity\\Chapitre' . "\0" . 'duration', '' . "\0" . 'App\\Entity\\Chapitre' . "\0" . 'video', '' . "\0" . 'App\\Entity\\Chapitre' . "\0" . 'cour', '' . "\0" . 'App\\Entity\\Chapitre' . "\0" . 'slug', '' . "\0" . 'App\\Entity\\Chapitre' . "\0" . 'etat'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Chapitre $proxy) {
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
    public function getTitreChapitre(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitreChapitre', []);

        return parent::getTitreChapitre();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitreChapitre(string $titreChapitre): \App\Entity\Chapitre
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitreChapitre', [$titreChapitre]);

        return parent::setTitreChapitre($titreChapitre);
    }

    /**
     * {@inheritDoc}
     */
    public function getDuration(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDuration', []);

        return parent::getDuration();
    }

    /**
     * {@inheritDoc}
     */
    public function setDuration(string $duration): \App\Entity\Chapitre
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDuration', [$duration]);

        return parent::setDuration($duration);
    }

    /**
     * {@inheritDoc}
     */
    public function getVideo(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVideo', []);

        return parent::getVideo();
    }

    /**
     * {@inheritDoc}
     */
    public function setVideo(string $video): \App\Entity\Chapitre
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVideo', [$video]);

        return parent::setVideo($video);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', []);

        return parent::getSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function getCour()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCour', []);

        return parent::getCour();
    }

    /**
     * {@inheritDoc}
     */
    public function setCour($cour)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCour', [$cour]);

        return parent::setCour($cour);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus(bool $status): \App\Entity\Chapitre
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtat(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtat', []);

        return parent::getEtat();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtat(bool $etat): \App\Entity\Chapitre
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtat', [$etat]);

        return parent::setEtat($etat);
    }

}