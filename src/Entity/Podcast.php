<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

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


}
