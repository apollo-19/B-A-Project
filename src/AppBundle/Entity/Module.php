<?php

namespace AppBundle\Entity;

/**
 * Module
 */
class Module
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $moduleCode;

    /**
     * @var string
     */
    private $moduleName;

    /**
     * @var string
     */
    private $moduleCreditHour;

    /**
     * @var string
     */
    private $moduleDuration;

    /**
     * @var int
     */
    private $schoolId;

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
     * Set moduleCode
     *
     * @param string $moduleCode
     *
     * @return Module
     */
    public function setModuleCode($moduleCode)
    {
        $this->moduleCode = $moduleCode;

        return $this;
    }

    /**
     * Get moduleCode
     *
     * @return string
     */
    public function getModuleCode()
    {
        return $this->moduleCode;
    }

    /**
     * Set moduleName
     *
     * @param string $moduleName
     *
     * @return Module
     */
    public function setModuleName($moduleName)
    {
        $this->moduleName = $moduleName;

        return $this;
    }

    /**
     * Get moduleName
     *
     * @return string
     */
    public function getModuleName()
    {
        return $this->moduleName;
    }

    /**
     * Set moduleCreditHour
     *
     * @param string $moduleCreditHour
     *
     * @return Module
     */
    public function setModuleCreditHour($moduleCreditHour)
    {
        $this->moduleCreditHour = $moduleCreditHour;

        return $this;
    }

    /**
     * Get moduleCreditHour
     *
     * @return string
     */
    public function getModuleCreditHour()
    {
        return $this->moduleCreditHour;
    }

    /**
     * Set moduleDuration
     *
     * @param string $moduleDuration
     *
     * @return Module
     */
    public function setModuleDuration($moduleDuration)
    {
        $this->moduleDuration = $moduleDuration;

        return $this;
    }

    /**
     * Get moduleDuration
     *
     * @return string
     */
    public function getModuleDuration()
    {
        return $this->moduleDuration;
    }

    /**
     * Set schoolId
     *
     * @param integer $schoolId
     *
     * @return Module
     */
    public function setSchoolId($schoolId)
    {
        $this->schoolId = $schoolId;

        return $this;
    }

    /**
     * Get schoolId
     *
     * @return int
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
     * @return Module
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

    /**
     * @var integer
     */
    private $curriculumId;

    /**
     * @var \AppBundle\Entity\School
     */
    private $school;

    /**
     * @var \AppBundle\Entity\Curriculum
     */
    private $curriculum;


    /**
     * Set curriculumId
     *
     * @param integer $curriculumId
     *
     * @return Module
     */
    public function setCurriculumId($curriculumId)
    {
        $this->curriculumId = $curriculumId;

        return $this;
    }

    /**
     * Get curriculumId
     *
     * @return integer
     */
    public function getCurriculumId()
    {
        return $this->curriculumId;
    }

    /**
     * Set school
     *
     * @param \AppBundle\Entity\School $school
     *
     * @return Module
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

    /**
     * Set curriculum
     *
     * @param \AppBundle\Entity\Curriculum $curriculum
     *
     * @return Module
     */
    public function setCurriculum(\AppBundle\Entity\Curriculum $curriculum = null)
    {
        $this->curriculum = $curriculum;

        return $this;
    }

    /**
     * Get curriculum
     *
     * @return \AppBundle\Entity\Curriculum
     */
    public function getCurriculum()
    {
        return $this->curriculum;
    }
}
