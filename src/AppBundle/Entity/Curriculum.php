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
}
