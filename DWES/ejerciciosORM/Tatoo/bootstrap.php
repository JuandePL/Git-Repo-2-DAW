<?php
require_once("vendor/autoload.php");

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(
    [__DIR__ . "./src/model"],
    $isDevMode,
    null,
    null,
    false
);

$connectionBD = DriverManager::getConnection([
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'tatoo',
    'host'     => '127.0.0.1'
], $config);

$entityManager = new EntityManager($connectionBD, $config);



// REPOS
require_once __DIR__ . '/src/app/PersonRepository.php';
// require_once __DIR__ . '/src/model/TatooerRepository.php';

$personRepo = $entityManager->getRepository("Person");
// $tatooerRepo = $entityManager->getRepository("Tatooer");