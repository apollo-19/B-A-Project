<?php

namespace AppBundle\Entity;

/**
 * Grade
 */
class Grade
{
    /**
     * @var int
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
     * @var int
     */
    private $gradeSystemId;


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
     * Set gradeSystemId
     *
     * @param integer $gradeSystemId
     *
     * @return Grade
     */
    public function setGradeSystemId($gradeSystemId)
    {
        $this->gradeSystemId = $gradeSystemId;

        return $this;
    }

    /**
     * Get gradeSystemId
     *
     * @return int
     */
    public function getGradeSystemId()
    {
        return $this->gradeSystemId;
    }
}

