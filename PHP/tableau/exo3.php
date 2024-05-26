<?php
// 3°) Ecrivez un algorithme calculant la somme des valeurs d’un tableau (on suppose que le tableau a 
// été préalablement saisi). 
$total = 0;
$tab = [12,36,45,13];
foreach($tab as $key => $valeur){
$total += $valeur;
}
echo "Voici la somme des valeurs du tableau: $total";


