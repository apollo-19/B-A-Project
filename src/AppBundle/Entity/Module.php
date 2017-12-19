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
     * @var \AppBundle\Entity\Curriculum
     */
    private $curriculumId;


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
    /**
     * @var \AppBundle\Entity\School
     */
    private $schoolId;


    /**
     * Set schoolId
     *
     * @param \AppBundle\Entity\School $schoolId
     *
     * @return Module
     */
    public function setSchoolId(\AppBundle\Entity\School $schoolId)
    {
        $this->schoolId = $schoolId;

        return $this;
    }

    /**
     * Get schoolId
     *
     * @return \AppBundle\Entity\School
     */
    public function getSchoolId()
    {
        return $this->schoolId;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $courses;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->courses = new \Doctrine\Common\Collections\ArrayCollection();
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
}
