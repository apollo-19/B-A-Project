<?php

namespace AppBundle\Entity;

/**
 * Batch
 */
class Batch
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $batchCode;

    /**
     * @var string
     */
    private $batchName;

    /**
     * @var string
     */
    private $batchYear;



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
     * Set batchCode
     *
     * @param string $batchCode
     *
     * @return Batch
     */
    public function setBatchCode($batchCode)
    {
        $this->batchCode = $batchCode;

        return $this;
    }

    /**
     * Get batchCode
     *
     * @return string
     */
    public function getBatchCode()
    {
        return $this->batchCode;
    }

    /**
     * Set batchName
     *
     * @param string $batchName
     *
     * @return Batch
     */
    public function setBatchName($batchName)
    {
        $this->batchName = $batchName;

        return $this;
    }

    /**
     * Get batchName
     *
     * @return string
     */
    public function getBatchName()
    {
        return $this->batchName;
    }

    /**
     * Set batchYear
     *
     * @param string $batchYear
     *
     * @return Batch
     */
    public function setBatchYear($batchYear)
    {
        $this->batchYear = $batchYear;

        return $this;
    }

    /**
     * Get batchYear
     *
     * @return string
     */
    public function getBatchYear()
    {
        return $this->batchYear;
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
     * @var \AppBundle\Entity\School
     */
    private $schoolId;


    /**
     * Set schoolId
     *
     * @param \AppBundle\Entity\School $schoolId
     *
     * @return Batch
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
    private $sections;

    /**
     * @var \AppBundle\Entity\Curriculum
     */
    private $curriculumId;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sections = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add section
     *
     * @param \AppBundle\Entity\Section $section
     *
     * @return Batch
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
     * Set curriculumId
     *
     * @param \AppBundle\Entity\Curriculum $curriculumId
     *
     * @return Batch
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
