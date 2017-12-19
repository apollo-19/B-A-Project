<?php

namespace AppBundle\Entity;

/**
 * Semester
 */
class Semester
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $semester;

    /**
     * @var string
     */
    private $year;


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
     * Set semester
     *
     * @param string $semester
     *
     * @return Semester
     */
    public function setSemester($semester)
    {
        $this->semester = $semester;

        return $this;
    }

    /**
     * Get semester
     *
     * @return string
     */
    public function getSemester()
    {
        return $this->semester;
    }

    /**
     * Set year
     *
     * @param string $year
     *
     * @return Semester
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return string
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @var integer
     */
    private $createdBy;


    /**
     * Set createdBy
     *
     * @param integer $createdBy
     *
     * @return Semester
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $courses;

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
    }

    /**
     * Add course
     *
     * @param \AppBundle\Entity\Course $course
     *
     * @return Semester
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
     * Set curriculumId
     *
     * @param \AppBundle\Entity\Curriculum $curriculumId
     *
     * @return Semester
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
