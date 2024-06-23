<?php
require_once "produit.class.php";

$produit1 =new Produit("Vis à bois", 0.5, 1000);
$produit2 =new Produit("Vis bichromatées", 0.6, 1500);
$produit3 =new Produit("Vis zinguées", 0.6, 1500);


$produit1->mettreAJourPrix(0.8);
$produit2->ajouterStock(4);
$produit1->afficherProduit();
$produit2->afficherProduit();