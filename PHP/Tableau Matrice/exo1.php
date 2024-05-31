<?php
// 1°) Soit un tableau T à deux dimensions (12, 8) préalablement rempli de valeurs numériques. 
// Écrire un algorithme qui recherche la plus grande valeur au sein de ce tableau


// Exemple du cours:
// $tab=array();

// for($i=1;$i <= 6;$i++){
// for($j=1;$j <= 13;$j++){
// $tab[$i][$j]=0;
// echo $tab[$i][$j];
// }
// echo " \n ";
// }

// $T=array();

// for($i=1;$i <= 12;$i++){
// for($j=1;$j <= 8;$j++){
// $tab[$i][$j]= rand(1, 9);
// echo $tab[$i][$j];
// }
// echo " \n ";
// }



// Tableau T (12, 8) rempli de valeurs numériques
$T = [
    [3, 5, 9, 4, 8, 2, 6, 1],
    [7, 6, 5, 2, 1, 8, 9, 4],
    [3, 9, 6, 7, 5, 4, 2, 1],
    [5, 6, 8, 9, 4, 3, 2, 7],
    [1, 4, 7, 6, 9, 2, 5, 3],
    [6, 8, 9, 3, 4, 7, 2, 5],
    [3, 5, 7, 8, 2, 1, 6, 9],
    [7, 2, 1, 5, 6, 4, 8, 3],
    [9, 6, 4, 2, 7, 8, 1, 5],
    [4, 3, 5, 9, 1, 7, 2, 6],
    [2, 7, 6, 8, 3, 5, 4, 9],
    [5, 1, 3, 7, 6, 9, 8, 2]
];

// Initialiser la variable max_valeur avec la première valeur du tableau
$max_valeur = $T[0][0];


// Parcourir chaque ligne du tableau
for ($i = 0; $i < 12; $i++) {
    // $i représente l'index de la ligne actuelle
    // Affichage pour vérifier
    echo "Ligne: $i\n";

    // Parcourir chaque colonne de la ligne
    for ($j = 0; $j < 8; $j++) {
        // $j représente l'index de la colonne actuelle de la ligne $i
        // Affichage pour vérifier
        echo "  Colonne: $j, Valeur: " . $T[$i][$j] . "\n";

        // Comparer la valeur actuelle avec max_valeur
        if ($T[$i][$j] > $max_valeur) {
            $max_valeur = $T[$i][$j];
        }
    }
}

// Afficher le résultat
echo "La plus grande valeur dans le tableau est: " . $max_valeur;
?>
