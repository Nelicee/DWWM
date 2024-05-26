<?php

// 7°) A partir de deux tableaux contenant l’un des prix et l’autre des quantités de produits achetés, 
// écrire un programme permettant de calculer le prix total. 
// Pour calculer le total, il faut additionner le résultat de la multiplication des prix par des quantités.

$prix = [5, 50, 23, 11];
$Quantites = [10, 1, 4, 3];
$prixTotal = 0;

for ($i = 0; $i < count($prix); $i++) {
    $prixTotal += ($prix[$i] * $Quantites[$i]);
}
echo "Le prix total est de : $prixTotal ";
