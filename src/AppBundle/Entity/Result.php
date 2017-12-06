<?php

namespace AppBundle\Entity;

/**
 * Result
 */
class Result
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $sessionId;

    /**
     * @var int
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
     * @var integer
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
     * Set sessionId
     *
     * @param integer $sessionId
     *
     * @return Result
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;

        return $this;
    }

    /**
     * Get sessionId
     *
     * @return int
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
     * @return Result
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
     * Set resultInNumber
     *
     * @param string $resultInNumber
     *
     * @return Result
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
     * @return Result
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
     * Set createdBy
     *
     * @param integer $createdBy
     *
     * @return Result
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
