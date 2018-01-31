<?php

namespace AppBundle\Entity;

/**
 * CourseGPA
 */
class CourseGPA
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $gpaValue;

    /**
     * @var integer
     */
    private $creditHour;

    /**
     * @var string
     */
    private $totalSum;

    /**
     * @var \AppBundle\Entity\Student
     */
    private $studentId;

    /**
     * @var \AppBundle\Entity\Course
     */
    private $courseId;


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
     * Set gpaValue
     *
     * @param string $gpaValue
     *
     * @return CourseGPA
     */
    public function setGpaValue($gpaValue)
    {
        $this->gpaValue = $gpaValue;

        return $this;
    }

    /**
     * Get gpaValue
     *
     * @return string
     */
    public function getGpaValue()
    {
        return $this->gpaValue;
    }

    /**
     * Set creditHour
     *
     * @param integer $creditHour
     *
     * @return CourseGPA
     */
    public function setCreditHour($creditHour)
    {
        $this->creditHour = $creditHour;

        return $this;
    }

    /**
     * Get creditHour
     *
     * @return integer
     */
    public function getCreditHour()
    {
        return $this->creditHour;
    }

    /**
     * Set totalSum
     *
     * @param string $totalSum
     *
     * @return CourseGPA
     */
    public function setTotalSum($totalSum)
    {
        $this->totalSum = $totalSum;

        return $this;
    }

    /**
     * Get totalSum
     *
     * @return string
     */
    public function getTotalSum()
    {
        return $this->totalSum;
    }

    /**
     * Set studentId
     *
     * @param \AppBundle\Entity\Student $studentId
     *
     * @return CourseGPA
     */
    public function setStudentId(\AppBundle\Entity\Student $studentId)
    {
        $this->studentId = $studentId;

        return $this;
    }

    /**
     * Get studentId
     *
     * @return \AppBundle\Entity\Student
     */
    public function getStudentId()
    {
        return $this->studentId;
    }

    /**
     * Set courseId
     *
     * @param \AppBundle\Entity\Course $courseId
     *
     * @return CourseGPA
     */
    public function setCourseId(\AppBundle\Entity\Course $courseId)
    {
        $this->courseId = $courseId;

        return $this;
    }

    /**
     * Get courseId
     *
     * @return \AppBundle\Entity\Course
     */
    public function getCourseId()
    {
        return $this->courseId;
    }
}
