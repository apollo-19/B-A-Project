<?php

namespace AppBundle\Entity;

/**
 * Course
 */
class Course
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $courseCode;

    /**
     * @var string
     */
    private $courseName;

    /**
     * @var integer
     */
    private $courseCreditHour;

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
     * Set courseCode
     *
     * @param string $courseCode
     *
     * @return Course
     */
    public function setCourseCode($courseCode)
    {
        $this->courseCode = $courseCode;

        return $this;
    }

    /**
     * Get courseCode
     *
     * @return string
     */
    public function getCourseCode()
    {
        return $this->courseCode;
    }

    /**
     * Set courseName
     *
     * @param string $courseName
     *
     * @return Course
     */
    public function setCourseName($courseName)
    {
        $this->courseName = $courseName;

        return $this;
    }

    /**
     * Get courseName
     *
     * @return string
     */
    public function getCourseName()
    {
        return $this->courseName;
    }

    /**
     * Set courseCreditHour
     *
     * @param integer $courseCreditHour
     *
     * @return Course
     */
    public function setCourseCreditHour($courseCreditHour)
    {
        $this->courseCreditHour = $courseCreditHour;

        return $this;
    }

    /**
     * Get courseCreditHour
     *
     * @return integer
     */
    public function getCourseCreditHour()
    {
        return $this->courseCreditHour;
    }

    /**
     * Set createdBy
     *
     * @param integer $createdBy
     *
     * @return Course
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
     * @var \AppBundle\Entity\Curriculum
     */
    private $curriculumId;

    /**
     * @var \AppBundle\Entity\Module
     */
    private $moduleId;

    /**
     * @var \AppBundle\Entity\Semester
     */
    private $semesterId;


    /**
     * Set curriculumId
     *
     * @param \AppBundle\Entity\Curriculum $curriculumId
     *
     * @return Course
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
     * Set moduleId
     *
     * @param \AppBundle\Entity\Module $moduleId
     *
     * @return Course
     */
    public function setModuleId(\AppBundle\Entity\Module $moduleId = null)
    {
        $this->moduleId = $moduleId;

        return $this;
    }

    /**
     * Get moduleId
     *
     * @return \AppBundle\Entity\Module
     */
    public function getModuleId()
    {
        return $this->moduleId;
    }

    /**
     * Set semesterId
     *
     * @param \AppBundle\Entity\Semester $semesterId
     *
     * @return Course
     */
    public function setSemesterId(\AppBundle\Entity\Semester $semesterId = null)
    {
        $this->semesterId = $semesterId;

        return $this;
    }

    /**
     * Get semesterId
     *
     * @return \AppBundle\Entity\Semester
     */
    public function getSemesterId()
    {
        return $this->semesterId;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $schoolsessions;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schoolsessions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add schoolsession
     *
     * @param \AppBundle\Entity\Schoolsession $schoolsession
     *
     * @return Course
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
}
