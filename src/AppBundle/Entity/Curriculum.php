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
     * @var string
     */
    private $curriculumType;

    /**
     * @var bool
     */
    private $isApplied;



    /**
     * @var integer
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
     * @var \AppBundle\Entity\School
     */
    private $schoolId;


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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $modules;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->modules = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @var \AppBundle\Entity\GradeSystem
     */
    private $gradeSystemId;


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
    private $batchs;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $sections;


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
     * Add batch
     *
     * @param \AppBundle\Entity\Batch $batch
     *
     * @return Curriculum
     */
    public function addBatch(\AppBundle\Entity\Batch $batch)
    {
        $this->batchs[] = $batch;

        return $this;
    }

    /**
     * Remove batch
     *
     * @param \AppBundle\Entity\Batch $batch
     */
    public function removeBatch(\AppBundle\Entity\Batch $batch)
    {
        $this->batchs->removeElement($batch);
    }

    /**
     * Get batchs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBatchs()
    {
        return $this->batchs;
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
}
