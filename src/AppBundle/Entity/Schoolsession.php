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
     * @var string
     */
    private $courseModuleType;

    /**
     * @var \AppBundle\Entity\Section
     */
    private $sectionId;

    /**
     * @var \AppBundle\Entity\Teacher
     */
    private $techerId;

    /**
     * @var \AppBundle\Entity\Course
     */
    private $courseId;

    /**
     * @var \AppBundle\Entity\Module
     */
    private $moduleId;


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
     * Set sectionId
     *
     * @param \AppBundle\Entity\Section $sectionId
     *
     * @return Schoolsession
     */
    public function setSectionId(\AppBundle\Entity\Section $sectionId)
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
     * Set techerId
     *
     * @param \AppBundle\Entity\Teacher $techerId
     *
     * @return Schoolsession
     */
    public function setTecherId(\AppBundle\Entity\Teacher $techerId)
    {
        $this->techerId = $techerId;

        return $this;
    }

    /**
     * Get techerId
     *
     * @return \AppBundle\Entity\Teacher
     */
    public function getTecherId()
    {
        return $this->techerId;
    }

    /**
     * Set courseId
     *
     * @param \AppBundle\Entity\Course $courseId
     *
     * @return Schoolsession
     */
    public function setCourseId(\AppBundle\Entity\Course $courseId = null)
    {
        $this->courseId = $courseId;

        return $this;
    }

    /**
     * Get courseId
     *
     * @return \AppBundle\Entity\Course
     */
    public function getCourseId()
    {
        return $this->courseId;
    }

    /**
     * Set moduleId
     *
     * @param \AppBundle\Entity\Module $moduleId
     *
     * @return Schoolsession
     */
    public function setModuleId(\AppBundle\Entity\Module $moduleId = null)
    {
        $this->moduleId = $moduleId;

        return $this;
    }

    /**
     * Get moduleId
     *
     * @return \AppBundle\Entity\Module
     */
    public function getModuleId()
    {
        return $this->moduleId;
    }
    /**
     * @var \AppBundle\Entity\Teacher
     */
    private $teacherId;


    /**
     * Set teacherId
     *
     * @param \AppBundle\Entity\Teacher $teacherId
     *
     * @return Schoolsession
     */
    public function setTeacherId(\AppBundle\Entity\Teacher $teacherId)
    {
        $this->teacherId = $teacherId;

        return $this;
    }

    /**
     * Get teacherId
     *
     * @return \AppBundle\Entity\Teacher
     */
    public function getTeacherId()
    {
        return $this->teacherId;
    }
    /**
     * @var \AppBundle\Entity\AssessmentTypeSystem
     */
    private $assessmentTypeSystemId;


    /**
     * Set assessmentTypeSystemId
     *
     * @param \AppBundle\Entity\AssessmentTypeSystem $assessmentTypeSystemId
     *
     * @return Schoolsession
     */
    public function setAssessmentTypeSystemId(\AppBundle\Entity\AssessmentTypeSystem $assessmentTypeSystemId)
    {
        $this->assessmentTypeSystemId = $assessmentTypeSystemId;

        return $this;
    }

    /**
     * Get assessmentTypeSystemId
     *
     * @return \AppBundle\Entity\AssessmentTypeSystem
     */
    public function getAssessmentTypeSystemId()
    {
        return $this->assessmentTypeSystemId;
    }
}
