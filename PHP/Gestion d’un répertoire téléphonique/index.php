<?php
require "fonctions.php";

// Objectif : Vous devez créer un programme PHP qui permet de gérer un répertoire téléphonique en 
// utilisant des fonctions 
// 1. Créer un tableau pour stocker les contacts 
// 2. Définir les fonctions suivantes : 
//  Ajouter un nouveau contact au répertoire 
//  Rechercher un contact par nom et retourne le contact trouvé ou « null » si le contact 
// n’existe pas 
//  Afficher tous les contacts du répertoire 
// 3. Menu principal : 
//  Permettre à l’utilisateur de choisir entre ajouter un contact, rechercher un contact 
// par nom, afficher tous les contacts ou quitter le programme 



// $nom = readline("Tapez le nom du nouveau du contact: ");
// $prenom = readline("Tapez le prénom du nouveau du contact: ");
// $telephone= readline("Tapez le téléphone du contact: ");

// echo ajouterContact($contacts,$nom, $prenom, $telephone);

// echo "Répertoire: \n";
// afficherContacts($contacts);

// $nom = readline("Taper le nom du contact recherché \n");
// rechercherContact($contacts, $nom);



$continue = "y";

while ($continue == "y" || $continue == "Y") {

    $choice = 0;
    while ($choice < 1 || $choice > 4) {
        echo "Que voulez-vous faire : \n"
            . "\t1 - Ajouter un nouveau contact au répertoire \n"
            . "\t2 - Rechercher un contact par nom\n"
            . "\t3 - Afficher tous les contacts du répertoire\n"
            . "\t4 - Quitter\n";

        $choice = readline("Votre choix : ");
        echo PHP_EOL;
    }

    switch ($choice) {
        case 1:
            $nom = readline("Tapez le nom du nouveau contact: ");
            $prenom = readline("Tapez le prénom du nouveau contact: ");
            $telephone = readline("Tapez le téléphone du contact: ");
            ajouterContact($contacts, $nom, $prenom, $telephone);
            break;
        case 2:
            $nom = readline("Tapez le nom du contact recherché: ");
            rechercherContact($contacts, $nom);
            break;
        case 3:
            afficherContacts($contacts);
            break;
        default:
            echo "ERROR: le choix n'est pas valide";
    }

    echo PHP_EOL;
    echo PHP_EOL;

    $continue = readline("Vous voulez faire une autre demande ? (y/N)");
}
