<?php

namespace AppBundle\Entity;

/**
 * AssessmentSession
 */
class AssessmentSession
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $assessmentId;

    /**
     * @var int
     */
    private $assessmentSession;

    /**
     * @var string
     */
    private $createdBy;


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
     * Set assessmentId
     *
     * @param integer $assessmentId
     *
     * @return AssessmentSession
     */
    public function setAssessmentId($assessmentId)
    {
        $this->assessmentId = $assessmentId;

        return $this;
    }

    /**
     * Get assessmentId
     *
     * @return int
     */
    public function getAssessmentId()
    {
        return $this->assessmentId;
    }

    /**
     * Set assessmentSession
     *
     * @param integer $assessmentSession
     *
     * @return AssessmentSession
     */
    public function setAssessmentSession($assessmentSession)
    {
        $this->assessmentSession = $assessmentSession;

        return $this;
    }

    /**
     * Get assessmentSession
     *
     * @return integer
     */
    public function getAssessmentSession()
    {
        return $this->assessmentSession;
    }

    /**
     * Set createdBy
     *
     * @param string $createdBy
     *
     * @return AssessmentSession
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }
}
