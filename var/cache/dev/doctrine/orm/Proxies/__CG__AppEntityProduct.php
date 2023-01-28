<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Product extends \App\Entity\Product implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'title', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'reference', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'price', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'picture', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'brand', 'editPicture', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'gender', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'category', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'details', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'promo', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'suppliers', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'stocks', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'colors', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'sizes'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'title', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'reference', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'price', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'picture', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'brand', 'editPicture', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'gender', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'category', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'details', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'promo', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'suppliers', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'stocks', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'colors', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'sizes'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Product $proxy) {
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
    public function getTitle(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle(string $title): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getReference(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReference', []);

        return parent::getReference();
    }

    /**
     * {@inheritDoc}
     */
    public function setReference(string $reference): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReference', [$reference]);

        return parent::setReference($reference);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(?string $description): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice', []);

        return parent::getPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrice(float $price): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrice', [$price]);

        return parent::setPrice($price);
    }

    /**
     * {@inheritDoc}
     */
    public function getPicture(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPicture', []);

        return parent::getPicture();
    }

    /**
     * {@inheritDoc}
     */
    public function setPicture(string $picture): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPicture', [$picture]);

        return parent::setPicture($picture);
    }

    /**
     * {@inheritDoc}
     */
    public function getBrand(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBrand', []);

        return parent::getBrand();
    }

    /**
     * {@inheritDoc}
     */
    public function setBrand(string $brand): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBrand', [$brand]);

        return parent::setBrand($brand);
    }

    /**
     * {@inheritDoc}
     */
    public function getGender(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGender', []);

        return parent::getGender();
    }

    /**
     * {@inheritDoc}
     */
    public function setGender(string $gender): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGender', [$gender]);

        return parent::setGender($gender);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory(): ?\App\Entity\Category
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', []);

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory(?\App\Entity\Category $category): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', [$category]);

        return parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getDetails(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDetails', []);

        return parent::getDetails();
    }

    /**
     * {@inheritDoc}
     */
    public function addDetail(\App\Entity\Detail $detail): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDetail', [$detail]);

        return parent::addDetail($detail);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDetail(\App\Entity\Detail $detail): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDetail', [$detail]);

        return parent::removeDetail($detail);
    }

    /**
     * {@inheritDoc}
     */
    public function getPromo(): ?\App\Entity\Promo
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPromo', []);

        return parent::getPromo();
    }

    /**
     * {@inheritDoc}
     */
    public function setPromo(?\App\Entity\Promo $promo): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPromo', [$promo]);

        return parent::setPromo($promo);
    }

    /**
     * {@inheritDoc}
     */
    public function getSuppliers(): ?\App\Entity\Suppliers
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSuppliers', []);

        return parent::getSuppliers();
    }

    /**
     * {@inheritDoc}
     */
    public function setSuppliers(?\App\Entity\Suppliers $suppliers): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSuppliers', [$suppliers]);

        return parent::setSuppliers($suppliers);
    }

    /**
     * {@inheritDoc}
     */
    public function getStocks(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStocks', []);

        return parent::getStocks();
    }

    /**
     * {@inheritDoc}
     */
    public function addStock(\App\Entity\Stock $stock): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addStock', [$stock]);

        return parent::addStock($stock);
    }

    /**
     * {@inheritDoc}
     */
    public function removeStock(\App\Entity\Stock $stock): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeStock', [$stock]);

        return parent::removeStock($stock);
    }

    /**
     * {@inheritDoc}
     */
    public function getColors(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getColors', []);

        return parent::getColors();
    }

    /**
     * {@inheritDoc}
     */
    public function addColor(\App\Entity\Color $color): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addColor', [$color]);

        return parent::addColor($color);
    }

    /**
     * {@inheritDoc}
     */
    public function removeColor(\App\Entity\Color $color): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeColor', [$color]);

        return parent::removeColor($color);
    }

    /**
     * {@inheritDoc}
     */
    public function getSizes(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSizes', []);

        return parent::getSizes();
    }

    /**
     * {@inheritDoc}
     */
    public function addSize(\App\Entity\Size $size): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSize', [$size]);

        return parent::addSize($size);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSize(\App\Entity\Size $size): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSize', [$size]);

        return parent::removeSize($size);
    }

}