<?php

namespace AppBundle\Entity;

/**
 * GPASystem
 */
class GPASystem
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $gpaSystemCode;

    /**
     * @var string
     */
    private $gpaSystemName;

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
    private $gpa;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->curriculums = new \Doctrine\Common\Collections\ArrayCollection();
        $this->gpa = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set gpaSystemCode
     *
     * @param string $gpaSystemCode
     *
     * @return GPASystem
     */
    public function setGpaSystemCode($gpaSystemCode)
    {
        $this->gpaSystemCode = $gpaSystemCode;

        return $this;
    }

    /**
     * Get gpaSystemCode
     *
     * @return string
     */
    public function getGpaSystemCode()
    {
        return $this->gpaSystemCode;
    }

    /**
     * Set gpaSystemName
     *
     * @param string $gpaSystemName
     *
     * @return GPASystem
     */
    public function setGpaSystemName($gpaSystemName)
    {
        $this->gpaSystemName = $gpaSystemName;

        return $this;
    }

    /**
     * Get gpaSystemName
     *
     * @return string
     */
    public function getGpaSystemName()
    {
        return $this->gpaSystemName;
    }

    /**
     * Set createdBy
     *
     * @param integer $createdBy
     *
     * @return GPASystem
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
     * @return GPASystem
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
     * Add gpa
     *
     * @param \AppBundle\Entity\GPA $gpa
     *
     * @return GPASystem
     */
    public function addGpa(\AppBundle\Entity\GPA $gpa)
    {
        $this->gpa[] = $gpa;

        return $this;
    }

    /**
     * Remove gpa
     *
     * @param \AppBundle\Entity\GPA $gpa
     */
    public function removeGpa(\AppBundle\Entity\GPA $gpa)
    {
        $this->gpa->removeElement($gpa);
    }

    /**
     * Get gpa
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGpa()
    {
        return $this->gpa;
    }
}

