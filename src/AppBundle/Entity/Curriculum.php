<?php

namespace AppBundle\Entity;

/**
 * Curriculum
 */
class Curriculum
{
    /**
     * @var integer
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
     * @var string
     */
    private $curriculumType;

    /**
     * @var boolean
     */
    private $isApplied;

    /**
     * @var integer
     */
    private $createdBy;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $modules;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $semesters;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $courses;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $sections;

    /**
     * @var \AppBundle\Entity\School
     */
    private $schoolId;

    /**
     * @var \AppBundle\Entity\GradeSystem
     */
    private $gradeSystemId;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->modules = new \Doctrine\Common\Collections\ArrayCollection();
        $this->semesters = new \Doctrine\Common\Collections\ArrayCollection();
        $this->courses = new \Doctrine\Common\Collections\ArrayCollection();
        $this->sections = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set curriculumCode
     *
     * @param string $curriculumCode
     *
     * @return Curriculum
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
     * @return Curriculum
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
     * Set curriculumType
     *
     * @param string $curriculumType
     *
     * @return Curriculum
     */
    public function setCurriculumType($curriculumType)
    {
        $this->curriculumType = $curriculumType;

        return $this;
    }

    /**
     * Get curriculumType
     *
     * @return string
     */
    public function getCurriculumType()
    {
        return $this->curriculumType;
    }

    /**
     * Set isApplied
     *
     * @param boolean $isApplied
     *
     * @return Curriculum
     */
    public function setIsApplied($isApplied)
    {
        $this->isApplied = $isApplied;

        return $this;
    }

    /**
     * Get isApplied
     *
     * @return boolean
     */
    public function getIsApplied()
    {
        return $this->isApplied;
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
     * Add module
     *
     * @param \AppBundle\Entity\Module $module
     *
     * @return Curriculum
     */
    public function addModule(\AppBundle\Entity\Module $module)
    {
        $this->modules[] = $module;

        return $this;
    }

    /**
     * Remove module
     *
     * @param \AppBundle\Entity\Module $module
     */
    public function removeModule(\AppBundle\Entity\Module $module)
    {
        $this->modules->removeElement($module);
    }

    /**
     * Get modules
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getModules()
    {
        return $this->modules;
    }

    /**
     * Add semester
     *
     * @param \AppBundle\Entity\Semester $semester
     *
     * @return Curriculum
     */
    public function addSemester(\AppBundle\Entity\Semester $semester)
    {
        $this->semesters[] = $semester;

        return $this;
    }

    /**
     * Remove semester
     *
     * @param \AppBundle\Entity\Semester $semester
     */
    public function removeSemester(\AppBundle\Entity\Semester $semester)
    {
        $this->semesters->removeElement($semester);
    }

    /**
     * Get semesters
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSemesters()
    {
        return $this->semesters;
    }

    /**
     * Add course
     *
     * @param \AppBundle\Entity\Course $course
     *
     * @return Curriculum
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
     * Add section
     *
     * @param \AppBundle\Entity\Section $section
     *
     * @return Curriculum
     */
    public function addSection(\AppBundle\Entity\Section $section)
    {
        $this->sections[] = $section;

        return $this;
    }

    /**
     * Remove section
     *
     * @param \AppBundle\Entity\Section $section
     */
    public function removeSection(\AppBundle\Entity\Section $section)
    {
        $this->sections->removeElement($section);
    }

    /**
     * Get sections
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSections()
    {
        return $this->sections;
    }

    /**
     * Set schoolId
     *
     * @param \AppBundle\Entity\School $schoolId
     *
     * @return Curriculum
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
     * Set gradeSystemId
     *
     * @param \AppBundle\Entity\GradeSystem $gradeSystemId
     *
     * @return Curriculum
     */
    public function setGradeSystemId(\AppBundle\Entity\GradeSystem $gradeSystemId)
    {
        $this->gradeSystemId = $gradeSystemId;

        return $this;
    }

    /**
     * Get gradeSystemId
     *
     * @return \AppBundle\Entity\GradeSystem
     */
    public function getGradeSystemId()
    {
        return $this->gradeSystemId;
    }
}

