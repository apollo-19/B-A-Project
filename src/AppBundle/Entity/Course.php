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
     * @var integer
     */
    private $curriculumId;

    /**
     * @var integer
     */
    private $moduleId;


    /**
     * Set curriculumId
     *
     * @param integer $curriculumId
     *
     * @return Course
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
     * Set moduleId
     *
     * @param integer $moduleId
     *
     * @return Course
     */
    public function setModuleId($moduleId)
    {
        $this->moduleId = $moduleId;

        return $this;
    }

    /**
     * Get moduleId
     *
     * @return integer
     */
    public function getModuleId()
    {
        return $this->moduleId;
    }
    /**
     * @var integer
     */
    private $semesterId;


    /**
     * Set semesterId
     *
     * @param integer $semesterId
     *
     * @return Course
     */
    public function setSemesterId($semesterId)
    {
        $this->semesterId = $semesterId;

        return $this;
    }

    /**
     * Get semesterId
     *
     * @return integer
     */
    public function getSemesterId()
    {
        return $this->semesterId;
    }
}
