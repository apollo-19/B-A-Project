<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Curriculum extends \AppBundle\Entity\Curriculum implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
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
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
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
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Curriculum' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Curriculum' . "\0" . 'curriculumCode', '' . "\0" . 'AppBundle\\Entity\\Curriculum' . "\0" . 'curriculumName', '' . "\0" . 'AppBundle\\Entity\\Curriculum' . "\0" . 'curriculumType', '' . "\0" . 'AppBundle\\Entity\\Curriculum' . "\0" . 'isApplied', '' . "\0" . 'AppBundle\\Entity\\Curriculum' . "\0" . 'createdBy', '' . "\0" . 'AppBundle\\Entity\\Curriculum' . "\0" . 'schoolId', '' . "\0" . 'AppBundle\\Entity\\Curriculum' . "\0" . 'school', '' . "\0" . 'AppBundle\\Entity\\Curriculum' . "\0" . 'modules'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Curriculum' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Curriculum' . "\0" . 'curriculumCode', '' . "\0" . 'AppBundle\\Entity\\Curriculum' . "\0" . 'curriculumName', '' . "\0" . 'AppBundle\\Entity\\Curriculum' . "\0" . 'curriculumType', '' . "\0" . 'AppBundle\\Entity\\Curriculum' . "\0" . 'isApplied', '' . "\0" . 'AppBundle\\Entity\\Curriculum' . "\0" . 'createdBy', '' . "\0" . 'AppBundle\\Entity\\Curriculum' . "\0" . 'schoolId', '' . "\0" . 'AppBundle\\Entity\\Curriculum' . "\0" . 'school', '' . "\0" . 'AppBundle\\Entity\\Curriculum' . "\0" . 'modules'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Curriculum $proxy) {
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
    public function getId()
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
    public function setCurriculumCode($curriculumCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCurriculumCode', [$curriculumCode]);

        return parent::setCurriculumCode($curriculumCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getCurriculumCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCurriculumCode', []);

        return parent::getCurriculumCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setCurriculumName($curriculumName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCurriculumName', [$curriculumName]);

        return parent::setCurriculumName($curriculumName);
    }

    /**
     * {@inheritDoc}
     */
    public function getCurriculumName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCurriculumName', []);

        return parent::getCurriculumName();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsApplied($isApplied)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsApplied', [$isApplied]);

        return parent::setIsApplied($isApplied);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsApplied()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsApplied', []);

        return parent::getIsApplied();
    }

    /**
     * {@inheritDoc}
     */
    public function setCurriculumType($curriculumType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCurriculumType', [$curriculumType]);

        return parent::setCurriculumType($curriculumType);
    }

    /**
     * {@inheritDoc}
     */
    public function getCurriculumType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCurriculumType', []);

        return parent::getCurriculumType();
    }

    /**
     * {@inheritDoc}
     */
    public function setSchoolId($schoolId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSchoolId', [$schoolId]);

        return parent::setSchoolId($schoolId);
    }

    /**
     * {@inheritDoc}
     */
    public function getSchoolId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSchoolId', []);

        return parent::getSchoolId();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedBy($createdBy)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedBy', [$createdBy]);

        return parent::setCreatedBy($createdBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedBy', []);

        return parent::getCreatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setSchool(\AppBundle\Entity\School $school = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSchool', [$school]);

        return parent::setSchool($school);
    }

    /**
     * {@inheritDoc}
     */
    public function getSchool()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSchool', []);

        return parent::getSchool();
    }

    /**
     * {@inheritDoc}
     */
    public function addModule(\AppBundle\Entity\Module $module)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addModule', [$module]);

        return parent::addModule($module);
    }

    /**
     * {@inheritDoc}
     */
    public function removeModule(\AppBundle\Entity\Module $module)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeModule', [$module]);

        return parent::removeModule($module);
    }

    /**
     * {@inheritDoc}
     */
    public function getModules()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModules', []);

        return parent::getModules();
    }

}