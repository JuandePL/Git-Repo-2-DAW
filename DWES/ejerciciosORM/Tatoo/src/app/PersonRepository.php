<?php

use Doctrine\ORM\EntityRepository;

require_once __DIR__ . '/../model/Person.php';

class PersonRepository extends EntityRepository {    
    function login(string $email, string $password) {
        return $this->findOneBy(['email' => $email, 'password' => $password]);
    }

    function register(string $email, string $name, string $password, string $phone, string $address, string $city, bool $isTatooer, string $role) {
        $user = $isTatooer ? new Tatooer() : new Person();
        $user->setEmail($email);
        $user->setName($name);
        $user->setPassword($password);
        $user->setPhone($phone);
        $user->setAddress($address);
        $user->setCity($city);
        $user->setRole($role);

        $this->getEntityManager()->persist($user);
        $this->getEntityManager()->flush();
        return $user;
    }
}
