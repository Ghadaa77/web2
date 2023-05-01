<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Pointderelais extends \App\Entity\Pointderelais implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Pointderelais' . "\0" . 'idPointderelais', '' . "\0" . 'App\\Entity\\Pointderelais' . "\0" . 'adressePointderelais', '' . "\0" . 'App\\Entity\\Pointderelais' . "\0" . 'region', '' . "\0" . 'App\\Entity\\Pointderelais' . "\0" . 'horaire', '' . "\0" . 'App\\Entity\\Pointderelais' . "\0" . 'fkIdLivraisonp'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Pointderelais' . "\0" . 'idPointderelais', '' . "\0" . 'App\\Entity\\Pointderelais' . "\0" . 'adressePointderelais', '' . "\0" . 'App\\Entity\\Pointderelais' . "\0" . 'region', '' . "\0" . 'App\\Entity\\Pointderelais' . "\0" . 'horaire', '' . "\0" . 'App\\Entity\\Pointderelais' . "\0" . 'fkIdLivraisonp'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Pointderelais $proxy) {
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
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getIdPointderelais(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdPointderelais();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdPointderelais', []);

        return parent::getIdPointderelais();
    }

    /**
     * {@inheritDoc}
     */
    public function getAdressePointderelais(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdressePointderelais', []);

        return parent::getAdressePointderelais();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdressePointderelais(string $adressePointderelais): \App\Entity\Pointderelais
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdressePointderelais', [$adressePointderelais]);

        return parent::setAdressePointderelais($adressePointderelais);
    }

    /**
     * {@inheritDoc}
     */
    public function getRegion(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegion', []);

        return parent::getRegion();
    }

    /**
     * {@inheritDoc}
     */
    public function setRegion(string $region): \App\Entity\Pointderelais
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRegion', [$region]);

        return parent::setRegion($region);
    }

    /**
     * {@inheritDoc}
     */
    public function getHoraire(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHoraire', []);

        return parent::getHoraire();
    }

    /**
     * {@inheritDoc}
     */
    public function setHoraire(int $horaire): \App\Entity\Pointderelais
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHoraire', [$horaire]);

        return parent::setHoraire($horaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getFkIdLivraisonp(): ?\App\Entity\Livraison
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFkIdLivraisonp', []);

        return parent::getFkIdLivraisonp();
    }

    /**
     * {@inheritDoc}
     */
    public function setFkIdLivraisonp(?\App\Entity\Livraison $fkIdLivraisonp): \App\Entity\Pointderelais
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFkIdLivraisonp', [$fkIdLivraisonp]);

        return parent::setFkIdLivraisonp($fkIdLivraisonp);
    }

}
