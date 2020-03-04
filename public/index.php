<?php
//initialisation des fichiers TWIG
require_once '../lib/vendor/autoload.php';

require_once '../config/routes.php';
require_once '../src/controleur/_controleurs.php';

$loader = new \Twig\Loader\FilesystemLoader('../src/vue/');
$twig = new \Twig\Environment($loader, []);

$contenu=getPage();
$contenu($twig);

?>
