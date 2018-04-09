<?php

namespace CvBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Work
 *
 * @ORM\Table(name="work")
 * @ORM\Entity(repositoryClass="CvBundle\Repository\WorkRepository")
 */
class Work
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
     * @ORM\Column(name="post", type="string", length=255)
     */
    private $post;

    /**
     * @var string
     *
     * @ORM\Column(name="company", type="string", length=255)
     */
    private $company;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="created", type="integer", nullable=true)
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
     * @return Work
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
     * Set post
     *
     * @param string $post
     *
     * @return Work
     */
    public function setPost($post)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get post
     *
     * @return string
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * Set company
     *
     * @param string $company
     *
     * @return Work
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Work
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set created
     *
     * @param integer $created
     *
     * @return Work
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

