<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PodcastRepository")
 */
class Podcast
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=150)
     */
    private $name;
    
    /**
     * @ORM\Column(type="string", length=500, name="description_short")
     */
    private $descriptionShort;
    
    /**
     * @ORM\Column(type="string", length=5000, name="description_long")
     */
    private $descriptionLong;
    
    /**
     * @ORM\Column(type="string", length=25)
     */
    private $category;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url;
    
    /**
     * @ORM\Column(type="string", length=25)
     */
    private $img;
    
    /**
     * @ORM\Column(type="string", length=25)
     */
    private $banner;
    
    /**
     * @ORM\Column(type="datetime", name="creation_date")
     */
    private $creationDate;
    
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Episode", mappedBy="podcast")
     */
    private $episodes;
    
    public function __construct() {
        $this->episodes     = new arrayCollection();
        $this->creationDate =  new \DateTime();
    }
    
    function getName() {
        return $this->name;
    }

    function getDescriptionShort() {
        return $this->descriptionShort;
    }

    function getDescriptionLong() {
        return $this->descriptionLong;
    }

    function getCategory() {
        return $this->category;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setDescriptionShort($descriptionShort) {
        $this->descriptionShort = $descriptionShort;
    }

    function setDescriptionLong($descriptionLong) {
        $this->descriptionLong = $descriptionLong;
    }

    function setCategory($category) {
        $this->category = $category;
    }

    function getUrl() {
        return $this->url;
    }

    function getImg() {
        return $this->img;
    }

    function setUrl($url) {
        $this->url = $url;
    }

    function setImg($img) {
        $this->img = $img;
    }

    function getId() {
        return $this->id;
    }

    function getEpisodes() {
        return $this->episodes;
    }
    
    function getCreationDate() {
        return $this->creationDate;
    }

    function setCreationDate($creationDate) {
        $this->creationDate = $creationDate;
    }

    function getBanner() {
        return $this->banner;
    }

    function setBanner($banner) {
        $this->banner = $banner;
    }
}
