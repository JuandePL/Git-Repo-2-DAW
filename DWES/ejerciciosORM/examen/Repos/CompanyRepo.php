<?php

use Doctrine\ORM\EntityRepository;

require_once __DIR__ . "/../Entity/Company.php";
require_once __DIR__ . "/../bootstrap.php";

class CompanyRepo extends EntityRepository {
    function getCompanyNameAndWebTitleByCompanyId($companyId) {
        $company = $this->find($companyId);
        echo "Nombre de compañía: " . $company->getName() .
            "<br> Título de página web: " .  $company->getWebpage()->getTitle() . "<br>";
    }
}
