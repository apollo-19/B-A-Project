<?php

namespace AppBundle\Entity;

/**
 * Admin
 */
class Admin
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $middleName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $mobileNumber;

    /**
     * @var string
     */
    private $emailAddress;

    /**
     * @var string
     */
    private $adminType;

    /**
     * @var string
     */
    private $adminClass;

    /**
     * @var string
     */
    private $userName;

    /**
     * @var integer
     */
    private $createdBy;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Admin
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set middleName
     *
     * @param string $middleName
     *
     * @return Admin
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;

        return $this;
    }

    /**
     * Get middleName
     *
     * @return string
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Admin
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set mobileNumber
     *
     * @param string $mobileNumber
     *
     * @return Admin
     */
    public function setMobileNumber($mobileNumber)
    {
        $this->mobileNumber = $mobileNumber;

        return $this;
    }

    /**
     * Get mobileNumber
     *
     * @return string
     */
    public function getMobileNumber()
    {
        return $this->mobileNumber;
    }

    /**
     * Set emailAddress
     *
     * @param string $emailAddress
     *
     * @return Admin
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * Get emailAddress
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Set adminType
     *
     * @param string $adminType
     *
     * @return Admin
     */
    public function setAdminType($adminType)
    {
        $this->adminType = $adminType;

        return $this;
    }

    /**
     * Get adminType
     *
     * @return string
     */
    public function getAdminType()
    {
        return $this->adminType;
    }

    /**
     * Set adminClass
     *
     * @param string $adminClass
     *
     * @return Admin
     */
    public function setAdminClass($adminClass)
    {
        $this->adminClass = $adminClass;

        return $this;
    }

    /**
     * Get adminClass
     *
     * @return string
     */
    public function getAdminClass()
    {
        return $this->adminClass;
    }

    /**
     * Set userName
     *
     * @param string $userName
     *
     * @return Admin
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set createdBy
     *
     * @param integer $createdBy
     *
     * @return Admin
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return integer
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }
}
