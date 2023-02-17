<?php
require_once 'Webpage.php';

use Doctrine\ORM\Mapping as ORM;

/**
    @ORM\Entity(repositoryClass="BlogRepo")
 */
class Blog extends Webpage {
    /**
        @ORM\Column(type="integer")
     */
    private $nEntradas;

    /**
        @ORM\Column(type="integer")
     */
    private $nEtiquetas;

    public function getNEntradas() {
        return $this->nEntradas;
    }

    public function setNEntradas($nEntradas) {
        $this->nEntradas = $nEntradas;
    }

    public function getNEtiquetas() {
        return $this->nEtiquetas;
    }

    public function setNEtiquetas($nEtiquetas) {
        $this->nEtiquetas = $nEtiquetas;
    }

    public function __toString() {
        return $this->getTitle();
    }
}
