<?php

namespace AppBundle\Entity;

/**
 * School
 */
class School
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $schoolCode;

    /**
     * @var string
     */
    private $schoolName;

    /**
     * @var int
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
     * Set schoolCode
     *
     * @param string $schoolCode
     *
     * @return School
     */
    public function setSchoolCode($schoolCode)
    {
        $this->schoolCode = $schoolCode;

        return $this;
    }

    /**
     * Get schoolCode
     *
     * @return string
     */
    public function getSchoolCode()
    {
        return $this->schoolCode;
    }

    /**
     * Set schoolName
     *
     * @param string $schoolName
     *
     * @return School
     */
    public function setSchoolName($schoolName)
    {
        $this->schoolName = $schoolName;

        return $this;
    }

    /**
     * Get schoolName
     *
     * @return string
     */
    public function getSchoolName()
    {
        return $this->schoolName;
    }

    /**
     * Set createdBy
     *
     * @param integer $createdBy
     *
     * @return School
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return int
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }
}
