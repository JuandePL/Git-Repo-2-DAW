<?php

use Doctrine\ORM\Mapping as ORM;

/**
    @ORM\Entity
    @ORM\Entity(repositoryClass="TatooerRepository")
 */
class Tatooer extends Person {
    /**
        @ORM\OneToMany(targetEntity="Tatoo", mappedBy="createdBy")
     */
    private $tatoos;

    public function __construct() {
        $this->setRole(PersonRoles::Tatooer->name);
        $this->setTatoos([]);
    }

    public function getTatoos() {
        return $this->tatoos;
    }

    public function setTatoos($tatoos) {
        $this->tatoos = $tatoos;
    }

    public function addTatoo($tatoo) {
        $this->tatoos[] = $tatoo;
    }
}
