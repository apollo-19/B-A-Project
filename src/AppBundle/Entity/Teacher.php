<?php

namespace AppBundle\Entity;

/**
 * Teacher
 */
class Teacher
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
     * @var integer
     */
    private $registeredBy;

    /**
     * @var string
     */
    private $userName;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $schoolsessions;

    /**
     * @var \AppBundle\Entity\Department
     */
    private $departmentId;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schoolsessions = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * @return integer
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
     * Add schoolsession
     *
     * @param \AppBundle\Entity\Schoolsession $schoolsession
     *
     * @return Teacher
     */
    public function addSchoolsession(\AppBundle\Entity\Schoolsession $schoolsession)
    {
        $this->schoolsessions[] = $schoolsession;

        return $this;
    }

    /**
     * Remove schoolsession
     *
     * @param \AppBundle\Entity\Schoolsession $schoolsession
     */
    public function removeSchoolsession(\AppBundle\Entity\Schoolsession $schoolsession)
    {
        $this->schoolsessions->removeElement($schoolsession);
    }

    /**
     * Get schoolsessions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSchoolsessions()
    {
        return $this->schoolsessions;
    }

    /**
     * Set departmentId
     *
     * @param \AppBundle\Entity\Department $departmentId
     *
     * @return Teacher
     */
    public function setDepartmentId(\AppBundle\Entity\Department $departmentId)
    {
        $this->departmentId = $departmentId;

        return $this;
    }

    /**
     * Get departmentId
     *
     * @return \AppBundle\Entity\Department
     */
    public function getDepartmentId()
    {
        return $this->departmentId;
    }
}

