<?php
require "fonctions.php";
// Exercice 2 : La calculatrice 
// Écrivez un programme qui agit comme une calculatrice simple. Le programme doit demander à 
// l'utilisateur de saisir deux nombres pour effectuer le calcul. Ensuite, il doit proposer à l'utilisateur de 
// choisir une opération à effectuer via un menu, puis afficher le résultat de l'opération. 
// Assurez-vous d'effectuer toutes les vérifications nécessaires pour garantir que les saisies de 
// l'utilisateur sont valides. Cela comprend la vérification des nombres saisis ainsi que la vérification de 
// la sélection d'une opération valide à partir du menu.


echo "******************************\n";
echo "*     Ma calculatrice :      *\n";
echo "******************************\n";

echo "Menu:\n";
echo "1. Addition\n";
echo "2. Soustraction\n";
echo "3. Multiplication\n";
echo "4. Division\n";

$premierNbre = true;
$premierNbre = readline("Entrez le premier nombre :");
while (!is_numeric($premierNbre)) {
    echo "Veuillez entrer un nombre valide \n";
};
echo "Vous avez choisi le nombre $premierNbre";
// echo $premierNbre = readline("Entrez le premier nombre :");

$deuxiemeNbre = readline("Entre le deuxième nombre :");
$operation = readline("Entrez le numéro de l'opération que vous voulez effectuer :");



// $operation = null;

switch ($operation) {
    case ($operation === "1"):
        addition($premierNbre, $deuxiemeNbre);
        break;
    case ($operation === "2"):
        soustraction($premierNbre, $deuxiemeNbre);
        break;
    case ($operation === "3"):
        multiplication($premierNbre, $deuxiemeNbre);
        break;
    case ($operation === "4"):
        division($premierNbre, $deuxiemeNbre);
        break;
    default:
        echo "choix invalide. \n";
        echo "Voulez-vous effectuer une autre opération ? (o/n)";
}
// premierNbre = readline("Entrez le premier nombre :");
// while (!is_numeric($premierNbre)) {
//     echo "Veuillez entrer un nombre valide\n";
//     $premierNbre = readline("Entrez le premier nombre :");
// }
// $premierNbre = (int)$premierNbre; // Cast to integer if you need an integer value
