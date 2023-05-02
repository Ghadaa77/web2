<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Livraison extends \App\Entity\Livraison implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Livraison' . "\0" . 'idLivraison', '' . "\0" . 'App\\Entity\\Livraison' . "\0" . 'dateLivraison', '' . "\0" . 'App\\Entity\\Livraison' . "\0" . 'prixLivraison', '' . "\0" . 'App\\Entity\\Livraison' . "\0" . 'adresseLivraison', '' . "\0" . 'App\\Entity\\Livraison' . "\0" . 'etatLivraison', '' . "\0" . 'App\\Entity\\Livraison' . "\0" . 'fkIdLivreur', '' . "\0" . 'App\\Entity\\Livraison' . "\0" . 'fkIdPointderelais'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Livraison' . "\0" . 'idLivraison', '' . "\0" . 'App\\Entity\\Livraison' . "\0" . 'dateLivraison', '' . "\0" . 'App\\Entity\\Livraison' . "\0" . 'prixLivraison', '' . "\0" . 'App\\Entity\\Livraison' . "\0" . 'adresseLivraison', '' . "\0" . 'App\\Entity\\Livraison' . "\0" . 'etatLivraison', '' . "\0" . 'App\\Entity\\Livraison' . "\0" . 'fkIdLivreur', '' . "\0" . 'App\\Entity\\Livraison' . "\0" . 'fkIdPointderelais'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Livraison $proxy) {
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
    public function getIdLivraison(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdLivraison();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdLivraison', []);

        return parent::getIdLivraison();
    }

    /**
     * {@inheritDoc}
     */
    public function getDateLivraison(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateLivraison', []);

        return parent::getDateLivraison();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateLivraison(\DateTimeInterface $dateLivraison): \App\Entity\Livraison
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateLivraison', [$dateLivraison]);

        return parent::setDateLivraison($dateLivraison);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrixLivraison(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrixLivraison', []);

        return parent::getPrixLivraison();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrixLivraison(float $prixLivraison): \App\Entity\Livraison
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrixLivraison', [$prixLivraison]);

        return parent::setPrixLivraison($prixLivraison);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresseLivraison(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresseLivraison', []);

        return parent::getAdresseLivraison();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresseLivraison(string $adresseLivraison): \App\Entity\Livraison
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresseLivraison', [$adresseLivraison]);

        return parent::setAdresseLivraison($adresseLivraison);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtatLivraison(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtatLivraison', []);

        return parent::getEtatLivraison();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtatLivraison(string $etatLivraison): \App\Entity\Livraison
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtatLivraison', [$etatLivraison]);

        return parent::setEtatLivraison($etatLivraison);
    }

    /**
     * {@inheritDoc}
     */
    public function getFkIdLivreur(): ?\App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFkIdLivreur', []);

        return parent::getFkIdLivreur();
    }

    /**
     * {@inheritDoc}
     */
    public function setFkIdLivreur(?\App\Entity\User $fkIdLivreur): \App\Entity\Livraison
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFkIdLivreur', [$fkIdLivreur]);

        return parent::setFkIdLivreur($fkIdLivreur);
    }

    /**
     * {@inheritDoc}
     */
    public function getFkIdPointderelais(): ?\App\Entity\Pointderelais
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFkIdPointderelais', []);

        return parent::getFkIdPointderelais();
    }

    /**
     * {@inheritDoc}
     */
    public function setFkIdPointderelais(?\App\Entity\Pointderelais $fkIdPointderelais): \App\Entity\Livraison
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFkIdPointderelais', [$fkIdPointderelais]);

        return parent::setFkIdPointderelais($fkIdPointderelais);
    }

}
