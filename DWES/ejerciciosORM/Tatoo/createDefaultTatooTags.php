<?php
require_once('./bootstrap.php');
require_once('./src/model/TatooTag.php');

$tags = ['Blackwork', 'Geométrico', 'Dotwork', 'Old School', 'Neotradicional', 'New School', 'Bosquejo', 'Ilustración'];

foreach ($tags as $tagName) {
    $tag = new TatooTag();
    $tag->setName($tagName);
    $entityManager->persist($tag);
}

$entityManager->flush();

echo "Tags creados.";