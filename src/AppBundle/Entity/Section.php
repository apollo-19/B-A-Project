<?php

namespace AppBundle\Entity;

/**
 * Section
 */
class Section
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $sectionCode;

    /**
     * @var string
     */
    private $sectionName;

    /**
     * @var int
     */
    private $batchId;

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
     * Set sectionCode
     *
     * @param string $sectionCode
     *
     * @return Section
     */
    public function setSectionCode($sectionCode)
    {
        $this->sectionCode = $sectionCode;

        return $this;
    }

    /**
     * Get sectionCode
     *
     * @return string
     */
    public function getSectionCode()
    {
        return $this->sectionCode;
    }

    /**
     * Set sectionName
     *
     * @param string $sectionName
     *
     * @return Section
     */
    public function setSectionName($sectionName)
    {
        $this->sectionName = $sectionName;

        return $this;
    }

    /**
     * Get sectionName
     *
     * @return string
     */
    public function getSectionName()
    {
        return $this->sectionName;
    }

    /**
     * Set batchId
     *
     * @param integer $batchId
     *
     * @return Section
     */
    public function setBatchId($batchId)
    {
        $this->batchId = $batchId;

        return $this;
    }

    /**
     * Get batchId
     *
     * @return int
     */
    public function getBatchId()
    {
        return $this->batchId;
    }

    /**
     * Set createdBy
     *
     * @param integer $createdBy
     *
     * @return Section
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
