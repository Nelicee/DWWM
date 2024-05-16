<?php
// EXERCICES 3 : Les structures de contrôle 
// 1°) Ecrire un algorithme qui demande un nombre à l’utilisateur, et l’informe ensuite si ce 
// nombre est positif ou négatif (on laisse de côté le cas où le nombre vaut zéro).

// $saisie = readline("Saisir un nombre : ") . "\n";


// if ($saisie > 0) {
//     echo "Le nombre est positif" . "\n";
// } else {
//     echo "Le nombre est négatif \n";
// }
// echo "\n";

// 2°) Ecrire un algorithme qui demande deux nombres à l’utilisateur et l’informe ensuite si leur 
// produit est négatif ou positif (on laisse de côté le cas où le produit est nul). Attention 
// toutefois : on ne doit pas calculer le produit des deux nombres.


// $nbre1 = readline("Saisir un 1er nombre : ");
// $nbre2 = readline("Saisir un 2ème nombre : ");
// if ($nbre1 > 0 && $nbre2 > 0) {
//     echo "Le produit des deux nombres est positif.";
// } elseif ($nbre1 < 0 && $nbre2 < 0) {
//     echo "Le produit des deux nombres est positif.";
// } else {
//     echo "Le produit des deux nombres est négatif" . "\n";
// }
// 3°) Ecrire un algorithme qui demande un nombre à l’utilisateur, et l’informe ensuite si ce 
// nombre est positif ou négatif (on inclut cette fois le traitement du cas où le nombre vaut 
// zéro).
// $nbreUtilisateur = readline("Saisir un 1er nombre : ");
// switch ($nbreUtilisateur) {
//     case $nbreUtilisateur === 0:
//         echo "Le nombre utilisateur est un nombre nul";
//         echo gettype($nbreUtilisateur);
//         break;
//     case $nbreUtilisateur > 0:
//         echo "Le nombre utilisateur est un nombre positif";
//         break;
//     case $nbreUtilisateur < 0:
//         echo "Le nombre utilisateur un nombre négatif";
//         break;
    
// }
// echo "\n";

// 4°) Ecrire un algorithme qui demande deux nombres à l’utilisateur et l’informe ensuite si le 
// produit est négatif ou positif (on inclut cette fois le traitement du cas où le produit peut être 
// nul). Attention toutefois, on ne doit pas calculer le produit ! 

// $nbreUtilisateur1exo4 = readline("Saisir un 1er nombre : ");
// $nbreUtilisateur2exo4 = readline("Saisir un 2ème nombre : ");


// if ($nbreUtilisateur1exo4 > 0 && $nbreUtilisateur2exo4 > 0) {
//     echo "Le produit des 2 nombres est positif";
// } elseif ($nbreUtilisateur1exo4 < 0 && $nbreUtilisateur2exo4 < 0) {
//     echo "Le produit des 2 nombres est positif";
// } elseif ($nbreUtilisateur1exo4 = 0 or $nbreUtilisateur2exo4 = 0) {
//     echo "Le produit des 2 nombres est nul";
// } else {
//     echo "Le produit des 2 nombres est négatif";
// }


// 5°) Ecrire un algorithme qui demande l’âge d’un enfant à l’utilisateur. Ensuite, il l’informe de 
// sa catégorie : 
// • "Poussin" de 6 à 7 ans 
// • "Pupille" de 8 à 9 ans 
// • "Minime" de 10 à 11 ans 
// • "Cadet" après 12 ans 

// $ageenfant = readline("Peux-tu me donner ton âge?");
// switch ($ageenfant) {
//     case ($ageenfant >= 6 && $ageenfant <= 7);
//         echo "Poussin";
//         break;
//     case ($ageenfant >= 8 && $ageenfant <= 9);
//         echo "Pupille";
//         break;
//     case ($ageenfant >= 10 && $ageenfant <= 11);
//         echo "Minime";
//         break;
//     case ($ageenfant >= 12);
//         echo "Cadet";
//         default:
//         echo "Tu es trop petit";
//         break;
// }

// 6°) Cet algorithme est destiné à prédire l'avenir, et il doit être infaillible ! 
// Il lira au clavier l’heure et les minutes, et il affichera l’heure qu’il sera une minute plus tard. Par 
// exemple, si l'utilisateur tape 21 puis 32, l'algorithme doit répondre : 
// "Dans une minute, il sera 21 heures(s) 33". 
// NB : on suppose que l'utilisateur entre une heure valide. Pas besoin donc de la vérifier. 
//  $heure =readline("Merci de taper l'heure uniquement l'heure sans les minutes");
//  $minute = readline("Merci de taper les minutes");

//  if ($minute ==59 ){
//    echo "Dans une minute, il sera: " $heure + 1 "heures" && $minute ==0 "minutes"; 
//  }
//  else ($minute != 59 ){
//     echo $heure && $minute == ($minute + 1);
//  }

//  <?php

// Demande à l'utilisateur d'entrer l'heure et les minutes
$heure = readline("Merci de taper l'heure uniquement : ");
$minute = readline("Merci de taper les minutes : ");

// Ajoute une minute
$minute++;

// Vérifie si les minutes dépassent 59, si c'est le cas, ajuste les heures et les minutes
if ($minute >= 59) {
    $minute = 0;
    $heure++;
    if ($heure >= 24) {
        $heure = 0;
    }
}

// Affiche l'heure qu'il sera une minute plus tard
echo "Dans une minute, il sera $heure heure(s) $minute minute(s)\n";
