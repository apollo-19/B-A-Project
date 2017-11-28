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
     * @var string
     */
    private $schoolId;

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

    /**
     * Set schoolId
     *
     * @param string $school
     *
     * @return Batch
     */
    public function setSchoolId($schoolId)
    {
        $this->schoolId = $schoolId;

        return $this;
    }

    /**
     * Get schoolId
     *
     * @return string
     */
    public function getSchoolId()
    {
        return $this->schoolId;
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
     * @return int
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }
}
