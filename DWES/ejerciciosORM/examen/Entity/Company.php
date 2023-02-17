<?php

use Doctrine\ORM\Mapping as ORM;

/**
    @ORM\Entity(repositoryClass="CompanyRepo")
 */
class Company {
    /**
        @ORM\Id
        @ORM\GeneratedValue
        @ORM\Column(type="integer")
     */
    private $id;

    /**
        @ORM\Column(type="string", length="100")
     */
    private $name;

    /**
        @ORM\ManyToOne(targetEntity="Conventional", inversedBy="adsCompany")
        @ORM\JoinColumn(name="webpageAssigned")
     */
    private $webpage;

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getWebpage() {
        return $this->webpage;
    }

    public function setWebpage($webpage) {
        $this->webpage = $webpage;
    }
}
