<?php
require_once "Plante.class.php";


$chene =new Plante("le chêne", "arbre", "20  mètres", "100ans", "Fagacées");
$rose = new Plante("la rose", "fleur","1 mètre", "2 ans", "Rosacées");
$tournesol = new Plante("le tournesol", "fleur", "3 mètres", "1 an", "Astéracées");


$chene->affichage();
$rose->affichage();
$tournesol->affichage();

$chene->setHauteur("50 mètres");
$chene->affichage();

?>
