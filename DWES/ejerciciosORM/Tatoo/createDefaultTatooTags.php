<?php
require_once('./bootstrap.php');
require_once('./src/model/TatooTag.php');
require_once('./src/model/Person.php');

$tags = ['Blackwork', 'Geométrico', 'Dotwork', 'Old School', 'Neotradicional', 'New School', 'Bosquejo', 'Ilustración'];

foreach ($tags as $tagName) {
    $tag = new TatooTag();
    $tag->setName($tagName);
    $entityManager->persist($tag);
}

$entityManager->persist($tag);
$entityManager->flush();

echo "Tags creados.";

$person = new Person();
$person->setName('Juande');
$person->setEmail('juandepruna@gmail.com');
$person->setPassword('1f831bd00ce51e6da78ee5110ee2326703472cc132e15092c283c7237470150a');
$person->setPhone(654211);
$person->setAddress('mi casa');
$person->setCity('mi ciudad');
$person->setRole(PersonRoles::Admin->name);

$entityManager->persist($person);
$entityManager->flush();

echo "\nUsuario creado.\n";