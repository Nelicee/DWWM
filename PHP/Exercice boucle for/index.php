<?php

// for ($i = 1; $i <= 10; $i++) {
//     echo $i . " ";
// }

// EXERCICES-5 : Boucle POUR - FOR

// 1°) Écrire un algorithme permettant de generer un chiffre entre 1 et 9 de maniere aleatoire

// Afficher la table de multiplication du nombre aleatoire genere en respectant le formatage attendu.

// 1x 9 = 9
// 2x 9 = 18
// 3x 9 = 27
// 4x 9 = 36
// 5x 9 = 45
// 6x 9 = 54
// 7x 9 = 63
// 8x 9 = 72
// 9x 9 = 81
// 10x 9 = 90


// $chiffre_aleatoire = rand(1, 9);

// echo "La table de multiplication de $chiffre_aleatoire est :\n";

// // Afficher la table de multiplication du nombre aléatoire généré
// for ($i = 1; $i <= 10; $i++) {
//     echo "$chiffre_aleatoire x $i = " . ($chiffre_aleatoire * $i) . "\n";
// }

// 2°) Écrire un algorithme qui demande à l'utilisateur de saisir un nombre entier affiche ensuite les 5
// nombre précédents et suivants.

// Entrez un nombre : 23
// Les 5 nombres precédents sont :
// 22
// 21
// 20
// 19
// 18

// *

// Les 5 nombres suivants sont :
// 24
// 25
// 26
// 27
// 28


// saisie = readline("Saisir un nombre : ");
// echo $saisie."\n";
// $saisie =$saisie +5;
// echo $saisie;

$nombre_entier = readline("Veuillez saisir un nombre entier : ");
echo "les 5 nombres suivants sont: ";
for ($i = 1; $i <= 5; $i++) {
    echo ($nombre_entier + $i ). "\n";
}
echo "Les 5 nombres précédents sont: ";
 for ($i = 5; $i >=1; $i--) {
    echo (($nombre_entier) - $i ). "\n";
}
