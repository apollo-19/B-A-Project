<?php

namespace AppBundle\Entity;

/**
 * curriculum
 */
class Curriculum
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $curriculumCode;

    /**
     * @var string
     */
    private $curriculumName;

    /**
     * @var bool
     */
    private $isApplied;


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
     * Set curriculumCode
     *
     * @param string $curriculumCode
     *
     * @return curriculum
     */
    public function setCurriculumCode($curriculumCode)
    {
        $this->curriculumCode = $curriculumCode;

        return $this;
    }

    /**
     * Get curriculumCode
     *
     * @return string
     */
    public function getCurriculumCode()
    {
        return $this->curriculumCode;
    }

    /**
     * Set curriculumName
     *
     * @param string $curriculumName
     *
     * @return curriculum
     */
    public function setCurriculumName($curriculumName)
    {
        $this->curriculumName = $curriculumName;

        return $this;
    }

    /**
     * Get curriculumName
     *
     * @return string
     */
    public function getCurriculumName()
    {
        return $this->curriculumName;
    }

    /**
     * Set isApplied
     *
     * @param boolean $isApplied
     *
     * @return curriculum
     */
    public function setIsApplied($isApplied)
    {
        $this->isApplied = $isApplied;

        return $this;
    }

    /**
     * Get isApplied
     *
     * @return bool
     */
    public function getIsApplied()
    {
        return $this->isApplied;
    }
    /**
     * @var integer
     */
    private $schoolId;

    /**
     * @var integer
     */
    private $createdBy;


    /**
     * Set schoolId
     *
     * @param integer $schoolId
     *
     * @return Curriculum
     */
    public function setSchoolId($schoolId)
    {
        $this->schoolId = $schoolId;

        return $this;
    }

    /**
     * Get schoolId
     *
     * @return integer
     */
    public function getSchoolId()
    {
        return $this->schoolId;
    }

    /**
     * Set createdBy
     *
     * @param integer $createdBy
     *
     * @return Curriculum
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
     * @var \AppBundle\Entity\School
     */
    private $school;


    /**
     * Set school
     *
     * @param \AppBundle\Entity\School $school
     *
     * @return Curriculum
     */
    public function setSchool(\AppBundle\Entity\School $school = null)
    {
        $this->school = $school;

        return $this;
    }

    /**
     * Get school
     *
     * @return \AppBundle\Entity\School
     */
    public function getSchool()
    {
        return $this->school;
    }
}
