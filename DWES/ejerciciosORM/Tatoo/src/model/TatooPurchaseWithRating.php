<?php

use Doctrine\ORM\Mapping as ORM;

/**
    @ORM\Entity
 */
class TatooPurchaseWithRating {
    /**
        @ORM\Id
        @ORM\GeneratedValue
        @ORM\Column(name="id", type="integer")
     */
    private $id;

    /**
        @ORM\ManyToOne(targetEntity="Tatoo")
        @ORM\JoinTable(name="tatoo_purchase_with_rating",
            joinColumns={@ORM\JoinColumn(name="purchase_id")},
            inverseJoinColumns={@ORM\JoinColumn(name="tatoo_id")}
        )
     */
    private $tatoo;

    /**
        @ORM\Column(type="integer")
     */
    private $rating;

    public function getId() {
        return $this->id;
    }

    public function getTatoo() {
        return $this->tatoo;
    }

    public function setTatoo($tatoo) {
        $this->tatoo = $tatoo;
        return $this;
    }

    public function getRating() {
        return $this->rating;
    }

    public function setRating($rating) {
        $this->rating = $rating;
        return $this;
    }
}