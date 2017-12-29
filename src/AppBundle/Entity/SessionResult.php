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
    private $resultInNumber;

    /**
     * @var string
     */
    private $resultInAlphabet;

    /**
     * @var string
     */
    private $sessionResultRemark;

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
     * Set sessionId
     *
     * @param integer $sessionId
     *
     * @return SessionResult
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
     * @return SessionResult
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
     * @var integer
     */
    private $sessionWeight;


    /**
     * Set sessionWeight
     *
     * @param integer $sessionWeight
     *
     * @return SessionResult
     */
    public function setSessionWeight($sessionWeight)
    {
        $this->sessionWeight = $sessionWeight;

        return $this;
    }

    /**
     * Get sessionWeight
     *
     * @return integer
     */
    public function getSessionWeight()
    {
        return $this->sessionWeight;
    }
}
