<?php

namespace AppBundle\Entity;

/**
 * Student
 */
class Student
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $admissionNumber;

    /**
     * @var string
     */
    private $firstNameEn;

    /**
     * @var string
     */
    private $middleNameEn;

    /**
     * @var string
     */
    private $lastNameEn;

    /**
     * @var string
     */
    private $firstNameAm;

    /**
     * @var string
     */
    private $middleNameAm;

    /**
     * @var string
     */
    private $lastNameAm;

    /**
     * @var string
     */
    private $sex;

    /**
     * @var string
     */
    private $nationality;

    /**
     * @var string
     */
    private $placeOfBirthTown;

    /**
     * @var string
     */
    private $placeOfBirthRegion;

    /**
     * @var string
     */
    private $dateOfBirthGc;

    /**
     * @var string
     */
    private $dateOfBirthEc;

    /**
     * @var string
     */
    private $houseNumber;

    /**
     * @var integer
     */
    private $kebele;

    /**
     * @var string
     */
    private $woredaSubcity;

    /**
     * @var string
     */
    private $town;

    /**
     * @var string
     */
    private $zone;

    /**
     * @var string
     */
    private $region;

    /**
     * @var string
     */
    private $poBox;

    /**
     * @var string
     */
    private $telephoneHome;

    /**
     * @var string
     */
    private $telephoneMobile;

    /**
     * @var string
     */
    private $emailAddress;

    /**
     * @var string
     */
    private $nativeLanguage;

    /**
     * @var string
     */
    private $maritalStatus;

    /**
     * @var string
     */
    private $pceFullName;

    /**
     * @var string
     */
    private $pceRelationship;

    /**
     * @var string
     */
    private $pceOther;

    /**
     * @var string
     */
    private $pceTelephoneHome;

    /**
     * @var string
     */
    private $pceTelephoneOffice;

    /**
     * @var string
     */
    private $pceHouseNumber;

    /**
     * @var integer
     */
    private $pceKebele;

    /**
     * @var string
     */
    private $pceWoredaSubcity;

    /**
     * @var string
     */
    private $pceTown;

    /**
     * @var string
     */
    private $pceZone;

    /**
     * @var string
     */
    private $pceRegion;

    /**
     * @var string
     */
    private $fatherFullName;

    /**
     * @var string
     */
    private $fatherOccupation;

    /**
     * @var string
     */
    private $fatherEducationalLevel;

    /**
     * @var string
     */
    private $fatherTelephoneHome;

    /**
     * @var string
     */
    private $fatherTelephoneOffice;

    /**
     * @var string
     */
    private $fatherHouseNumber;

    /**
     * @var integer
     */
    private $fatherKebele;

    /**
     * @var string
     */
    private $fatherWoredaSubcity;

    /**
     * @var string
     */
    private $fatherTown;

    /**
     * @var string
     */
    private $fatherZone;

    /**
     * @var string
     */
    private $fatherRegion;

    /**
     * @var string
     */
    private $motherFullName;

    /**
     * @var string
     */
    private $motherOccupation;

    /**
     * @var string
     */
    private $motherEducationalLevel;

    /**
     * @var string
     */
    private $motherTelephoneHome;

    /**
     * @var string
     */
    private $motherTelephoneOffice;

    /**
     * @var string
     */
    private $motherHouseNumber;

    /**
     * @var integer
     */
    private $motherKebele;

    /**
     * @var string
     */
    private $motherWoredaSubcity;

    /**
     * @var string
     */
    private $motherTown;

    /**
     * @var string
     */
    private $motherZone;

    /**
     * @var string
     */
    private $motherRegion;

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
    private $sessionresult;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $assessmentResults;

    /**
     * @var \AppBundle\Entity\Section
     */
    private $sectionId;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sessionresult = new \Doctrine\Common\Collections\ArrayCollection();
        $this->assessmentResults = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set admissionNumber
     *
     * @param string $admissionNumber
     *
     * @return Student
     */
    public function setAdmissionNumber($admissionNumber)
    {
        $this->admissionNumber = $admissionNumber;

        return $this;
    }

    /**
     * Get admissionNumber
     *
     * @return string
     */
    public function getAdmissionNumber()
    {
        return $this->admissionNumber;
    }

    /**
     * Set firstNameEn
     *
     * @param string $firstNameEn
     *
     * @return Student
     */
    public function setFirstNameEn($firstNameEn)
    {
        $this->firstNameEn = $firstNameEn;

        return $this;
    }

    /**
     * Get firstNameEn
     *
     * @return string
     */
    public function getFirstNameEn()
    {
        return $this->firstNameEn;
    }

    /**
     * Set middleNameEn
     *
     * @param string $middleNameEn
     *
     * @return Student
     */
    public function setMiddleNameEn($middleNameEn)
    {
        $this->middleNameEn = $middleNameEn;

        return $this;
    }

    /**
     * Get middleNameEn
     *
     * @return string
     */
    public function getMiddleNameEn()
    {
        return $this->middleNameEn;
    }

    /**
     * Set lastNameEn
     *
     * @param string $lastNameEn
     *
     * @return Student
     */
    public function setLastNameEn($lastNameEn)
    {
        $this->lastNameEn = $lastNameEn;

        return $this;
    }

    /**
     * Get lastNameEn
     *
     * @return string
     */
    public function getLastNameEn()
    {
        return $this->lastNameEn;
    }

    /**
     * Set firstNameAm
     *
     * @param string $firstNameAm
     *
     * @return Student
     */
    public function setFirstNameAm($firstNameAm)
    {
        $this->firstNameAm = $firstNameAm;

        return $this;
    }

    /**
     * Get firstNameAm
     *
     * @return string
     */
    public function getFirstNameAm()
    {
        return $this->firstNameAm;
    }

    /**
     * Set middleNameAm
     *
     * @param string $middleNameAm
     *
     * @return Student
     */
    public function setMiddleNameAm($middleNameAm)
    {
        $this->middleNameAm = $middleNameAm;

        return $this;
    }

    /**
     * Get middleNameAm
     *
     * @return string
     */
    public function getMiddleNameAm()
    {
        return $this->middleNameAm;
    }

    /**
     * Set lastNameAm
     *
     * @param string $lastNameAm
     *
     * @return Student
     */
    public function setLastNameAm($lastNameAm)
    {
        $this->lastNameAm = $lastNameAm;

        return $this;
    }

    /**
     * Get lastNameAm
     *
     * @return string
     */
    public function getLastNameAm()
    {
        return $this->lastNameAm;
    }

    /**
     * Set sex
     *
     * @param string $sex
     *
     * @return Student
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
     * Set nationality
     *
     * @param string $nationality
     *
     * @return Student
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Get nationality
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Set placeOfBirthTown
     *
     * @param string $placeOfBirthTown
     *
     * @return Student
     */
    public function setPlaceOfBirthTown($placeOfBirthTown)
    {
        $this->placeOfBirthTown = $placeOfBirthTown;

        return $this;
    }

    /**
     * Get placeOfBirthTown
     *
     * @return string
     */
    public function getPlaceOfBirthTown()
    {
        return $this->placeOfBirthTown;
    }

    /**
     * Set placeOfBirthRegion
     *
     * @param string $placeOfBirthRegion
     *
     * @return Student
     */
    public function setPlaceOfBirthRegion($placeOfBirthRegion)
    {
        $this->placeOfBirthRegion = $placeOfBirthRegion;

        return $this;
    }

    /**
     * Get placeOfBirthRegion
     *
     * @return string
     */
    public function getPlaceOfBirthRegion()
    {
        return $this->placeOfBirthRegion;
    }

    /**
     * Set dateOfBirthGc
     *
     * @param string $dateOfBirthGc
     *
     * @return Student
     */
    public function setDateOfBirthGc($dateOfBirthGc)
    {
        $this->dateOfBirthGc = $dateOfBirthGc;

        return $this;
    }

    /**
     * Get dateOfBirthGc
     *
     * @return string
     */
    public function getDateOfBirthGc()
    {
        return $this->dateOfBirthGc;
    }

    /**
     * Set dateOfBirthEc
     *
     * @param string $dateOfBirthEc
     *
     * @return Student
     */
    public function setDateOfBirthEc($dateOfBirthEc)
    {
        $this->dateOfBirthEc = $dateOfBirthEc;

        return $this;
    }

    /**
     * Get dateOfBirthEc
     *
     * @return string
     */
    public function getDateOfBirthEc()
    {
        return $this->dateOfBirthEc;
    }

    /**
     * Set houseNumber
     *
     * @param string $houseNumber
     *
     * @return Student
     */
    public function setHouseNumber($houseNumber)
    {
        $this->houseNumber = $houseNumber;

        return $this;
    }

    /**
     * Get houseNumber
     *
     * @return string
     */
    public function getHouseNumber()
    {
        return $this->houseNumber;
    }

    /**
     * Set kebele
     *
     * @param integer $kebele
     *
     * @return Student
     */
    public function setKebele($kebele)
    {
        $this->kebele = $kebele;

        return $this;
    }

    /**
     * Get kebele
     *
     * @return integer
     */
    public function getKebele()
    {
        return $this->kebele;
    }

    /**
     * Set woredaSubcity
     *
     * @param string $woredaSubcity
     *
     * @return Student
     */
    public function setWoredaSubcity($woredaSubcity)
    {
        $this->woredaSubcity = $woredaSubcity;

        return $this;
    }

    /**
     * Get woredaSubcity
     *
     * @return string
     */
    public function getWoredaSubcity()
    {
        return $this->woredaSubcity;
    }

    /**
     * Set town
     *
     * @param string $town
     *
     * @return Student
     */
    public function setTown($town)
    {
        $this->town = $town;

        return $this;
    }

    /**
     * Get town
     *
     * @return string
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * Set zone
     *
     * @param string $zone
     *
     * @return Student
     */
    public function setZone($zone)
    {
        $this->zone = $zone;

        return $this;
    }

    /**
     * Get zone
     *
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Set region
     *
     * @param string $region
     *
     * @return Student
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set poBox
     *
     * @param string $poBox
     *
     * @return Student
     */
    public function setPoBox($poBox)
    {
        $this->poBox = $poBox;

        return $this;
    }

    /**
     * Get poBox
     *
     * @return string
     */
    public function getPoBox()
    {
        return $this->poBox;
    }

    /**
     * Set telephoneHome
     *
     * @param string $telephoneHome
     *
     * @return Student
     */
    public function setTelephoneHome($telephoneHome)
    {
        $this->telephoneHome = $telephoneHome;

        return $this;
    }

    /**
     * Get telephoneHome
     *
     * @return string
     */
    public function getTelephoneHome()
    {
        return $this->telephoneHome;
    }

    /**
     * Set telephoneMobile
     *
     * @param string $telephoneMobile
     *
     * @return Student
     */
    public function setTelephoneMobile($telephoneMobile)
    {
        $this->telephoneMobile = $telephoneMobile;

        return $this;
    }

    /**
     * Get telephoneMobile
     *
     * @return string
     */
    public function getTelephoneMobile()
    {
        return $this->telephoneMobile;
    }

    /**
     * Set emailAddress
     *
     * @param string $emailAddress
     *
     * @return Student
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
     * Set nativeLanguage
     *
     * @param string $nativeLanguage
     *
     * @return Student
     */
    public function setNativeLanguage($nativeLanguage)
    {
        $this->nativeLanguage = $nativeLanguage;

        return $this;
    }

    /**
     * Get nativeLanguage
     *
     * @return string
     */
    public function getNativeLanguage()
    {
        return $this->nativeLanguage;
    }

    /**
     * Set maritalStatus
     *
     * @param string $maritalStatus
     *
     * @return Student
     */
    public function setMaritalStatus($maritalStatus)
    {
        $this->maritalStatus = $maritalStatus;

        return $this;
    }

    /**
     * Get maritalStatus
     *
     * @return string
     */
    public function getMaritalStatus()
    {
        return $this->maritalStatus;
    }

    /**
     * Set pceFullName
     *
     * @param string $pceFullName
     *
     * @return Student
     */
    public function setPceFullName($pceFullName)
    {
        $this->pceFullName = $pceFullName;

        return $this;
    }

    /**
     * Get pceFullName
     *
     * @return string
     */
    public function getPceFullName()
    {
        return $this->pceFullName;
    }

    /**
     * Set pceRelationship
     *
     * @param string $pceRelationship
     *
     * @return Student
     */
    public function setPceRelationship($pceRelationship)
    {
        $this->pceRelationship = $pceRelationship;

        return $this;
    }

    /**
     * Get pceRelationship
     *
     * @return string
     */
    public function getPceRelationship()
    {
        return $this->pceRelationship;
    }

    /**
     * Set pceOther
     *
     * @param string $pceOther
     *
     * @return Student
     */
    public function setPceOther($pceOther)
    {
        $this->pceOther = $pceOther;

        return $this;
    }

    /**
     * Get pceOther
     *
     * @return string
     */
    public function getPceOther()
    {
        return $this->pceOther;
    }

    /**
     * Set pceTelephoneHome
     *
     * @param string $pceTelephoneHome
     *
     * @return Student
     */
    public function setPceTelephoneHome($pceTelephoneHome)
    {
        $this->pceTelephoneHome = $pceTelephoneHome;

        return $this;
    }

    /**
     * Get pceTelephoneHome
     *
     * @return string
     */
    public function getPceTelephoneHome()
    {
        return $this->pceTelephoneHome;
    }

    /**
     * Set pceTelephoneOffice
     *
     * @param string $pceTelephoneOffice
     *
     * @return Student
     */
    public function setPceTelephoneOffice($pceTelephoneOffice)
    {
        $this->pceTelephoneOffice = $pceTelephoneOffice;

        return $this;
    }

    /**
     * Get pceTelephoneOffice
     *
     * @return string
     */
    public function getPceTelephoneOffice()
    {
        return $this->pceTelephoneOffice;
    }

    /**
     * Set pceHouseNumber
     *
     * @param string $pceHouseNumber
     *
     * @return Student
     */
    public function setPceHouseNumber($pceHouseNumber)
    {
        $this->pceHouseNumber = $pceHouseNumber;

        return $this;
    }

    /**
     * Get pceHouseNumber
     *
     * @return string
     */
    public function getPceHouseNumber()
    {
        return $this->pceHouseNumber;
    }

    /**
     * Set pceKebele
     *
     * @param integer $pceKebele
     *
     * @return Student
     */
    public function setPceKebele($pceKebele)
    {
        $this->pceKebele = $pceKebele;

        return $this;
    }

    /**
     * Get pceKebele
     *
     * @return integer
     */
    public function getPceKebele()
    {
        return $this->pceKebele;
    }

    /**
     * Set pceWoredaSubcity
     *
     * @param string $pceWoredaSubcity
     *
     * @return Student
     */
    public function setPceWoredaSubcity($pceWoredaSubcity)
    {
        $this->pceWoredaSubcity = $pceWoredaSubcity;

        return $this;
    }

    /**
     * Get pceWoredaSubcity
     *
     * @return string
     */
    public function getPceWoredaSubcity()
    {
        return $this->pceWoredaSubcity;
    }

    /**
     * Set pceTown
     *
     * @param string $pceTown
     *
     * @return Student
     */
    public function setPceTown($pceTown)
    {
        $this->pceTown = $pceTown;

        return $this;
    }

    /**
     * Get pceTown
     *
     * @return string
     */
    public function getPceTown()
    {
        return $this->pceTown;
    }

    /**
     * Set pceZone
     *
     * @param string $pceZone
     *
     * @return Student
     */
    public function setPceZone($pceZone)
    {
        $this->pceZone = $pceZone;

        return $this;
    }

    /**
     * Get pceZone
     *
     * @return string
     */
    public function getPceZone()
    {
        return $this->pceZone;
    }

    /**
     * Set pceRegion
     *
     * @param string $pceRegion
     *
     * @return Student
     */
    public function setPceRegion($pceRegion)
    {
        $this->pceRegion = $pceRegion;

        return $this;
    }

    /**
     * Get pceRegion
     *
     * @return string
     */
    public function getPceRegion()
    {
        return $this->pceRegion;
    }

    /**
     * Set fatherFullName
     *
     * @param string $fatherFullName
     *
     * @return Student
     */
    public function setFatherFullName($fatherFullName)
    {
        $this->fatherFullName = $fatherFullName;

        return $this;
    }

    /**
     * Get fatherFullName
     *
     * @return string
     */
    public function getFatherFullName()
    {
        return $this->fatherFullName;
    }

    /**
     * Set fatherOccupation
     *
     * @param string $fatherOccupation
     *
     * @return Student
     */
    public function setFatherOccupation($fatherOccupation)
    {
        $this->fatherOccupation = $fatherOccupation;

        return $this;
    }

    /**
     * Get fatherOccupation
     *
     * @return string
     */
    public function getFatherOccupation()
    {
        return $this->fatherOccupation;
    }

    /**
     * Set fatherEducationalLevel
     *
     * @param string $fatherEducationalLevel
     *
     * @return Student
     */
    public function setFatherEducationalLevel($fatherEducationalLevel)
    {
        $this->fatherEducationalLevel = $fatherEducationalLevel;

        return $this;
    }

    /**
     * Get fatherEducationalLevel
     *
     * @return string
     */
    public function getFatherEducationalLevel()
    {
        return $this->fatherEducationalLevel;
    }

    /**
     * Set fatherTelephoneHome
     *
     * @param string $fatherTelephoneHome
     *
     * @return Student
     */
    public function setFatherTelephoneHome($fatherTelephoneHome)
    {
        $this->fatherTelephoneHome = $fatherTelephoneHome;

        return $this;
    }

    /**
     * Get fatherTelephoneHome
     *
     * @return string
     */
    public function getFatherTelephoneHome()
    {
        return $this->fatherTelephoneHome;
    }

    /**
     * Set fatherTelephoneOffice
     *
     * @param string $fatherTelephoneOffice
     *
     * @return Student
     */
    public function setFatherTelephoneOffice($fatherTelephoneOffice)
    {
        $this->fatherTelephoneOffice = $fatherTelephoneOffice;

        return $this;
    }

    /**
     * Get fatherTelephoneOffice
     *
     * @return string
     */
    public function getFatherTelephoneOffice()
    {
        return $this->fatherTelephoneOffice;
    }

    /**
     * Set fatherHouseNumber
     *
     * @param string $fatherHouseNumber
     *
     * @return Student
     */
    public function setFatherHouseNumber($fatherHouseNumber)
    {
        $this->fatherHouseNumber = $fatherHouseNumber;

        return $this;
    }

    /**
     * Get fatherHouseNumber
     *
     * @return string
     */
    public function getFatherHouseNumber()
    {
        return $this->fatherHouseNumber;
    }

    /**
     * Set fatherKebele
     *
     * @param integer $fatherKebele
     *
     * @return Student
     */
    public function setFatherKebele($fatherKebele)
    {
        $this->fatherKebele = $fatherKebele;

        return $this;
    }

    /**
     * Get fatherKebele
     *
     * @return integer
     */
    public function getFatherKebele()
    {
        return $this->fatherKebele;
    }

    /**
     * Set fatherWoredaSubcity
     *
     * @param string $fatherWoredaSubcity
     *
     * @return Student
     */
    public function setFatherWoredaSubcity($fatherWoredaSubcity)
    {
        $this->fatherWoredaSubcity = $fatherWoredaSubcity;

        return $this;
    }

    /**
     * Get fatherWoredaSubcity
     *
     * @return string
     */
    public function getFatherWoredaSubcity()
    {
        return $this->fatherWoredaSubcity;
    }

    /**
     * Set fatherTown
     *
     * @param string $fatherTown
     *
     * @return Student
     */
    public function setFatherTown($fatherTown)
    {
        $this->fatherTown = $fatherTown;

        return $this;
    }

    /**
     * Get fatherTown
     *
     * @return string
     */
    public function getFatherTown()
    {
        return $this->fatherTown;
    }

    /**
     * Set fatherZone
     *
     * @param string $fatherZone
     *
     * @return Student
     */
    public function setFatherZone($fatherZone)
    {
        $this->fatherZone = $fatherZone;

        return $this;
    }

    /**
     * Get fatherZone
     *
     * @return string
     */
    public function getFatherZone()
    {
        return $this->fatherZone;
    }

    /**
     * Set fatherRegion
     *
     * @param string $fatherRegion
     *
     * @return Student
     */
    public function setFatherRegion($fatherRegion)
    {
        $this->fatherRegion = $fatherRegion;

        return $this;
    }

    /**
     * Get fatherRegion
     *
     * @return string
     */
    public function getFatherRegion()
    {
        return $this->fatherRegion;
    }

    /**
     * Set motherFullName
     *
     * @param string $motherFullName
     *
     * @return Student
     */
    public function setMotherFullName($motherFullName)
    {
        $this->motherFullName = $motherFullName;

        return $this;
    }

    /**
     * Get motherFullName
     *
     * @return string
     */
    public function getMotherFullName()
    {
        return $this->motherFullName;
    }

    /**
     * Set motherOccupation
     *
     * @param string $motherOccupation
     *
     * @return Student
     */
    public function setMotherOccupation($motherOccupation)
    {
        $this->motherOccupation = $motherOccupation;

        return $this;
    }

    /**
     * Get motherOccupation
     *
     * @return string
     */
    public function getMotherOccupation()
    {
        return $this->motherOccupation;
    }

    /**
     * Set motherEducationalLevel
     *
     * @param string $motherEducationalLevel
     *
     * @return Student
     */
    public function setMotherEducationalLevel($motherEducationalLevel)
    {
        $this->motherEducationalLevel = $motherEducationalLevel;

        return $this;
    }

    /**
     * Get motherEducationalLevel
     *
     * @return string
     */
    public function getMotherEducationalLevel()
    {
        return $this->motherEducationalLevel;
    }

    /**
     * Set motherTelephoneHome
     *
     * @param string $motherTelephoneHome
     *
     * @return Student
     */
    public function setMotherTelephoneHome($motherTelephoneHome)
    {
        $this->motherTelephoneHome = $motherTelephoneHome;

        return $this;
    }

    /**
     * Get motherTelephoneHome
     *
     * @return string
     */
    public function getMotherTelephoneHome()
    {
        return $this->motherTelephoneHome;
    }

    /**
     * Set motherTelephoneOffice
     *
     * @param string $motherTelephoneOffice
     *
     * @return Student
     */
    public function setMotherTelephoneOffice($motherTelephoneOffice)
    {
        $this->motherTelephoneOffice = $motherTelephoneOffice;

        return $this;
    }

    /**
     * Get motherTelephoneOffice
     *
     * @return string
     */
    public function getMotherTelephoneOffice()
    {
        return $this->motherTelephoneOffice;
    }

    /**
     * Set motherHouseNumber
     *
     * @param string $motherHouseNumber
     *
     * @return Student
     */
    public function setMotherHouseNumber($motherHouseNumber)
    {
        $this->motherHouseNumber = $motherHouseNumber;

        return $this;
    }

    /**
     * Get motherHouseNumber
     *
     * @return string
     */
    public function getMotherHouseNumber()
    {
        return $this->motherHouseNumber;
    }

    /**
     * Set motherKebele
     *
     * @param integer $motherKebele
     *
     * @return Student
     */
    public function setMotherKebele($motherKebele)
    {
        $this->motherKebele = $motherKebele;

        return $this;
    }

    /**
     * Get motherKebele
     *
     * @return integer
     */
    public function getMotherKebele()
    {
        return $this->motherKebele;
    }

    /**
     * Set motherWoredaSubcity
     *
     * @param string $motherWoredaSubcity
     *
     * @return Student
     */
    public function setMotherWoredaSubcity($motherWoredaSubcity)
    {
        $this->motherWoredaSubcity = $motherWoredaSubcity;

        return $this;
    }

    /**
     * Get motherWoredaSubcity
     *
     * @return string
     */
    public function getMotherWoredaSubcity()
    {
        return $this->motherWoredaSubcity;
    }

    /**
     * Set motherTown
     *
     * @param string $motherTown
     *
     * @return Student
     */
    public function setMotherTown($motherTown)
    {
        $this->motherTown = $motherTown;

        return $this;
    }

    /**
     * Get motherTown
     *
     * @return string
     */
    public function getMotherTown()
    {
        return $this->motherTown;
    }

    /**
     * Set motherZone
     *
     * @param string $motherZone
     *
     * @return Student
     */
    public function setMotherZone($motherZone)
    {
        $this->motherZone = $motherZone;

        return $this;
    }

    /**
     * Get motherZone
     *
     * @return string
     */
    public function getMotherZone()
    {
        return $this->motherZone;
    }

    /**
     * Set motherRegion
     *
     * @param string $motherRegion
     *
     * @return Student
     */
    public function setMotherRegion($motherRegion)
    {
        $this->motherRegion = $motherRegion;

        return $this;
    }

    /**
     * Get motherRegion
     *
     * @return string
     */
    public function getMotherRegion()
    {
        return $this->motherRegion;
    }

    /**
     * Set registeredBy
     *
     * @param integer $registeredBy
     *
     * @return Student
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
     * @return Student
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
     * Add sessionresult
     *
     * @param \AppBundle\Entity\SessionResult $sessionresult
     *
     * @return Student
     */
    public function addSessionresult(\AppBundle\Entity\SessionResult $sessionresult)
    {
        $this->sessionresult[] = $sessionresult;

        return $this;
    }

    /**
     * Remove sessionresult
     *
     * @param \AppBundle\Entity\SessionResult $sessionresult
     */
    public function removeSessionresult(\AppBundle\Entity\SessionResult $sessionresult)
    {
        $this->sessionresult->removeElement($sessionresult);
    }

    /**
     * Get sessionresult
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSessionresult()
    {
        return $this->sessionresult;
    }

    /**
     * Add assessmentResult
     *
     * @param \AppBundle\Entity\AssessmentResult $assessmentResult
     *
     * @return Student
     */
    public function addAssessmentResult(\AppBundle\Entity\AssessmentResult $assessmentResult)
    {
        $this->assessmentResults[] = $assessmentResult;

        return $this;
    }

    /**
     * Remove assessmentResult
     *
     * @param \AppBundle\Entity\AssessmentResult $assessmentResult
     */
    public function removeAssessmentResult(\AppBundle\Entity\AssessmentResult $assessmentResult)
    {
        $this->assessmentResults->removeElement($assessmentResult);
    }

    /**
     * Get assessmentResults
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAssessmentResults()
    {
        return $this->assessmentResults;
    }

    /**
     * Set sectionId
     *
     * @param \AppBundle\Entity\Section $sectionId
     *
     * @return Student
     */
    public function setSectionId(\AppBundle\Entity\Section $sectionId = null)
    {
        $this->sectionId = $sectionId;

        return $this;
    }

    /**
     * Get sectionId
     *
     * @return \AppBundle\Entity\Section
     */
    public function getSectionId()
    {
        return $this->sectionId;
    }
    /**
     * @var integer
     */
    private $studentStartYear;

    /**
     * @var integer
     */
    private $studentEndYear;


    /**
     * Set studentStartYear
     *
     * @param integer $studentStartYear
     *
     * @return Student
     */
    public function setStudentStartYear($studentStartYear)
    {
        $this->studentStartYear = $studentStartYear;

        return $this;
    }

    /**
     * Get studentStartYear
     *
     * @return integer
     */
    public function getStudentStartYear()
    {
        return $this->studentStartYear;
    }

    /**
     * Set studentEndYear
     *
     * @param integer $studentEndYear
     *
     * @return Student
     */
    public function setStudentEndYear($studentEndYear)
    {
        $this->studentEndYear = $studentEndYear;

        return $this;
    }

    /**
     * Get studentEndYear
     *
     * @return integer
     */
    public function getStudentEndYear()
    {
        return $this->studentEndYear;
    }
}
