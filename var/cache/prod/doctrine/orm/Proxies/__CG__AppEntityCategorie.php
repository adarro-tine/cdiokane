<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Categorie extends \App\Entity\Categorie implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'libelle', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'cours', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'addcours', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'souscategorie', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'imgC', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'slug', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'poste'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'libelle', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'cours', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'addcours', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'souscategorie', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'imgC', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'slug', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'poste'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Categorie $proxy) {
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
    public function getLibelle(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLibelle', []);

        return parent::getLibelle();
    }

    /**
     * {@inheritDoc}
     */
    public function setLibelle(string $libelle): \App\Entity\Categorie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLibelle', [$libelle]);

        return parent::setLibelle($libelle);
    }

    /**
     * {@inheritDoc}
     */
    public function getImgC()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImgC', []);

        return parent::getImgC();
    }

    /**
     * {@inheritDoc}
     */
    public function setImgC($imgC): \App\Entity\Categorie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImgC', [$imgC]);

        return parent::setImgC($imgC);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', []);

        return parent::getSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlug(string $slug): \App\Entity\Categorie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', [$slug]);

        return parent::setSlug($slug);
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

    /**
     * {@inheritDoc}
     */
    public function getPoste()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPoste', []);

        return parent::getPoste();
    }

    /**
     * {@inheritDoc}
     */
    public function setPoste($poste)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPoste', [$poste]);

        return parent::setPoste($poste);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddcours()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddcours', []);

        return parent::getAddcours();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddcours($addcours)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddcours', [$addcours]);

        return parent::setAddcours($addcours);
    }

    /**
     * {@inheritDoc}
     */
    public function getSouscategorie()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSouscategorie', []);

        return parent::getSouscategorie();
    }

    /**
     * {@inheritDoc}
     */
    public function setSouscategorie($souscategorie)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSouscategorie', [$souscategorie]);

        return parent::setSouscategorie($souscategorie);
    }

}