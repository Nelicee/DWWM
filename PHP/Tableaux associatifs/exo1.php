<?php

// EXERCICES 9 : Les tableaux associatifs 
// 1°) Soit le tableau associatif suivant : $chomage = array(‘Autriche' =>4.9, 'Allemagne' =>9.3 , 
// 'Danemark' =>4.8 , ' Espagne' =>9.4 , 'France' =>9.7);  
// 1. A l'aide de la boucle foreach afficher tous les pays et le taux de chômage correspondant 
// 2. A l'aide d'une boucle, écrire les instructions en PHP permettant de parcourir le tableau et  
// d’afficher le nom des pays européens ayant moins de 5 % de chômage. 
// 3. Afficher le nom du pays ayant le taux de chômage le plus faible

// 1. A l'aide de la boucle foreach afficher tous les pays et le taux de chômage correspondant
$chomage = array(
    'Autriche' => 4.9,
    'Allemagne' => 9.3,
    'Danemark' => 4.8,
    ' Espagne' => 9.4,
    'France' => 9.7
);

foreach ($chomage as $pays => $value) {
    echo " " . $pays . ":" . $value . "\n";
}

// 2. A l'aide d'une boucle, écrire les instructions en PHP permettant de parcourir le tableau et  
// d’afficher le nom des pays européens ayant moins de 5 % de chômage
echo "Voici les pays européens ayant moins de 5% de chômage: \n";
foreach ($chomage as $pays => $value) {
    if ($value < 5) {
        echo " ". $pays . "\n";
    }
}

// 3. Afficher le nom du pays ayant le taux de chômage le plus faible
echo "Voici le pays ayant le taux de chômage le plus faible: \n";
$tauxMin = min($chomage);
foreach ($chomage as $pays => $value) {
    if ($tauxMin == $value) {
        echo " $pays avec un taux de $tauxMin % \n";
    }
}
