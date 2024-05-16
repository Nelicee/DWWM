<?php
//  $joueur = "Toto";
//  $age = 20;
//  echo "Nom du joueur :" . $joueur. "\n";

//  echo "Age du joureur :" . $age. "\n";

//  $age =$age +1;
//  echo "Age du joueur : " . $age. "\n";

//  $age--;
//  echo "Age du joueur: " . $age;

// string
// $a = "Hello world";

// // int
// $b = 1;

// // float=double
// $c = 3.14;

// //boolen
// $d = true;

// echo $a . "\n";
// echo $b . "\n";
// echo $c . "\n";
// echo $d . "\n";

// echo gettype($b);

// $operation = 2 + 2 * 5;
// echo $operation;

// define('MACONST', 'Hello');
// echo MACONST;

// const PI = 3.14;

// if(true){
//     define('MACONST','Hello');

// }else{
// define('MACONST','Hello World');
// }

// $saisie = readline("Saisir un nombre : ");
// echo $saisie."\n";
// $saisie =$saisie +5;
// echo $saisie;


// $age = 10;
// if($age === 10){
//     echo "Age est égal à 10";
// }else{
//     echo"N'est pas égal à 10";
// }
// $nbre = 10;
// if($nbre > 50){
//     echo"supérieur à 50";
// }elseif($nbre > 20) {
//     echo"supérieur à 20";
// }elseif($nbre > 5) {
//     echo"supérieur à 5";
// }else{
//     echo"inférieur à 5";
// }

// echo"***************************************\n";

// if($nbre > 50):
//     echo "supérieur à 50";
// elseif($nbre > 20):
//     echo "supérieur à 20";
// elseif($nbre > 5):
//     echo "supérieur à 5";
// else:
//     echo "inférieur à 5";
// endif;

// $prenom = "";

// switch ($prenom) {
//     case "Jean":
//         echo "Bonjour Jean";
//         break;
//     case "Paul";
//         echo "Bonjour Paul";
//         break;
//     case "Pierre";
//         echo "Bonjour Pierre";
//         break;
//     default:
//         echo "Pas de nom";
//         break;
// }

// $prenom = "";
// // -------------
// switch ($prenom):
//     case "Jean":
//         echo "Bonjour Jean";
//         break;
//     case "Paul";
//         echo "Bonjour Paul";
//         break;
//     case "Pierre";
//         echo "Bonjour Pierre";
//         break;
//     default:
//         echo "Pas de nom";
// endswitch;

// $prenom ="Jean";

// $resultat = match($prenom){
//     "Jean" => "Bonjour Jean",
//     "Paul" => "Bonjour Paul",
//     default => "Qui êtes-vous ?"
// };
// echo $resultat;

// $age = 10;
// $isAllowed;
// if ($age > 10) {
//     $isAllowed = true;
// } else {
//     $isAllowed = false;
// }

// $isAllowed = $age > 10 ? true : false;

// $a = null;
// $b = "hello";
// $c;
// if($a){
//     $c =$a;
// }elseif($b){
//     $c =$b;
// }else{
//     $c = "inconnue";
// }


// $c =$a ?? $b ?? "inconnue";
// echo $c;

//Boucle while -Tant que

// $i = 5;
// while($i < 9){
//     echo  "coucou \n";
//     $i++; 
// }



// $compteur = 1;

// do {
// echo "Le compteur est : " . $compteur . "\n";
// $compteur++;
// } while ($compteur <= 5);


for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}