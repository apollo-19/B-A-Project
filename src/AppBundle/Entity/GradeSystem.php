<?php

namespace AppBundle\Entity;

/**
 * GradeSystem
 */
class GradeSystem
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $gradeSystemCode;

    /**
     * @var string
     */
    private $gradeSystemName;

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
     * Set gradeSystemCode
     *
     * @param string $gradeSystemCode
     *
     * @return GradeSystem
     */
    public function setGradeSystemCode($gradeSystemCode)
    {
        $this->gradeSystemCode = $gradeSystemCode;

        return $this;
    }

    /**
     * Get gradeSystemCode
     *
     * @return string
     */
    public function getGradeSystemCode()
    {
        return $this->gradeSystemCode;
    }

    /**
     * Set gradeSystemName
     *
     * @param string $gradeSystemName
     *
     * @return GradeSystem
     */
    public function setGradeSystemName($gradeSystemName)
    {
        $this->gradeSystemName = $gradeSystemName;

        return $this;
    }

    /**
     * Get gradeSystemName
     *
     * @return string
     */
    public function getGradeSystemName()
    {
        return $this->gradeSystemName;
    }

    /**
     * Set createdBy
     *
     * @param integer $createdBy
     *
     * @return GradeSystem
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
