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

    /**
        @ORM\ManyToMany(targetEntity="TatooTag")
        @ORM\JoinTable(name="tatoo_has_tags",
            joinColumns={@ORM\JoinColumn(name="tatoo_id", referencedColumnName="id")},
            inverseJoinColumns={@ORM\JoinColumn(name="tag_name", referencedColumnName="name")}    
        )
     */
    private $tags;

    /**
        @ORM\Column(type="string", length="100")
     */
    private $imageUrl;

    /**
        @ORM\Column(type="integer")
     */
    private $price;

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

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }
}
