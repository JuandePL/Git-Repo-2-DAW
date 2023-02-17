<?php
require_once 'Entity/Blog.php';
require_once 'Entity/Company.php';
require_once 'Entity/Conventional.php';
require_once 'Entity/Webpage.php';
require_once 'Entity/Wiki.php';
require_once 'bootstrap.php';
require_once 'Repos/BlogRepo.php';
require_once 'Repos/CompanyRepo.php';
require_once 'Repos/ConventionalRepo.php';
require_once 'Repos/WebpageRepo.php';
require_once 'Repos/WikiRepo.php';
?>

<h3>Numero paginas web tipo Wiki</h3>
<?php
$wikiRepo = $entityManager->getRepository('Wiki')->findAll();
echo sizeof($wikiRepo);
?>

<h3>Nombre empresa publi junto a titulo de pagina web que tiene contratada dicha publi</h3>
<?php
$companyRepo = $entityManager->getRepository('Company')->getCompanyNameAndWebTitleByCompanyId(1);
$companyRepo = $entityManager->getRepository('Company')->getCompanyNameAndWebTitleByCompanyId(2);
?>

<h3>Blogs con mas de 20 entradas</h3>
<?php
$blogRepo = $entityManager->getRepository('Blog')->blogsConMasDeVeinteEntradas();
foreach ($blogRepo as $blog) {
    echo $blog['title'] ." - Entradas: " . $blog['nEntradas'];
}
?>

<h3>Wiki cuto titulo tenga la palabra Wiki</h3>
<?php
$wikiRepo = $entityManager->getRepository('Wiki')->getWikisWithWikiTitle();
foreach ($wikiRepo as $wikiTitle) {
    echo "Título: " . $wikiTitle['title'];
}
?>