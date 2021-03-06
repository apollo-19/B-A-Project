<?php

namespace AppBundle\Entity;

/**
 * SessionResult
 */
class SessionResult
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $resultInNumber;

    /**
     * @var string
     */
    private $resultInAlphabet;

    /**
     * @var string
     */
    private $resultInAlphabetValue;

    /**
     * @var string
     */
    private $sessionResultRemark;

    /**
     * @var boolean
     */
    private $sessionPublished;

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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set resultInNumber
     *
     * @param string $resultInNumber
     *
     * @return SessionResult
     */
    public function setResultInNumber($resultInNumber)
    {
        $this->resultInNumber = $resultInNumber;

        return $this;
    }

    /**
     * Get resultInNumber
     *
     * @return string
     */
    public function getResultInNumber()
    {
        return $this->resultInNumber;
    }

    /**
     * Set resultInAlphabet
     *
     * @param string $resultInAlphabet
     *
     * @return SessionResult
     */
    public function setResultInAlphabet($resultInAlphabet)
    {
        $this->resultInAlphabet = $resultInAlphabet;

        return $this;
    }

    /**
     * Get resultInAlphabet
     *
     * @return string
     */
    public function getResultInAlphabet()
    {
        return $this->resultInAlphabet;
    }

    /**
     * Set resultInAlphabetValue
     *
     * @param string $resultInAlphabetValue
     *
     * @return SessionResult
     */
    public function setResultInAlphabetValue($resultInAlphabetValue)
    {
        $this->resultInAlphabetValue = $resultInAlphabetValue;

        return $this;
    }

    /**
     * Get resultInAlphabetValue
     *
     * @return string
     */
    public function getResultInAlphabetValue()
    {
        return $this->resultInAlphabetValue;
    }

    /**
     * Set sessionResultRemark
     *
     * @param string $sessionResultRemark
     *
     * @return SessionResult
     */
    public function setSessionResultRemark($sessionResultRemark)
    {
        $this->sessionResultRemark = $sessionResultRemark;

        return $this;
    }

    /**
     * Get sessionResultRemark
     *
     * @return string
     */
    public function getSessionResultRemark()
    {
        return $this->sessionResultRemark;
    }

    /**
     * Set sessionPublished
     *
     * @param boolean $sessionPublished
     *
     * @return SessionResult
     */
    public function setSessionPublished($sessionPublished)
    {
        $this->sessionPublished = $sessionPublished;

        return $this;
    }

    /**
     * Get sessionPublished
     *
     * @return boolean
     */
    public function getSessionPublished()
    {
        return $this->sessionPublished;
    }

    /**
     * Set createdBy
     *
     * @param integer $createdBy
     *
     * @return SessionResult
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
     * @return SessionResult
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
     * @return SessionResult
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
}
