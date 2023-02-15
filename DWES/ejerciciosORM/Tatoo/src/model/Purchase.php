<?php

use Doctrine\ORM\Mapping as ORM;

/**
    @ORM\Entity
 */
class Purchase {
    /**
        @ORM\Id
        @ORM\GeneratedValue
        @ORM\Column(name="id", type="integer")
     */
    private $id;

    /**
        @ORM\Column(type="datetime", options={"default": "CURRENT_TIMESTAMP"})
     */
    private $purchaseDate;

    /**
        @ORM\ManyToMany(targetEntity="TatooPurchaseWithRating", inversedBy="tatooId")
        @ORM\JoinTable(name="purchase_has_tatoo_with_rating",
            joinColumns={@ORM\JoinColumn(name="purchase_id")},
            inverseJoinColumns={@ORM\JoinColumn(name="tatoo_with_rating_id")}
        )
     */
    private $purchaseList;

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

    public function getPurchaseDate() {
        return $this->purchaseDate;
    }

    public function setPurchaseDate($purchaseDate) {
        $this->purchaseDate = $purchaseDate;
        return $this;
    }

    public function getPurchaseList() {
        return $this->purchaseList;
    }

    public function setPurchaseList($purchaselist) {
        $this->purchaseList = $purchaselist;
        return $this;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
        return $this;
    }
}
