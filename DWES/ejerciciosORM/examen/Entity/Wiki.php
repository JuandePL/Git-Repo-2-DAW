<?php
require_once 'Webpage.php';

use Doctrine\ORM\Mapping as ORM;

/**
    @ORM\Entity(repositoryClass="WikiRepo")
 */
class Wiki extends Webpage {
    /**
        @ORM\Column(type="integer")
     */
    private $nRefs;

    /**
        @ORM\Column(type="string", length="100")
     */
    private $idioma;

    public function getNRefs() {
        return $this->nRefs;
    }

    public function setNRefs($nRefs) {
        $this->nRefs = $nRefs;
    }

    public function getIdioma() {
        return $this->idioma;
    }

    public function setIdioma($idioma) {
        $this->idioma = $idioma;
    }
}
