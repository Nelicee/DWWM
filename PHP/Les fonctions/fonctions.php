<?php
// function prixTCC($prixHT, $nbreArticles, $tauxTVA)
// {
//     $LePrixTCC = (($prixHT * $nbreArticles) * 1 + ($prixHT * $nbreArticles) * ($tauxTVA / 100));
//     return $LePrixTCC;
// }

// function pgcd($nbre, $nbre2) {
//     while ($nbre2 != 0) {
//         $nbre3 = $nbre2;
//         $nbre2 = $nbre % $nbre2;
//         $nbre = $nbre3;
//     }
//     return $nbre;
// }
// ***********
// // 3°) Écrire une fonction qui calcul le PPCM 
// function gcd($nbre, $nbre2 ) {

//     while ($nbre2 != 0) {
//         $nbre3  = $nbre2 ;
//         $nbre2 = $nbre % $nbre2 ;
//         $nbre = $nbre3 ;
//     }

//     return $nbre;
// }

// function ppcm($nbre, $nbre2) {
//     $pgcd = gcd($nbre, $nbre2);

//     $ppcm = ($nbre * $nbre2) / $pgcd;

//     return $ppcm;
// }

// 4°) Écrire une fonction qui calcul et affiche la table de multiplication d’un nombre entré par 
// l’utilisateur

// function tableMultiplication($nombre){

//     $tableauResultats = [];

//     for ($i = 0; $i <= 10; $i++) {
//         $resultat = $nombre * $i;
//         $tableauResultats[] = "$nombre x $i = $resultat";
//     } 

//     return $tableauResultats;
// }

// 5°) Écrire une fonction qui calcul la factorielle d’un nombre entré par l’utilisateur et l’affiche 
// function facto($num)
// {

//     $fac = 1;
//     for ($i = $num; $i >= 1; $i--) {
//         $fac = $fac * $i;
//     }
//     return "fac of $num is $fac";
// }
// 6°) Écrire une fonction qui calcule la somme des valeurs d’un tableau (déjà rempli) 

// function SommeValeurs{
// $total = 0;
// $tab = [12,36,45,13];
// foreach($tab as $key => $valeur){
// $total += $valeur;
// }
// echo "Voici la somme des valeurs du tableau: $total";
// }


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