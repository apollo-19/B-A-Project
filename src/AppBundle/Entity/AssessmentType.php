<?php

namespace AppBundle\Entity;

/**
 * AssessmentType
 */
class AssessmentType
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $assessmentName;

    /**
     * @var string
     */
    private $assessmentWorth;


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
     * Set assessmentName
     *
     * @param string $assessmentName
     *
     * @return AssessmentType
     */
    public function setAssessmentName($assessmentName)
    {
        $this->assessmentName = $assessmentName;

        return $this;
    }

    /**
     * Get assessmentName
     *
     * @return string
     */
    public function getAssessmentName()
    {
        return $this->assessmentName;
    }

    /**
     * Set assessmentWorth
     *
     * @param string $assessmentWorth
     *
     * @return AssessmentType
     */
    public function setAssessmentWorth($assessmentWorth)
    {
        $this->assessmentWorth = $assessmentWorth;

        return $this;
    }

    /**
     * Get assessmentWorth
     *
     * @return string
     */
    public function getAssessmentWorth()
    {
        return $this->assessmentWorth;
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
     * @return AssessmentType
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
    private $assessmentTypeSystemId;


    /**
     * Set assessmentTypeSystemId
     *
     * @param integer $assessmentTypeSystemId
     *
     * @return AssessmentType
     */
    public function setAssessmentTypeSystemId($assessmentTypeSystemId)
    {
        $this->assessmentTypeSystemId = $assessmentTypeSystemId;

        return $this;
    }

    /**
     * Get assessmentTypeSystemId
     *
     * @return integer
     */
    public function getAssessmentTypeSystemId()
    {
        return $this->assessmentTypeSystemId;
    }
}
