<?php

use Doctrine\ORM\EntityRepository;

require_once __DIR__ . '/../model/Person.php';

class PersonRepository extends EntityRepository {
    function findAll() {
        return $this->findAll();
    }

    function findById(int $id) {
        return $this->find($id);
    }

    function fetchPersonByUsername(string $username) {
        return $this->findOneBy(['username' => $username]);
    }

    function registerPerson(string $name, string $email, string $password, string $phone, string $address, string $city, bool $isTatooer) {
        $user = $isTatooer ? new Tatooer() : new Person();
        $user->setName($name);
        $user->setEmail($email);
        $user->setPassword($password);
        $user->setPhone($phone);
        $user->setAddress($address);
        $user->setCity($city);

        $this->persist($user);
        $this->flush();
    }
}
