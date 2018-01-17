<?php

namespace AppBundle\Entity;

/**
 * AssessmentTypeSystem
 */
class AssessmentTypeSystem
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $assessmentTypeSystemCode;

    /**
     * @var string
     */
    private $assessmentTypeSystemName;

    /**
     * @var integer
     */
    private $createdBy;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $schoolsessions;

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
     * Set assessmentTypeSystemCode
     *
     * @param string $assessmentTypeSystemCode
     *
     * @return AssessmentTypeSystem
     */
    public function setAssessmentTypeSystemCode($assessmentTypeSystemCode)
    {
        $this->assessmentTypeSystemCode = $assessmentTypeSystemCode;

        return $this;
    }

    /**
     * Get assessmentTypeSystemCode
     *
     * @return string
     */
    public function getAssessmentTypeSystemCode()
    {
        return $this->assessmentTypeSystemCode;
    }

    /**
     * Set assessmentTypeSystemName
     *
     * @param string $assessmentTypeSystemName
     *
     * @return AssessmentTypeSystem
     */
    public function setAssessmentTypeSystemName($assessmentTypeSystemName)
    {
        $this->assessmentTypeSystemName = $assessmentTypeSystemName;

        return $this;
    }

    /**
     * Get assessmentTypeSystemName
     *
     * @return string
     */
    public function getAssessmentTypeSystemName()
    {
        return $this->assessmentTypeSystemName;
    }

    /**
     * Set createdBy
     *
     * @param integer $createdBy
     *
     * @return AssessmentTypeSystem
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
     * Add schoolsession
     *
     * @param \AppBundle\Entity\Schoolsession $schoolsession
     *
     * @return AssessmentTypeSystem
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
}

