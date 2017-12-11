<?php

namespace AppBundle\Entity;

/**
 * AssessmentResult
 */
class AssessmentResult
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $assessmentSessionId;

    /**
     * @var int
     */
    private $studentId;

    /**
     * @var string
     */
    private $resultValue;


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
     * Set assessmentSessionId
     *
     * @param integer $assessmentSessionId
     *
     * @return AssessmentResult
     */
    public function setAssessmentSessionId($assessmentSessionId)
    {
        $this->assessmentSessionId = $assessmentSessionId;

        return $this;
    }

    /**
     * Get assessmentSessionId
     *
     * @return int
     */
    public function getAssessmentSessionId()
    {
        return $this->assessmentSessionId;
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
     * @return int
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
     * @var integer
     */
    private $createdBy;


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
    /**
     * @var integer
     */
    private $assessmentId;

    /**
     * @var integer
     */
    private $sessionId;


    /**
     * Set assessmentId
     *
     * @param integer $assessmentId
     *
     * @return AssessmentResult
     */
    public function setAssessmentId($assessmentId)
    {
        $this->assessmentId = $assessmentId;

        return $this;
    }

    /**
     * Get assessmentId
     *
     * @return integer
     */
    public function getAssessmentId()
    {
        return $this->assessmentId;
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
}
