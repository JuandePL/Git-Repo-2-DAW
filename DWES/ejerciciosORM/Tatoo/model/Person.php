<?php

use Doctrine\ORM\Mapping as ORM;

/**
    @ORM\Entity
 */
class Person {
    /**
        @ORM\Id
        @ORM\GeneratedValue
        @ORM\Column(name="id", type="integer")
     */
    private $id;

    /**
        @ORM\Column(type="string", length="100")
     */
    private $name;

    /**
        @ORM\Column(type="string", length="100")
     */
    private $email;

    /**
        @ORM\Column(type="integer")
     */
    private $phone;

    /**
        @ORM\Column(type="string", length="100")
     */
    private $address;

    /**
        @ORM\Column(type="string", length="100")
     */
    private $city;

    function __construct() {
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
        return $this;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        $this->address = $address;
        return $this;
    }

    public function getCity() {
        return $this->city;
    }

    public function setCity($city) {
        $this->city = $city;
        return $this;
    }

    public function __toString() {
        return $this->id . ": " . $this->name . " - " . $this->email . " - " . $this->phone .
            " - " . $this->address . " - " . $this->city;
    }
}
