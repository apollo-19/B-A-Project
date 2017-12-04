<?php

namespace AppBundle\Entity;

/**
 * Teacher
 */
class Teacher
{
    /**
     * @var int
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
    private $sex;

    /**
     * @var string
     */
    private $mobileNumber;

    /**
     * @var string
     */
    private $emailAddress;

    /**
     * @var int
     */
    private $registeredBy;

    /**
     * @var string
     */
    private $userName;

    /**
     * @var string
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
     * @return Teacher
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
     * @return Teacher
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
     * @return Teacher
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
     * Set sex
     *
     * @param string $sex
     *
     * @return Teacher
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set mobileNumber
     *
     * @param string $mobileNumber
     *
     * @return Teacher
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
     * @return Teacher
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
     * Set registeredBy
     *
     * @param integer $registeredBy
     *
     * @return Teacher
     */
    public function setRegisteredBy($registeredBy)
    {
        $this->registeredBy = $registeredBy;

        return $this;
    }

    /**
     * Get registeredBy
     *
     * @return int
     */
    public function getRegisteredBy()
    {
        return $this->registeredBy;
    }

    /**
     * Set userName
     *
     * @param string $userName
     *
     * @return Teacher
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
     * @var integer
     */
    private $departmentId;

    /**
     * @var \AppBundle\Entity\Department
     */
    private $department;


    /**
     * Set departmentId
     *
     * @param integer $departmentId
     *
     * @return Teacher
     */
    public function setDepartmentId($departmentId)
    {
        $this->departmentId = $departmentId;

        return $this;
    }

    /**
     * Get departmentId
     *
     * @return integer
     */
    public function getDepartmentId()
    {
        return $this->departmentId;
    }

    /**
     * Set department
     *
     * @param \AppBundle\Entity\Department $department
     *
     * @return Teacher
     */
    public function setDepartment(\AppBundle\Entity\Department $department = null)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return \AppBundle\Entity\Department
     */
    public function getDepartment()
    {
        return $this->department;
    }
}
