<?php

namespace AppBundle\Entity;

/**
 * Module
 */
class Module
{
    /**
     * @var integer
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
     * @var integer
     */
    private $moduleCreditHour;

    /**
     * @var string
     */
    private $moduleDuration;

    /**
     * @var integer
     */
    private $createdBy;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $courses;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $schoolsessions;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $prerequisiteModule;

    /**
     * @var \AppBundle\Entity\Curriculum
     */
    private $curriculumId;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->courses = new \Doctrine\Common\Collections\ArrayCollection();
        $this->schoolsessions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->prerequisiteModule = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * @param integer $moduleCreditHour
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
     * @return integer
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
     * @return integer
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Add course
     *
     * @param \AppBundle\Entity\Course $course
     *
     * @return Module
     */
    public function addCourse(\AppBundle\Entity\Course $course)
    {
        $this->courses[] = $course;

        return $this;
    }

    /**
     * Remove course
     *
     * @param \AppBundle\Entity\Course $course
     */
    public function removeCourse(\AppBundle\Entity\Course $course)
    {
        $this->courses->removeElement($course);
    }

    /**
     * Get courses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCourses()
    {
        return $this->courses;
    }

    /**
     * Add schoolsession
     *
     * @param \AppBundle\Entity\Schoolsession $schoolsession
     *
     * @return Module
     */
    public function addSchoolsession(\AppBundle\Entity\Schoolsession $schoolsession)
    {
        $this->schoolsessions[] = $schoolsession;

        return $this;
    }

    /**
     * Remove schoolsession
     *
     * @param \AppBundle\Entity\Schoolsession $schoolsession
     */
    public function removeSchoolsession(\AppBundle\Entity\Schoolsession $schoolsession)
    {
        $this->schoolsessions->removeElement($schoolsession);
    }

    /**
     * Get schoolsessions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSchoolsessions()
    {
        return $this->schoolsessions;
    }

    /**
     * Add prerequisiteModule
     *
     * @param \AppBundle\Entity\Prerequisite $prerequisiteModule
     *
     * @return Module
     */
    public function addPrerequisiteModule(\AppBundle\Entity\Prerequisite $prerequisiteModule)
    {
        $this->prerequisiteModule[] = $prerequisiteModule;

        return $this;
    }

    /**
     * Remove prerequisiteModule
     *
     * @param \AppBundle\Entity\Prerequisite $prerequisiteModule
     */
    public function removePrerequisiteModule(\AppBundle\Entity\Prerequisite $prerequisiteModule)
    {
        $this->prerequisiteModule->removeElement($prerequisiteModule);
    }

    /**
     * Get prerequisiteModule
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPrerequisiteModule()
    {
        return $this->prerequisiteModule;
    }

    /**
     * Set curriculumId
     *
     * @param \AppBundle\Entity\Curriculum $curriculumId
     *
     * @return Module
     */
    public function setCurriculumId(\AppBundle\Entity\Curriculum $curriculumId)
    {
        $this->curriculumId = $curriculumId;

        return $this;
    }

    /**
     * Get curriculumId
     *
     * @return \AppBundle\Entity\Curriculum
     */
    public function getCurriculumId()
    {
        return $this->curriculumId;
    }
}

