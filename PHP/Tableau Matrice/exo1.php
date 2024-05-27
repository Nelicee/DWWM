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

$T=array();

for($i=1;$i <= 12;$i++){
for($j=1;$j <= 8;$j++){
$tab[$i][$j]= rand(1, 9);
echo $tab[$i][$j];
}
echo " \n ";
}