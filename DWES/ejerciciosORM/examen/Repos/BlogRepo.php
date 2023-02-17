<?php

use Doctrine\ORM\EntityRepository;
require_once __DIR__ . "/../Entity/Blog.php";
require_once __DIR__ . "/../bootstrap.php";

class BlogRepo extends EntityRepository {
    function blogsConMasDeVeinteEntradas() {
        $dql = "SELECT b.title, b.nEntradas FROM blog b WHERE b.nEntradas >= 20";
        $query = $this->getEntityManager()->createQuery($dql);
        return $query->getResult();
    }
}