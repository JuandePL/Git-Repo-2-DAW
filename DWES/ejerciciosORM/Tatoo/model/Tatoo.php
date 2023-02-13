<?php

use Doctrine\ORM\Mapping as ORM;

/**
    @ORM\Entity
 */
class Tatoo {
    /**
        @ORM\Id
        @ORM\GeneratedValue
        @ORM\Column(name="id", type="integer")
     */
    private $id;

    /**
        @ORM\Column(type="string", length="255")
     */
    private $name;

    /**
        @ORM\Column(type="string", length="500")
     */
    private $description;

    #[ORM\ManyToMany("Tatoo", "tatoosWithTag")]
    #[ORM\JoinTable("TatooTag")]
    private $tags;

    /**
        @ORM\Column(type="string", length="100")
     */
    private $imageUrl;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    public function getTags() {
        return $this->tags;
    }

    public function setTags($tags) {
        $this->tags = $tags;
        return $this;
    }

    public function getImageUrl() {
        return $this->imageUrl;
    }

    public function setImageUrl($imageUrl) {
        $this->imageUrl = $imageUrl;
        return $this;
    }
}
