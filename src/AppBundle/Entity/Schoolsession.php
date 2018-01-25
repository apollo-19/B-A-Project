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
    private $courseModuleType;

    /**
     * @var string
     */
    private $sessionStartDate;

    /**
     * @var string
     */
    private $sessionEndDate;

    /**
     * @var string
     */
    private $sessionResultDeadline;

    /**
     * @var string
     */
    private $sessionRemark;

    /**
     * @var integer
     */
    private $createdBy;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $sessionresult;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $sessionadd;

    /**
     * @var \AppBundle\Entity\Section
     */
    private $sectionId;

    /**
     * @var \AppBundle\Entity\Teacher
     */
    private $teacherId;

    /**
     * @var \AppBundle\Entity\Course
     */
    private $courseId;

    /**
     * @var \AppBundle\Entity\Module
     */
    private $moduleId;

    /**
     * @var \AppBundle\Entity\AssessmentTypeSystem
     */
    private $assessmentTypeSystemId;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sessionresult = new \Doctrine\Common\Collections\ArrayCollection();
        $this->sessionadd = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set sessionResultDeadline
     *
     * @param string $sessionResultDeadline
     *
     * @return Schoolsession
     */
    public function setSessionResultDeadline($sessionResultDeadline)
    {
        $this->sessionResultDeadline = $sessionResultDeadline;

        return $this;
    }

    /**
     * Get sessionResultDeadline
     *
     * @return string
     */
    public function getSessionResultDeadline()
    {
        return $this->sessionResultDeadline;
    }

    /**
     * Set sessionRemark
     *
     * @param string $sessionRemark
     *
     * @return Schoolsession
     */
    public function setSessionRemark($sessionRemark)
    {
        $this->sessionRemark = $sessionRemark;

        return $this;
    }

    /**
     * Get sessionRemark
     *
     * @return string
     */
    public function getSessionRemark()
    {
        return $this->sessionRemark;
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
     * Add sessionresult
     *
     * @param \AppBundle\Entity\SessionResult $sessionresult
     *
     * @return Schoolsession
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
     * Add sessionadd
     *
     * @param \AppBundle\Entity\SessionResultAdd $sessionadd
     *
     * @return Schoolsession
     */
    public function addSessionadd(\AppBundle\Entity\SessionResultAdd $sessionadd)
    {
        $this->sessionadd[] = $sessionadd;

        return $this;
    }

    /**
     * Remove sessionadd
     *
     * @param \AppBundle\Entity\SessionResultAdd $sessionadd
     */
    public function removeSessionadd(\AppBundle\Entity\SessionResultAdd $sessionadd)
    {
        $this->sessionadd->removeElement($sessionadd);
    }

    /**
     * Get sessionadd
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSessionadd()
    {
        return $this->sessionadd;
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
