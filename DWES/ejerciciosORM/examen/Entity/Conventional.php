<?php
require_once 'Webpage.php';

use Doctrine\ORM\Mapping as ORM;

/**
    @ORM\Entity(repositoryClass="ConventionalRepo")
 */
class Conventional extends Webpage {
    /**
        @ORM\Column(type="integer")
     */
    private $visits;

    /**
        @ORM\OneToMany(targetEntity="Company", mappedBy="webpage")
     */
    private $adsCompanies;

    public function getVisits() {
        return $this->visits;
    }

    public function setVisits($visits) {
        $this->visits = $visits;
    }

    public function getAdsCompanies() {
        return $this->adsCompanies;
    }

    public function setAdsCompanies($adsCompanies) {
        $this->adsCompanies = $adsCompanies;
    }
}
