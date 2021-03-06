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
    private $courseYear;

    /**
     * @var integer
     */
    private $createdBy;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $schoolsessions;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $prerequisiteCourse;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $courseResults;

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
     * Constructor
     */
    public function __construct()
    {
        $this->schoolsessions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->prerequisiteCourse = new \Doctrine\Common\Collections\ArrayCollection();
        $this->courseResults = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set courseYear
     *
     * @param integer $courseYear
     *
     * @return Course
     */
    public function setCourseYear($courseYear)
    {
        $this->courseYear = $courseYear;

        return $this;
    }

    /**
     * Get courseYear
     *
     * @return integer
     */
    public function getCourseYear()
    {
        return $this->courseYear;
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

    /**
     * Add prerequisiteCourse
     *
     * @param \AppBundle\Entity\Prerequisite $prerequisiteCourse
     *
     * @return Course
     */
    public function addPrerequisiteCourse(\AppBundle\Entity\Prerequisite $prerequisiteCourse)
    {
        $this->prerequisiteCourse[] = $prerequisiteCourse;

        return $this;
    }

    /**
     * Remove prerequisiteCourse
     *
     * @param \AppBundle\Entity\Prerequisite $prerequisiteCourse
     */
    public function removePrerequisiteCourse(\AppBundle\Entity\Prerequisite $prerequisiteCourse)
    {
        $this->prerequisiteCourse->removeElement($prerequisiteCourse);
    }

    /**
     * Get prerequisiteCourse
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPrerequisiteCourse()
    {
        return $this->prerequisiteCourse;
    }

    /**
     * Add courseResult
     *
     * @param \AppBundle\Entity\CourseGPA $courseResult
     *
     * @return Course
     */
    public function addCourseResult(\AppBundle\Entity\CourseGPA $courseResult)
    {
        $this->courseResults[] = $courseResult;

        return $this;
    }

    /**
     * Remove courseResult
     *
     * @param \AppBundle\Entity\CourseGPA $courseResult
     */
    public function removeCourseResult(\AppBundle\Entity\CourseGPA $courseResult)
    {
        $this->courseResults->removeElement($courseResult);
    }

    /**
     * Get courseResults
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCourseResults()
    {
        return $this->courseResults;
    }

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
}
