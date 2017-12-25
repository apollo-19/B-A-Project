<?php

namespace AppBundle\Entity;

/**
 * AssessmentTypeSystem
 */
class AssessmentTypeSystem
{
    /**
     * @var int
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
     * Get id
     *
     * @return int
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
     * @var integer
     */
    private $createdBy;


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
}
