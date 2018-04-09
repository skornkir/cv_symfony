<?php

namespace CvBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Education
 *
 * @ORM\Table(name="education")
 * @ORM\Entity(repositoryClass="CvBundle\Repository\EducationRepository")
 */
class Education
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="interval_work", type="string", length=255)
     */
    private $intervalWork;

    /**
     * @var string
     *
     * @ORM\Column(name="speciality", type="string", length=255)
     */
    private $speciality;

    /**
     * @var string
     *
     * @ORM\Column(name="univiersity", type="string", length=255)
     */
    private $univiersity;

    /**
     * @var int
     *
     * @ORM\Column(name="created", type="integer")
     */
    private $created;


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
     * Set intervalWork
     *
     * @param string $intervalWork
     *
     * @return Education
     */
    public function setIntervalWork($intervalWork)
    {
        $this->intervalWork = $intervalWork;

        return $this;
    }

    /**
     * Get intervalWork
     *
     * @return string
     */
    public function getIntervalWork()
    {
        return $this->intervalWork;
    }

    /**
     * Set speciality
     *
     * @param string $speciality
     *
     * @return Education
     */
    public function setSpeciality($speciality)
    {
        $this->speciality = $speciality;

        return $this;
    }

    /**
     * Get speciality
     *
     * @return string
     */
    public function getSpeciality()
    {
        return $this->speciality;
    }

    /**
     * Set univiersity
     *
     * @param string $univiersity
     *
     * @return Education
     */
    public function setUniviersity($univiersity)
    {
        $this->univiersity = $univiersity;

        return $this;
    }

    /**
     * Get univiersity
     *
     * @return string
     */
    public function getUniviersity()
    {
        return $this->univiersity;
    }

    /**
     * Set created
     *
     * @param integer $created
     *
     * @return Education
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return int
     */
    public function getCreated()
    {
        return $this->created;
    }
}

