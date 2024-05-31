<?php
function tableMultiplication($nombre){

$tableauResultats = [];

for ($i = 0; $i <= 10; $i++) {
    $resultat = $nombre * $i;
    $tableauResultats[] = "$nombre x $i = $resultat";
} 

return $tableauResultats;
}
// -------------------------
$nombre = readline("entre une table de multiplication entre 0 et 10: ");

$tableau = tableMultiplication($nombre);

echo "Table de multiplication pour : $nombre\n\n";

foreach ($tableau as $value){
echo $value . "\n";
}