<?php
// Exercice 1 : Calcul sur le cercle 
// Cet exercice consiste à écrire un programme qui calcul la circonférence et la surface d’un cercle en 
// fonction du rayon de ce cercle. 
// Rappel  
// • La circonférence est égale à 2 * π * rayon  
// • La surface est égale à π * rayon² 
// Faire la vérification de la saisie. 

function circonference($rayon)
{
    $circonference = round((2 * M_PI * $rayon), 2);
    echo "==============================\n";
    echo "   CALCUL SUR LE CERCLE :     \n";
    echo "==============================\n";
    echo "La circonférence du cercle est: $circonference\n";
}

function surface($rayon)
{
    $surface = round((M_PI * ($rayon * $rayon)), 2);
    echo "La surface du cercle est: $surface\n";
}

function addition($premierNbre, $deuxiemeNbre)
{
    $addition = $premierNbre + $deuxiemeNbre;
    echo "La somme des deux nombres est de $addition";
}

function soustraction($premierNbre, $deuxiemeNbre)
{
    $soustraction = $premierNbre - $deuxiemeNbre;
    echo "La soustraction des deux nombres est de $soustraction";
}

function multiplication($premierNbre, $deuxiemeNbre)
{
    $multiplication = $premierNbre * $deuxiemeNbre;
    echo "La multiplication des deux nombres est de $multiplication";
}

function division($premierNbre, $deuxiemeNbre)
{
    $division = $premierNbre * $deuxiemeNbre;
    echo "La multiplication des deux nombres est de $division";
}


function ajouterEleve(&$eleves, $nom, $note,)
{
    $eleves[] = [
        'nom' => $nom,
        'note' => $note,
        
    ];
    echo "Vous avez ajouté l'élève dont le nom est $nom dont la note est de $note /20 \n";
}

function verifiernote($note){
while ($note < 0 || $note > 20){
    echo "Merci d'enregistrer une note entre 0 et 20 \n";
    $note = null;
    $note = readline("Merci d'ajouter la note de l'élève\n");
}
}
// }$note = $note;