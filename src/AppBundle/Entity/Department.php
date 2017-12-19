<?php

namespace AppBundle\Entity;

/**
 * Department
 */
class Department
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $departmentCode;

    /**
     * @var string
     */
    private $departmentName;

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
     * Set departmentCode
     *
     * @param string $departmentCode
     *
     * @return Department
     */
    public function setDepartmentCode($departmentCode)
    {
        $this->departmentCode = $departmentCode;

        return $this;
    }

    /**
     * Get departmentCode
     *
     * @return string
     */
    public function getDepartmentCode()
    {
        return $this->departmentCode;
    }

    /**
     * Set departmentName
     *
     * @param string $departmentName
     *
     * @return Department
     */
    public function setDepartmentName($departmentName)
    {
        $this->departmentName = $departmentName;

        return $this;
    }

    /**
     * Get departmentName
     *
     * @return string
     */
    public function getDepartmentName()
    {
        return $this->departmentName;
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
     * @return Department
     */
    public function setSchoolId(\AppBundle\Entity\School $schoolId = null)
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
    private $teachers;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->teachers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add teacher
     *
     * @param \AppBundle\Entity\Teacher $teacher
     *
     * @return Department
     */
    public function addTeacher(\AppBundle\Entity\Teacher $teacher)
    {
        $this->teachers[] = $teacher;

        return $this;
    }

    /**
     * Remove teacher
     *
     * @param \AppBundle\Entity\Teacher $teacher
     */
    public function removeTeacher(\AppBundle\Entity\Teacher $teacher)
    {
        $this->teachers->removeElement($teacher);
    }

    /**
     * Get teachers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTeachers()
    {
        return $this->teachers;
    }
}
