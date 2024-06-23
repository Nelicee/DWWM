<?php
require_once "voiture.class.php";


$voiture1 = new Voiture("Toyota", "Corolla", 2020, "Rouge", 50);
$voiture2 = new Voiture("Honda", "Civic", 2018, "Bleu", 80);
$voiture3 = new Voiture("Ford", "Mustang", 2022, "Noir", 100);
$voiture4 = new Voiture("Tesla", "Model S", 2021, "Blanc", 120);
$voiture5 = new Voiture("BMW", "X5", 2019, "Gris", 90);


$voiture1->afficher();
$voiture2->afficher();
$voiture3->afficher();
$voiture4->afficher();
$voiture5->afficher();

$voiture1->accelerer(50);
$voiture2->accelerer();
$voiture3->accelerer();
$voiture4->accelerer();
$voiture5->accelerer();