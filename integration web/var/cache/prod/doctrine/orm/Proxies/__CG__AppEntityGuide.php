<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Guide extends \App\Entity\Guide implements \Doctrine\ORM\Proxy\Proxy
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
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Guide' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Guide' . "\0" . 'id_guide', '' . "\0" . 'App\\Entity\\Guide' . "\0" . 'nom_guide', '' . "\0" . 'App\\Entity\\Guide' . "\0" . 'prenom_guide', '' . "\0" . 'App\\Entity\\Guide' . "\0" . 'activite', '' . "\0" . 'App\\Entity\\Guide' . "\0" . 'agenda', '' . "\0" . 'App\\Entity\\Guide' . "\0" . 'agenda_time'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Guide' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Guide' . "\0" . 'id_guide', '' . "\0" . 'App\\Entity\\Guide' . "\0" . 'nom_guide', '' . "\0" . 'App\\Entity\\Guide' . "\0" . 'prenom_guide', '' . "\0" . 'App\\Entity\\Guide' . "\0" . 'activite', '' . "\0" . 'App\\Entity\\Guide' . "\0" . 'agenda', '' . "\0" . 'App\\Entity\\Guide' . "\0" . 'agenda_time'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Guide $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
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
    public function getIdGuide(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdGuide', []);

        return parent::getIdGuide();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdGuide(int $id_guide): \App\Entity\Guide
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdGuide', [$id_guide]);

        return parent::setIdGuide($id_guide);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomGuide(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomGuide', []);

        return parent::getNomGuide();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomGuide(string $nom_guide): \App\Entity\Guide
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomGuide', [$nom_guide]);

        return parent::setNomGuide($nom_guide);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenomGuide(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenomGuide', []);

        return parent::getPrenomGuide();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenomGuide(string $prenom_guide): \App\Entity\Guide
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenomGuide', [$prenom_guide]);

        return parent::setPrenomGuide($prenom_guide);
    }

    /**
     * {@inheritDoc}
     */
    public function getActivite(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActivite', []);

        return parent::getActivite();
    }

    /**
     * {@inheritDoc}
     */
    public function setActivite(string $activite): \App\Entity\Guide
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActivite', [$activite]);

        return parent::setActivite($activite);
    }

    /**
     * {@inheritDoc}
     */
    public function getAgenda(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAgenda', []);

        return parent::getAgenda();
    }

    /**
     * {@inheritDoc}
     */
    public function setAgenda(\DateTimeInterface $agenda): \App\Entity\Guide
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAgenda', [$agenda]);

        return parent::setAgenda($agenda);
    }

    /**
     * {@inheritDoc}
     */
    public function getAgendaTime(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAgendaTime', []);

        return parent::getAgendaTime();
    }

    /**
     * {@inheritDoc}
     */
    public function setAgendaTime(\DateTimeInterface $agenda_time): \App\Entity\Guide
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAgendaTime', [$agenda_time]);

        return parent::setAgendaTime($agenda_time);
    }

}
