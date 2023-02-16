<?php

use Doctrine\ORM\EntityRepository;

require_once __DIR__ . '/../model/Tatooer.php';
require_once __DIR__ . '/../model/Tatoo.php';
require_once __DIR__ . '/../model/TatooTag.php';

class TatooerRepository extends EntityRepository {
    function mostSellerTatooer() {
        $tatooRepo=$this->getEntityManager()->getRepository("Tatoo");
        $tatooList=$tatooRepo->findAll();
        return $tatooList;
    }

    function login(string $email, string $password) {
        return $this->findOneBy(['email' => $email, 'password' => $password]);
    }

    function register(string $email, string $name, string $password, string $phone, string $address, string $city, bool $isTatooer, string $role) {
        $user = $isTatooer ? new Tatooer() : new Tatooer();
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
