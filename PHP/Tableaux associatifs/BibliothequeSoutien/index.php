<?php
require "fonction.php";

//Le menu principal

while (true) {
    echo "1.Ajouter un livre\n";
    echo "2.Afficher tous les livres\n";
    echo "3.Modifier un livre\n";
    echo "4.Supprimer un livre\n";
    echo "5.Quitter\n";
    $choix = readline("Entrez votre choix : ");


    switch ($choix) {
        case 1:
            list($id, $titre, $auteur, $annee, $genre) = demanderLivre();
            //list fonction PHP
            //d'abord on va chercher les infos dans la fonctions demanderLivre ensuite on appelle la fonction ajouterLivre
            ajouterLivre($biblio, $id, $titre, $auteur, $annee, $genre);
            break;
        case 2:
            afficherLivres($biblio);
            break;
        case 3:
            modifierLivre($biblio);
            break;
            
        // case 4:
        //     supprimerLivre($biblio);
        case 5:
            exit("Au revoir");
            default: 
            echo "choix invalide";
    }
}

