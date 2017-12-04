<?php

namespace AppBundle\Entity;

/**
 * School
 */
class School
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $schoolCode;

    /**
     * @var string
     */
    private $schoolName;

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
     * Set schoolCode
     *
     * @param string $schoolCode
     *
     * @return School
     */
    public function setSchoolCode($schoolCode)
    {
        $this->schoolCode = $schoolCode;

        return $this;
    }

    /**
     * Get schoolCode
     *
     * @return string
     */
    public function getSchoolCode()
    {
        return $this->schoolCode;
    }

    /**
     * Set schoolName
     *
     * @param string $schoolName
     *
     * @return School
     */
    public function setSchoolName($schoolName)
    {
        $this->schoolName = $schoolName;

        return $this;
    }

    /**
     * Get schoolName
     *
     * @return string
     */
    public function getSchoolName()
    {
        return $this->schoolName;
    }

    /**
     * Set createdBy
     *
     * @param integer $createdBy
     *
     * @return School
     */
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $departments;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->departments = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add department
     *
     * @param \AppBundle\Entity\Department $department
     *
     * @return School
     */
    public function addDepartment(\AppBundle\Entity\Department $department)
    {
        $this->departments[] = $department;

        return $this;
    }

    /**
     * Remove department
     *
     * @param \AppBundle\Entity\Department $department
     */
    public function removeDepartment(\AppBundle\Entity\Department $department)
    {
        $this->departments->removeElement($department);
    }

    /**
     * Get departments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDepartments()
    {
        return $this->departments;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $batchs;


    /**
     * Add batch
     *
     * @param \AppBundle\Entity\Batch $batch
     *
     * @return School
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $curriculums;


    /**
     * Add curriculum
     *
     * @param \AppBundle\Entity\Curriculum $curriculum
     *
     * @return School
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $modules;


    /**
     * Add module
     *
     * @param \AppBundle\Entity\Module $module
     *
     * @return School
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
}
