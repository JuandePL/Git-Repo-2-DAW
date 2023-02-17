<?php

use Doctrine\ORM\Mapping as ORM;

/**
    @ORM\Entity(repositoryClass="WebpageRepo")
 */
class Webpage {
    /**
        @ORM\Id
        @ORM\GeneratedValue
        @ORM\Column(type="integer")
     */
    private $id;

    /**
        @ORM\Column(type="string", length="100")
     */
    private $title;

    /**
        @ORM\Column(type="string", length="100")
     */
    private $theme;

    /**
        @ORM\Column(type="string", length="100")
     */
    private $author;

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getTheme() {
        return $this->theme;
    }

    public function setTheme($theme) {
        $this->theme = $theme;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }
}
