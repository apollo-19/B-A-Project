<?php

namespace AppBundle\Entity;

/**
 * Grade
 */
class Grade
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $startPoint;

    /**
     * @var string
     */
    private $endPoint;

    /**
     * @var string
     */
    private $grade;

    /**
     * @var string
     */
    private $gradeRemark;

    /**
     * @var integer
     */
    private $createdBy;

    /**
     * @var \AppBundle\Entity\GradeSystem
     */
    private $gradeSystemId;


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
     * Set startPoint
     *
     * @param string $startPoint
     *
     * @return Grade
     */
    public function setStartPoint($startPoint)
    {
        $this->startPoint = $startPoint;

        return $this;
    }

    /**
     * Get startPoint
     *
     * @return string
     */
    public function getStartPoint()
    {
        return $this->startPoint;
    }

    /**
     * Set endPoint
     *
     * @param string $endPoint
     *
     * @return Grade
     */
    public function setEndPoint($endPoint)
    {
        $this->endPoint = $endPoint;

        return $this;
    }

    /**
     * Get endPoint
     *
     * @return string
     */
    public function getEndPoint()
    {
        return $this->endPoint;
    }

    /**
     * Set grade
     *
     * @param string $grade
     *
     * @return Grade
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return string
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set gradeRemark
     *
     * @param string $gradeRemark
     *
     * @return Grade
     */
    public function setGradeRemark($gradeRemark)
    {
        $this->gradeRemark = $gradeRemark;

        return $this;
    }

    /**
     * Get gradeRemark
     *
     * @return string
     */
    public function getGradeRemark()
    {
        return $this->gradeRemark;
    }

    /**
     * Set createdBy
     *
     * @param integer $createdBy
     *
     * @return Grade
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
     * Set gradeSystemId
     *
     * @param \AppBundle\Entity\GradeSystem $gradeSystemId
     *
     * @return Grade
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
     * @var string
     */
    private $gradeValue;


    /**
     * Set gradeValue
     *
     * @param string $gradeValue
     *
     * @return Grade
     */
    public function setGradeValue($gradeValue)
    {
        $this->gradeValue = $gradeValue;

        return $this;
    }

    /**
     * Get gradeValue
     *
     * @return string
     */
    public function getGradeValue()
    {
        return $this->gradeValue;
    }
}
