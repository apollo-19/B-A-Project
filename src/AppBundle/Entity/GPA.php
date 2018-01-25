<?php

namespace AppBundle\Entity;

/**
 * GPA
 */
class GPA
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $startGpa;

    /**
     * @var string
     */
    private $endGpa;

    /**
     * @var string
     */
    private $gpaRemark;

    /**
     * @var string
     */
    private $gpaPF;

    /**
     * @var integer
     */
    private $createdBy;

    /**
     * @var \AppBundle\Entity\GPASystem
     */
    private $gpaSystemId;


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
     * Set startGpa
     *
     * @param string $startGpa
     *
     * @return GPA
     */
    public function setStartGpa($startGpa)
    {
        $this->startGpa = $startGpa;

        return $this;
    }

    /**
     * Get startGpa
     *
     * @return string
     */
    public function getStartGpa()
    {
        return $this->startGpa;
    }

    /**
     * Set endGpa
     *
     * @param string $endGpa
     *
     * @return GPA
     */
    public function setEndGpa($endGpa)
    {
        $this->endGpa = $endGpa;

        return $this;
    }

    /**
     * Get endGpa
     *
     * @return string
     */
    public function getEndGpa()
    {
        return $this->endGpa;
    }

    /**
     * Set gpaRemark
     *
     * @param string $gpaRemark
     *
     * @return GPA
     */
    public function setGpaRemark($gpaRemark)
    {
        $this->gpaRemark = $gpaRemark;

        return $this;
    }

    /**
     * Get gpaRemark
     *
     * @return string
     */
    public function getGpaRemark()
    {
        return $this->gpaRemark;
    }

    /**
     * Set gpaPF
     *
     * @param string $gpaPF
     *
     * @return GPA
     */
    public function setGpaPF($gpaPF)
    {
        $this->gpaPF = $gpaPF;

        return $this;
    }

    /**
     * Get gpaPF
     *
     * @return string
     */
    public function getGpaPF()
    {
        return $this->gpaPF;
    }

    /**
     * Set createdBy
     *
     * @param integer $createdBy
     *
     * @return GPA
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
     * Set gpaSystemId
     *
     * @param \AppBundle\Entity\GPASystem $gpaSystemId
     *
     * @return GPA
     */
    public function setGpaSystemId(\AppBundle\Entity\GPASystem $gpaSystemId)
    {
        $this->gpaSystemId = $gpaSystemId;

        return $this;
    }

    /**
     * Get gpaSystemId
     *
     * @return \AppBundle\Entity\GPASystem
     */
    public function getGpaSystemId()
    {
        return $this->gpaSystemId;
    }
}
