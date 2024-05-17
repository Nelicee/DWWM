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



// $nombre_entier = readline("Veuillez saisir un nombre entier : ");
// echo "les 5 nombres suivants sont: ". "\n";
// for ($i = 1; $i <= 5; $i++) {
//     echo ($nombre_entier + $i ). "\n";
// }
// echo "Les 5 nombres précédents sont: ". "\n";
//  for ($i = 1; $i <= 5; $i++) {
//     echo ($nombre_entier - $i ). "\n";
// }

// 3°) Écrire un programme qui demande un nombre a l'utilisateur et calcul sa factorielle

// La factorielle de 8, notée 8 ! vaut : 1 * 2* 3 * 4 * 5 * 6 * 7 * 8 = 40320

// entrez un nombre : 8
// La factorielle de 8 vaut : 40320


// $nombre = readline("Veuillez saisir un nombre entier et nous allons calculer sa factorielle : ");
// $nombre_decremente = $nombre -1 ;
// for ($i = 1 ; $i <= ($nombre && $i != 0; $i++)){
// echo $nombre *= ($nombre - $nombre_decremente);
// }
// echo "$nombre";



// // Demande a l'utilisateur de saisir un nombre
// $nombre = readline("Veuillez saisir un nombre entier et nous allons calculer sa factorielle : ");

// // Initialisation du résultat à 1
// $resultat = 1;

// // Calcul de la factorielle en utilisant une boucle for
// for ($i = 1; $i <= $nombre; $i++) {
// $resultat *= $i;

// // Affiche le résultat
// echo "La factorielle de $nombre vaut : $resultat\n";
// }

$num = readline("nombre : ");   
$fac = 1;
for ( $i = 1 ; $i <= $num ; $i++ ) {  
    $fac = $i * $fac;
}  
echo $fac;  


// 4°) Écrire un programme qui permet de saisir 5 nombres entiers et d’afficher le plus grand nombre à 
// la fin et le plus petit.

$nombreEntier1 = readline("Merci de donner un premier nombre entier");
$nombreEntier1 = readline("Merci de donner un deuxieme nombre entier");
$nombreEntier1 = readline("Merci de donner un troisieme nombre entier");
$nombreEntier1 = readline("Merci de donner un quatrième nombre entier");
$nombreEntier1 = readline("Merci de donner un cinquième nombre entier");

For(;i>y ;){
    
};

