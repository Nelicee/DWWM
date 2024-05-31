<?php

// 2°)Pour chacune des figures suivantes, écrire et commenter votre algorithme

// $tab=array();

// for($i=1;$i <= 13;$i++){
// for($j=1;$j <= 7;$j++){
// $tab[$i][$j]= "*";
// echo $tab[$i][$j];
// }
// echo " \n ";
// }


// // / Nombre de lignes
// $nb_lignes = 13;

// // Boucle pour chaque ligne
// for ($i = 0; $i < 13; $i++) {
//     // Boucle pour chaque colonne
// for ($j = 0; $j < 7; $j++) {
//         // Condition pour afficher l'étoile
//         if ($j >= 6 - $i && $j <= 6 + $i) {
//             echo "*";
//         } else {
//             echo " "; // Pour créer un espace entre les étoiles
//         }
//     }
//     // Passer à la ligne suivante après chaque ligne imprimée
//     echo "<br>";
// }

// // Nombre de lignes
// $nb_lignes = 13;

// // Boucle pour chaque ligne
// for ($i = 0; $i < $nb_lignes; $i++) {
//     // Boucle pour chaque colonne
//     for ($j = 0; $j < 7; $j++) {
//         // Condition pour afficher l'étoile
//         if ($j <= 6 - $i && $j <= 6 + $i) {
//             echo "*";
//         } else {
//             echo " "; // Utilisation d'un espace ordinaire
//         }
//     }
//     // Passer à la ligne suivante après chaque ligne imprimée
//     echo "\n";
// }

// // / Nombre de lignes
// $nb_lignes = 13;

// // Boucle pour chaque ligne
// for ($i = 0; $i < $nb_lignes; $i++) {
//     // Boucle pour chaque colonne
//     for ($j = 0; $j < 13; $j++) {
//         // Condition pour afficher l'étoile
//         if ($j >= $i && $j <= 12 - $i) {
//             echo "*";
//         } else {
//             echo " "; // Utilisation d'un espace ordinaire
//         }
//     }
//     // Passer à la ligne suivante après chaque ligne imprimée
//     echo "\n";
// }

// $nb_lignes = 13;

// // Boucle pour chaque ligne
// for ($i = 0; $i < $nb_lignes; $i++) {
//     // Boucle pour chaque colonne
//     for ($j = 0; $j < $nb_lignes; $j++) {
//         // Condition pour afficher l'étoile
//         if ($j >= $nb_lignes - $i - 1) {
//             echo "*";
//         } else {
//             echo " "; // Utilisation d'un espace ordinaire
//         }
//     }
//     // Passer à la ligne suivante après chaque ligne imprimée
//     echo "\n";
// }

// $nb_lignes = 13;

// for ($i = 0; $i < $nb_lignes; $i++) {
//     for ($j = 0; $j < $nb_lignes; $j++) {
//         if ($j >= $nb_lignes - $i - 1) {
//             echo "*";
//         } else {
//             echo " "; // Utilisation d'un espace ordinaire
//         }
//     }
//     echo "\n"; // Saut de ligne
// }

$etoile = "*";

$tab = [];


for ($i=1; $i <= 7; $i++) { 
$ligne = str_repeat($etoile, $i);
array_push($tab, $ligne);
}

for ($i= 6 ; $i >= 1 ; $i--) { 
    $ligne = str_repeat($etoile , $i);
    array_push($tab, $ligne);
}

foreach ($tab as $ligne) {
echo $ligne , "\n";
}

//  J'initialise une variable etoile ainsi que mon tableau, ensuite, je viens faire une boucle for qui tant que l'index est plus petit ou egal a 6 elle increase , je declare la constante $ligne  et je viens lui atribué la valeur de etoile et je lui demande avec la fonction str repeat de repeté la variable etoile autant de fois que la position de l'index dans la boucle puis je push dans le tableau la ligne , je fais le même principe avec la deuxieme boucle for mais cette fois je viens decrease si l'index est = a 5 et tant qu'il sera plus grand ou egal  a 1 et je re push la ligne dans le tabeleau, puis pour l'affichage du resulat je demande a la boucle foreach de parcourir toute les ligne du tableau avec un saut de ligne a chaque ligne pour afficher la figure voulu

// Code d'Ethan

for ($i = 1; $i <= 8; $i++) {
    if ($i == 8) {
        for ($j = 1; $j <= $i; $j++) {
            echo "X";
        }
    } else {
        echo "X";
        if ($i > 1) {
            for ($j = 1; $j <= $i - 2; $j++) {
                echo "0";
            }
            echo "X";
        }
    }
    echo "\n";
}

