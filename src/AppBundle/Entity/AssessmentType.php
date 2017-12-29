<?php

namespace AppBundle\Entity;

/**
 * AssessmentType
 */
class AssessmentType
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $assessmentName;

    /**
     * @var integer
     */
    private $assessmentWorth;

    /**
     * @var integer
     */
    private $assessmentTypeSystemId;

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
     * @param integer $assessmentWorth
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
     * @return integer
     */
    public function getAssessmentWorth()
    {
        return $this->assessmentWorth;
    }

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
}
