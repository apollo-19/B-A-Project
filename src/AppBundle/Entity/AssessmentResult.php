<?php

namespace AppBundle\Entity;

/**
 * AssessmentResult
 */
class AssessmentResult
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $assessmentTypeId;

    /**
     * @var integer
     */
    private $sessionId;

    /**
     * @var integer
     */
    private $studentId;

    /**
     * @var string
     */
    private $resultValue;

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
     * Set assessmentTypeId
     *
     * @param integer $assessmentTypeId
     *
     * @return AssessmentResult
     */
    public function setAssessmentTypeId($assessmentTypeId)
    {
        $this->assessmentTypeId = $assessmentTypeId;

        return $this;
    }

    /**
     * Get assessmentTypeId
     *
     * @return integer
     */
    public function getAssessmentTypeId()
    {
        return $this->assessmentTypeId;
    }

    /**
     * Set sessionId
     *
     * @param integer $sessionId
     *
     * @return AssessmentResult
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;

        return $this;
    }

    /**
     * Get sessionId
     *
     * @return integer
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * Set studentId
     *
     * @param integer $studentId
     *
     * @return AssessmentResult
     */
    public function setStudentId($studentId)
    {
        $this->studentId = $studentId;

        return $this;
    }

    /**
     * Get studentId
     *
     * @return integer
     */
    public function getStudentId()
    {
        return $this->studentId;
    }

    /**
     * Set resultValue
     *
     * @param string $resultValue
     *
     * @return AssessmentResult
     */
    public function setResultValue($resultValue)
    {
        $this->resultValue = $resultValue;

        return $this;
    }

    /**
     * Get resultValue
     *
     * @return string
     */
    public function getResultValue()
    {
        return $this->resultValue;
    }

    /**
     * Set createdBy
     *
     * @param integer $createdBy
     *
     * @return AssessmentResult
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
