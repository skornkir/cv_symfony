<?php

namespace CvBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Portfolio
 *
 * @ORM\Table(name="portfolio")
 * @ORM\Entity(repositoryClass="CvBundle\Repository\PortfolioRepository")
 */
class Portfolio
{

    const IMAGE_PORTFOLIO_FOLDER = '/images/portfolio';

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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="delivered", type="integer")
     */
    private $delivered;

    /**
     * @var string
     *
     * @ORM\Column(name="client", type="string", length=255)
     */
    private $client;

    /**
     * @var string
     *
     * @ORM\Column(name="mainimage", type="string", length=255)
     * @Assert\File
     */
    private $mainimage;

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
     * Set title
     *
     * @param string $title
     *
     * @return Portfolio
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Portfolio
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
     * Set delivered
     *
     * @param integer $delivered
     *
     * @return Portfolio
     */
    public function setDelivered($delivered)
    {
        $this->delivered = $delivered;

        return $this;
    }

    /**
     * Get delivered
     *
     * @return int
     */
    public function getDelivered()
    {
        return $this->delivered;
    }

    /**
     * Set client
     *
     * @param string $client
     *
     * @return Portfolio
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return string
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set mainimage
     *
     * @param string $mainimage
     * @return Portfolio
     */
    public function setMainimage(UploadedFile $mainimage = null)
    {
       $this->mainimage = $mainimage;
    }

    /**
     * Get mainimage
     *
     * @return string
     */
    public function getMainimage()
    {
        return $this->mainimage;
    }

    public function upload(){
        if(null == $this->getMainimage()){
            return;
        }

        $this->getMainimage()->move(
           self::IMAGE_PORTFOLIO_FOLDER,
           $this->getMainimage()->getClientOriginalName()
        );

        $this->mainimage = $this->getMainimage()->getClientOriginalName();

        // clean up the file property as you won't need it anymore
        $this->setMainimage(null);
    }

    public function lifecycleFileUpload()
    {
        $this->upload();
    }
}

