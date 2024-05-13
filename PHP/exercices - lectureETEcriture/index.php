<?php

// EXERCICES 2 : Lecture et écriture
// 1°) Ecrire un programme qui demande un nombre à l’utilisateur, puis qui calcule et affiche le carré 
// de ce nombre.


$saisie = readline("Saisir un nombre : ");
$carre =$saisie * $saisie;
echo $carre . "\n";



// 2°) Ecrire un programme qui demande son prénom à l'utilisateur, et qui lui réponde par un 
// charmant « Bonjour » suivi du prénom.
$prenom = readline("Pouvez-vous donner votre prénom ? ");
echo "Bonjour ". $prenom. "\n";


 
//     3°) Ecrire un programme qui lit le prix HT d’un article, le nombre d’articles et le taux de TVA, et qui 
// fournit le prix total TTC correspondant. Faire en sorte que des libellés apparaissent clairement.
$prixHT = 10;
$nbreArticles = 4;
$tauxTVA = 20;
$tauxTCC= ($prixHT*$nbreArticles) * 1 +($tauxTVA/100);
 echo  "Prix HT: ". $prixHT. "euros"."\n";
 echo  "Quantité: " . $nbreArticles ."\n";
 echo   "total HT: " .$prixHT*$nbreArticles ."euros ";
 echo   "total TTC: ".($prixHT*$nbreArticles) * 1 +($tauxTVA/100);
 
