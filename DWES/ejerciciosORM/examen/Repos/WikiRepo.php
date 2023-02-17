<?php

use Doctrine\ORM\EntityRepository;
require_once __DIR__ . "/../Entity/Wiki.php";
require_once __DIR__ . "/../bootstrap.php";

class WikiRepo extends EntityRepository {
    function getWikisWithWikiTitle() {
        $dql = "SELECT w.title FROM wiki w WHERE w.title = 'wiki'";
        $query = $this->getEntityManager()->createQuery($dql);
        return $query->getResult();
    }
}