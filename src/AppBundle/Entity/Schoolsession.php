<?php

namespace AppBundle\Entity;

/**
 * Schoolsession
 */
class Schoolsession
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $sessionCode;

    /**
     * @var string
     */
    private $sessionName;

    /**
     * @var integer
     */
    private $sectionId;

    /**
     * @var integer
     */
    private $teacherId;

    /**
     * @var string
     */
    private $courseModuleType;

    /**
     * @var integer
     */
    private $courseModuleId;

    /**
     * @var string
     */
    private $sessionStartDate;

    /**
     * @var string
     */
    private $sessionEndDate;

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
     * Set sessionCode
     *
     * @param string $sessionCode
     *
     * @return Schoolsession
     */
    public function setSessionCode($sessionCode)
    {
        $this->sessionCode = $sessionCode;

        return $this;
    }

    /**
     * Get sessionCode
     *
     * @return string
     */
    public function getSessionCode()
    {
        return $this->sessionCode;
    }

    /**
     * Set sessionName
     *
     * @param string $sessionName
     *
     * @return Schoolsession
     */
    public function setSessionName($sessionName)
    {
        $this->sessionName = $sessionName;

        return $this;
    }

    /**
     * Get sessionName
     *
     * @return string
     */
    public function getSessionName()
    {
        return $this->sessionName;
    }

    /**
     * Set sectionId
     *
     * @param integer $sectionId
     *
     * @return Schoolsession
     */
    public function setSectionId($sectionId)
    {
        $this->sectionId = $sectionId;

        return $this;
    }

    /**
     * Get sectionId
     *
     * @return integer
     */
    public function getSectionId()
    {
        return $this->sectionId;
    }

    /**
     * Set teacherId
     *
     * @param integer $teacherId
     *
     * @return Schoolsession
     */
    public function setTeacherId($teacherId)
    {
        $this->teacherId = $teacherId;

        return $this;
    }

    /**
     * Get teacherId
     *
     * @return integer
     */
    public function getTeacherId()
    {
        return $this->teacherId;
    }

    /**
     * Set courseModuleType
     *
     * @param string $courseModuleType
     *
     * @return Schoolsession
     */
    public function setCourseModuleType($courseModuleType)
    {
        $this->courseModuleType = $courseModuleType;

        return $this;
    }

    /**
     * Get courseModuleType
     *
     * @return string
     */
    public function getCourseModuleType()
    {
        return $this->courseModuleType;
    }

    /**
     * Set courseModuleId
     *
     * @param integer $courseModuleId
     *
     * @return Schoolsession
     */
    public function setCourseModuleId($courseModuleId)
    {
        $this->courseModuleId = $courseModuleId;

        return $this;
    }

    /**
     * Get courseModuleId
     *
     * @return integer
     */
    public function getCourseModuleId()
    {
        return $this->courseModuleId;
    }

    /**
     * Set sessionStartDate
     *
     * @param string $sessionStartDate
     *
     * @return Schoolsession
     */
    public function setSessionStartDate($sessionStartDate)
    {
        $this->sessionStartDate = $sessionStartDate;

        return $this;
    }

    /**
     * Get sessionStartDate
     *
     * @return string
     */
    public function getSessionStartDate()
    {
        return $this->sessionStartDate;
    }

    /**
     * Set sessionEndDate
     *
     * @param string $sessionEndDate
     *
     * @return Schoolsession
     */
    public function setSessionEndDate($sessionEndDate)
    {
        $this->sessionEndDate = $sessionEndDate;

        return $this;
    }

    /**
     * Get sessionEndDate
     *
     * @return string
     */
    public function getSessionEndDate()
    {
        return $this->sessionEndDate;
    }

    /**
     * Set createdBy
     *
     * @param integer $createdBy
     *
     * @return Schoolsession
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
    /**
     * @var integer
     */
    private $gradeSystemId;


    /**
     * Set gradeSystemId
     *
     * @param integer $gradeSystemId
     *
     * @return Schoolsession
     */
    public function setGradeSystemId($gradeSystemId)
    {
        $this->gradeSystemId = $gradeSystemId;

        return $this;
    }

    /**
     * Get gradeSystemId
     *
     * @return integer
     */
    public function getGradeSystemId()
    {
        return $this->gradeSystemId;
    }
}
