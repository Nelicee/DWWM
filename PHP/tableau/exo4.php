<?php

// 4°) Ecrivez un algorithme constituant un tableau, à partir de deux tableaux de même longueur 
// préalablement saisis. Le nouveau tableau sera la somme des éléments des deux tableaux de départ. 

$tab1 = [4, 8, 7, 9, 1, 5, 4, 6];
$tab2 = [7, 6 ,5 ,2 ,1, 3, 7, 4];  
$tabsum = [];
for ($i=0; $i < count($tab1) ; $i++) { 
 $tabsum[$i] = $tab1[$i] + $tab2[$i];
 echo "Voici la somme de la rangée " . ($i + 1) . ": " . $tabsum[$i] . ".\n";
}
var_dump($tabsum);




