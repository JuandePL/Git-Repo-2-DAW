<?php
require_once 'bootstrap.php';

$b1 = new Blog();
$b1->setTitle('Blog 1');
$b1->setTheme('Mis cosas');
$b1->setAuthor('No se');
$b1->setNEntradas(25);
$b1->setNEtiquetas(15);
$entityManager->persist($b1);

$b2 = new Blog();
$b2->setTitle('Blog 2');
$b2->setTheme('Sus cosas');
$b2->setAuthor('Tampoco se');
$b2->setNEntradas(15);
$b2->setNEtiquetas(25);
$entityManager->persist($b2);

$conv1 = new Conventional();
$conv1->setTitle('Convencional 1');
$conv1->setTheme('Noticias');
$conv1->setAuthor('Yo');
$conv1->setVisits(150);
$entityManager->persist($conv1);

$conv2 = new Conventional();
$conv2->setTitle('Convencional 2');
$conv2->setTheme('Deportes');
$conv2->setAuthor('Mi cuñao');
$conv2->setVisits(300);
$entityManager->persist($conv2);

$compa1 = new Company();
$compa1->setName('Compañia 1');
$compa1->setWebpage($conv1);
$entityManager->persist($compa1);

$compa2 = new Company();
$compa2->setName('Compañia 2');
$compa2->setWebpage($conv2);
$entityManager->persist($compa2);

$wiki1 = new Wiki();
$wiki1->setTitle('Wiki');
$wiki1->setTheme('Uno cualquiera');
$wiki1->setAuthor('Yo');
$wiki1->setNRefs(500);
$wiki1->setIdioma('Universal');
$entityManager->persist($wiki1);

$wiki2 = new Wiki();
$wiki2->setTitle('Futbolpedia');
$wiki2->setTheme('FURBO');
$wiki2->setAuthor('Mi cuñao');
$wiki2->setNRefs(1500);
$wiki2->setIdioma('ESPAÑOL');
$entityManager->persist($wiki2);

$entityManager->flush();