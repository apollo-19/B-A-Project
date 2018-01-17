<?php

namespace AppBundle\Entity;

/**
 * Batch
 */
class Batch
{
    /**
     * @var integer
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
     * @var integer
     */
    private $batchStartYear;

    /**
     * @var integer
     */
    private $batchEndYear;

    /**
     * @var integer
     */
    private $createdBy;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $sections;

    /**
     * @var \AppBundle\Entity\School
     */
    private $schoolId;

    /**
     * Constructor
     */
    public function __construct()
    {
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
     * Set batchStartYear
     *
     * @param integer $batchStartYear
     *
     * @return Batch
     */
    public function setBatchStartYear($batchStartYear)
    {
        $this->batchStartYear = $batchStartYear;

        return $this;
    }

    /**
     * Get batchStartYear
     *
     * @return integer
     */
    public function getBatchStartYear()
    {
        return $this->batchStartYear;
    }

    /**
     * Set batchEndYear
     *
     * @param integer $batchEndYear
     *
     * @return Batch
     */
    public function setBatchEndYear($batchEndYear)
    {
        $this->batchEndYear = $batchEndYear;

        return $this;
    }

    /**
     * Get batchEndYear
     *
     * @return integer
     */
    public function getBatchEndYear()
    {
        return $this->batchEndYear;
    }

    /**
     * Set createdBy
     *
     * @param integer $createdBy
     *
     * @return Batch
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
}

