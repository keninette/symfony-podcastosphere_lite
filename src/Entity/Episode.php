<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EpisodeRepository")
 */
class Episode
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=250)
     */
    private $title;
    
    /**
     * @ORM\Column(type="string", length=500, name="description_short")
     */
    private $descriptionShort;
    
    /**
     * @ORM\Column(type="string", length=5000, name="description_long")
     */
    private $descriptionLong;
    
    /**
     * @ORM\Column(type="datetime", name="release_date")
     */
    private $releaseDate;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url;
    
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Podcast", inversedBy="episodes")
     * @ORM\JoinColumn(nullable=true)
     */
    private $podcast;
    
    /**
     * Episode constructor
     */
    public function __construct() {
        $this->releaseDate = new \DateTime();
    }
    
    function getTitle() {
        return $this->title;
    }

    function getDescriptionShort() {
        return $this->descriptionShort;
    }

    function getDescriptionLong() {
        return $this->descriptionLong;
    }

    function getReleaseDate() {
        return $this->releaseDate;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setDescriptionShort($descriptionShort) {
        $this->descriptionShort = $descriptionShort;
    }

    function setDescriptionLong($descriptionLong) {
        $this->descriptionLong = $descriptionLong;
    }

    function setReleaseDate($releaseDate) {
        $this->releaseDate = $releaseDate;
    }

    function getUrl() {
        return $this->url;
    }

    function getPodcast() :Podcast {
        return $this->podcast;
    }

    function setUrl($url) {
        $this->url = $url;
    }

    function setPodcast(Podcast $podcast) {
        $this->podcast = $podcast;
    }

    function getId() {
        return $this->id;
    }

}
