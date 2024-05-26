<?php

// 5°) Ecrivez un algorithme permettant, toujours sur le même principe, à l’utilisateur de saisir un 
// nombre déterminé de valeurs. Le programme, une fois la saisie terminée, renvoie la plus grande 
// valeur en précisant quelle position elle occupe dans le tableau. On prendra soin d’effectuer la saisie 
// dans un premier temps, et la recherche de la plus grande valeur du tableau dans un second temps. 

$tab = [];
$NbreplusGrand = NULL;
$Position;
$nombre = readline("Merci de me donner le nombre de valeurs que vous comptez saisir ");
for ($i = 1; $i <= $nombre; $i++) {
    $saisie = readline("Merci de saisir votre nombre $i ");
    $tab[] = $saisie;
   
        if ($saisie > $NbreplusGrand || $NbreplusGrand == Null) {
            $NbreplusGrand = $saisie;
            $Position = $i;
        }
}
echo " Le nombre le plus grand du tableau est $NbreplusGrand, il est en position: $Position";



// // Demander à l'utilisateur combien de valeurs il souhaite saisir
// echo "Combien de valeurs souhaitez-vous saisir ? ";
// $nombreValeurs = intval(trim(fgets(STDIN)));

// // Initialiser un tableau pour stocker les valeurs
// $valeurs = array();

// // Saisir les valeurs
// for ($i = 0; $i < $nombreValeurs; $i++) {
//     echo "Veuillez saisir la valeur " . ($i + 1) . " : ";
//     $valeurs[$i] = intval(trim(fgets(STDIN)));
// }

// // Initialiser les variables pour stocker la plus grande valeur et sa position
// $plusGrandeValeur = $valeurs[0];
// $position = 0;

// // Rechercher la plus grande valeur et sa position
// for ($i = 1; $i < count($valeurs); $i++) {
//     if ($valeurs[$i] > $plusGrandeValeur) {
//         $plusGrandeValeur = $valeurs[$i];
//         $position = $i;
//     }
// }

// // Afficher la plus grande valeur et sa position
// echo "La plus grande valeur est " . $plusGrandeValeur . " et elle se trouve à la position " . ($position + 1) . " dans le tableau.\n";
