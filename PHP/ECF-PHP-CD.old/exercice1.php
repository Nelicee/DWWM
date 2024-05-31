<?php
require "fonctions.php";
// Exercice 1 : Calcul sur le cercle 
// Cet exercice consiste à écrire un programme qui calcul la circonférence et la surface d’un cercle en 
// fonction du rayon de ce cercle. 
// Rappel  
// • La circonférence est égale à 2 * π * rayon  
// • La surface est égale à π * rayon² 
// Faire la vérification de la saisie. 

$rayon = readline("Merci de saisir le rayon :");
circonference($rayon);
surface($rayon);

// $continue = "y";

// while ($continue == "y" || $continue == "Y") {

$choice = null;
// while ($choice < 1 || $choice > 1) {
echo "Voulez-vous faire un autre calcul? (o/n) : \n";
$answer = readline("Votre choix : ");
echo PHP_EOL;
// }

while ($answer === "o") {
    echo "Voulez-vous faire un autre calcul? (o/n) : \n";
    $rayon = readline("Merci de saisir le rayon :");
    circonference($rayon);
    surface($rayon);

    if ($answer === "n") {
        echo "Au revoir et à bientôt";
        exit;
    } else {
        echo "***Entrez une réponse valide***\n";
        echo "Voulez-vous faire un autre calcul? (o/n) : \n";
        circonference($rayon);
        surface($rayon);
        $answer = readline("Votre choix : ");
    }
}
// switch ($answer) {
//     case ($answer === "o"):
//         $rayon = readline("Merci de saisir le rayon :");
//         circonference($rayon);
//         surface($rayon);
//         break;
//     case ($answer === "n"):
//         echo "Au revoir et à bientôt";
//         break;
//     default:
//         echo "***Entrez une réponse valide***\n";
//         echo "Voulez-vous faire un autre calcul? (o/n) : \n";
//         $answer = readline("Votre choix : ");
//         break;
// }

echo PHP_EOL;
echo PHP_EOL;

//     $continue = readline("Vous voulez faire une autre demande ? (y/N)");
// }

// $i = 0;

// while ($answer < 10000) {
//     $i++;
//     if ($i == 10) {
//         break;
//     }
//     echo $i . '<br>';
// }
