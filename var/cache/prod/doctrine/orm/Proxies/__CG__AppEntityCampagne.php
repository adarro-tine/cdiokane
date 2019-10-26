<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Campagne extends \App\Entity\Campagne implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Campagne' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Campagne' . "\0" . 'photo', '' . "\0" . 'App\\Entity\\Campagne' . "\0" . 'telephone', '' . "\0" . 'App\\Entity\\Campagne' . "\0" . 'date', '' . "\0" . 'App\\Entity\\Campagne' . "\0" . 'ville', '' . "\0" . 'App\\Entity\\Campagne' . "\0" . 'pays', '' . "\0" . 'App\\Entity\\Campagne' . "\0" . 'slug', '' . "\0" . 'App\\Entity\\Campagne' . "\0" . 'facebook', '' . "\0" . 'App\\Entity\\Campagne' . "\0" . 'twitter', '' . "\0" . 'App\\Entity\\Campagne' . "\0" . 'linkedin', '' . "\0" . 'App\\Entity\\Campagne' . "\0" . 'instagram', '' . "\0" . 'App\\Entity\\Campagne' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Campagne' . "\0" . 'cours', '' . "\0" . 'App\\Entity\\Campagne' . "\0" . 'parcoursEdu', '' . "\0" . 'App\\Entity\\Campagne' . "\0" . 'attentes', '' . "\0" . 'App\\Entity\\Campagne' . "\0" . 'motivation', '' . "\0" . 'App\\Entity\\Campagne' . "\0" . 'perspective'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Campagne' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Campagne' . "\0" . 'photo', '' . "\0" . 'App\\Entity\\Campagne' . "\0" . 'telephone', '' . "\0" . 'App\\Entity\\Campagne' . "\0" . 'date', '' . "\0" . 'App\\Entity\\Campagne' . "\0" . 'ville', '' . "\0" . 'App\\Entity\\Campagne' . "\0" . 'pays', '' . "\0" . 'App\\Entity\\Campagne' . "\0" . 'slug', '' . "\0" . 'App\\Entity\\Campagne' . "\0" . 'facebook', '' . "\0" . 'App\\Entity\\Campagne' . "\0" . 'twitter', '' . "\0" . 'App\\Entity\\Campagne' . "\0" . 'linkedin', '' . "\0" . 'App\\Entity\\Campagne' . "\0" . 'instagram', '' . "\0" . 'App\\Entity\\Campagne' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Campagne' . "\0" . 'cours', '' . "\0" . 'App\\Entity\\Campagne' . "\0" . 'parcoursEdu', '' . "\0" . 'App\\Entity\\Campagne' . "\0" . 'attentes', '' . "\0" . 'App\\Entity\\Campagne' . "\0" . 'motivation', '' . "\0" . 'App\\Entity\\Campagne' . "\0" . 'perspective'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Campagne $proxy) {
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
    public function getTelephone(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelephone', []);

        return parent::getTelephone();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelephone(string $telephone): \App\Entity\Campagne
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelephone', [$telephone]);

        return parent::setTelephone($telephone);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', []);

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate($date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', [$date]);

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getVille()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVille', []);

        return parent::getVille();
    }

    /**
     * {@inheritDoc}
     */
    public function setVille($ville)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVille', [$ville]);

        return parent::setVille($ville);
    }

    /**
     * {@inheritDoc}
     */
    public function getPays()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPays', []);

        return parent::getPays();
    }

    /**
     * {@inheritDoc}
     */
    public function setPays($pays)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPays', [$pays]);

        return parent::setPays($pays);
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
    public function setSlug($slug)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', [$slug]);

        return parent::setSlug($slug);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhoto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhoto', []);

        return parent::getPhoto();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhoto($photo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhoto', [$photo]);

        return parent::setPhoto($photo);
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
    public function getFacebook(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFacebook', []);

        return parent::getFacebook();
    }

    /**
     * {@inheritDoc}
     */
    public function setFacebook(string $facebook): \App\Entity\Campagne
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFacebook', [$facebook]);

        return parent::setFacebook($facebook);
    }

    /**
     * {@inheritDoc}
     */
    public function getTwitter(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTwitter', []);

        return parent::getTwitter();
    }

    /**
     * {@inheritDoc}
     */
    public function setTwitter(string $twitter): \App\Entity\Campagne
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTwitter', [$twitter]);

        return parent::setTwitter($twitter);
    }

    /**
     * {@inheritDoc}
     */
    public function getLinkedin(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLinkedin', []);

        return parent::getLinkedin();
    }

    /**
     * {@inheritDoc}
     */
    public function setLinkedin(string $linkedin): \App\Entity\Campagne
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLinkedin', [$linkedin]);

        return parent::setLinkedin($linkedin);
    }

    /**
     * {@inheritDoc}
     */
    public function getInstagram(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInstagram', []);

        return parent::getInstagram();
    }

    /**
     * {@inheritDoc}
     */
    public function setInstagram(string $instagram): \App\Entity\Campagne
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInstagram', [$instagram]);

        return parent::setInstagram($instagram);
    }

    /**
     * {@inheritDoc}
     */
    public function getParcoursEdu(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParcoursEdu', []);

        return parent::getParcoursEdu();
    }

    /**
     * {@inheritDoc}
     */
    public function setParcoursEdu(string $parcoursEdu): \App\Entity\Campagne
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParcoursEdu', [$parcoursEdu]);

        return parent::setParcoursEdu($parcoursEdu);
    }

    /**
     * {@inheritDoc}
     */
    public function getMotivation(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMotivation', []);

        return parent::getMotivation();
    }

    /**
     * {@inheritDoc}
     */
    public function setMotivation(string $motivation): \App\Entity\Campagne
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMotivation', [$motivation]);

        return parent::setMotivation($motivation);
    }

    /**
     * {@inheritDoc}
     */
    public function getPerspective(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPerspective', []);

        return parent::getPerspective();
    }

    /**
     * {@inheritDoc}
     */
    public function setPerspective(string $perspective): \App\Entity\Campagne
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPerspective', [$perspective]);

        return parent::setPerspective($perspective);
    }

    /**
     * {@inheritDoc}
     */
    public function getAttentes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttentes', []);

        return parent::getAttentes();
    }

    /**
     * {@inheritDoc}
     */
    public function setAttentes($attentes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAttentes', [$attentes]);

        return parent::setAttentes($attentes);
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

}