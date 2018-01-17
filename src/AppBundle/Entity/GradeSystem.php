<?php

namespace AppBundle\Entity;

/**
 * GradeSystem
 */
class GradeSystem
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $gradeSystemCode;

    /**
     * @var string
     */
    private $gradeSystemName;

    /**
     * @var integer
     */
    private $createdBy;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $curriculums;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $grade;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->curriculums = new \Doctrine\Common\Collections\ArrayCollection();
        $this->grade = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set gradeSystemCode
     *
     * @param string $gradeSystemCode
     *
     * @return GradeSystem
     */
    public function setGradeSystemCode($gradeSystemCode)
    {
        $this->gradeSystemCode = $gradeSystemCode;

        return $this;
    }

    /**
     * Get gradeSystemCode
     *
     * @return string
     */
    public function getGradeSystemCode()
    {
        return $this->gradeSystemCode;
    }

    /**
     * Set gradeSystemName
     *
     * @param string $gradeSystemName
     *
     * @return GradeSystem
     */
    public function setGradeSystemName($gradeSystemName)
    {
        $this->gradeSystemName = $gradeSystemName;

        return $this;
    }

    /**
     * Get gradeSystemName
     *
     * @return string
     */
    public function getGradeSystemName()
    {
        return $this->gradeSystemName;
    }

    /**
     * Set createdBy
     *
     * @param integer $createdBy
     *
     * @return GradeSystem
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
     * Add curriculum
     *
     * @param \AppBundle\Entity\Curriculum $curriculum
     *
     * @return GradeSystem
     */
    public function addCurriculum(\AppBundle\Entity\Curriculum $curriculum)
    {
        $this->curriculums[] = $curriculum;

        return $this;
    }

    /**
     * Remove curriculum
     *
     * @param \AppBundle\Entity\Curriculum $curriculum
     */
    public function removeCurriculum(\AppBundle\Entity\Curriculum $curriculum)
    {
        $this->curriculums->removeElement($curriculum);
    }

    /**
     * Get curriculums
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCurriculums()
    {
        return $this->curriculums;
    }

    /**
     * Add grade
     *
     * @param \AppBundle\Entity\Grade $grade
     *
     * @return GradeSystem
     */
    public function addGrade(\AppBundle\Entity\Grade $grade)
    {
        $this->grade[] = $grade;

        return $this;
    }

    /**
     * Remove grade
     *
     * @param \AppBundle\Entity\Grade $grade
     */
    public function removeGrade(\AppBundle\Entity\Grade $grade)
    {
        $this->grade->removeElement($grade);
    }

    /**
     * Get grade
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGrade()
    {
        return $this->grade;
    }
}

