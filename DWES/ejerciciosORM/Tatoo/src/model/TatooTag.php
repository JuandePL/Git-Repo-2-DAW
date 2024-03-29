<?php

use Doctrine\ORM\Mapping as ORM;

/**
    @ORM\Entity
 */
class TatooTag {
    /**
        @ORM\Id
        @ORM\Column(type="string", length="255")
     */
    private $name;

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }
}
