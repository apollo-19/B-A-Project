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
     * @var string
     */
    private $resultValue;

    /**
     * @var integer
     */
    private $createdBy;

    /**
     * @var \AppBundle\Entity\Schoolsession
     */
    private $sessionId;

    /**
     * @var \AppBundle\Entity\Student
     */
    private $studentId;

    /**
     * @var \AppBundle\Entity\AssessmentType
     */
    private $assessmentTypeId;


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

    /**
     * Set sessionId
     *
     * @param \AppBundle\Entity\Schoolsession $sessionId
     *
     * @return AssessmentResult
     */
    public function setSessionId(\AppBundle\Entity\Schoolsession $sessionId)
    {
        $this->sessionId = $sessionId;

        return $this;
    }

    /**
     * Get sessionId
     *
     * @return \AppBundle\Entity\Schoolsession
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * Set studentId
     *
     * @param \AppBundle\Entity\Student $studentId
     *
     * @return AssessmentResult
     */
    public function setStudentId(\AppBundle\Entity\Student $studentId)
    {
        $this->studentId = $studentId;

        return $this;
    }

    /**
     * Get studentId
     *
     * @return \AppBundle\Entity\Student
     */
    public function getStudentId()
    {
        return $this->studentId;
    }

    /**
     * Set assessmentTypeId
     *
     * @param \AppBundle\Entity\AssessmentType $assessmentTypeId
     *
     * @return AssessmentResult
     */
    public function setAssessmentTypeId(\AppBundle\Entity\AssessmentType $assessmentTypeId)
    {
        $this->assessmentTypeId = $assessmentTypeId;

        return $this;
    }

    /**
     * Get assessmentTypeId
     *
     * @return \AppBundle\Entity\AssessmentType
     */
    public function getAssessmentTypeId()
    {
        return $this->assessmentTypeId;
    }
}

