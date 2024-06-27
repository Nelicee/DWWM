<?php
require_once "Chene.class.php";
require_once "Rose.class.php";

$chene = new Chene("Le chêne", "arbre", "20 mètres", "100 ans", "Fagacées", "brun");
$rose = new Rose("La rose","fleur", "0.2 mètres","1 mois", "rosacées", "rose", "épines" );

$chene->afficher();
$rose->afficher();
?>
