<?php

$biblio = [];

//Fonction pour demander des informations à l'utilisateur sur le livre
function demanderLivre()
{
    $id = readline("Entrez l'Id du livre : \n");
    $titre = readline("Entrez le titre du livre : \n");
    $auteur = readline("Entrez le nom de l'auteur : \n");
    $annee = readline("Entrez l'année de la publication : \n");
    $genre = readline("Entrez le genre du livre : \n");

    return [$id, $titre, $auteur, $annee, $genre];
}

//Fonction pour ajouter des livres
function ajouterLivre(&$biblio, $id, $titre, $auteur, $annee, $genre)
{
    $biblio[$id] = [
        'titre' => $titre,
        'auteur' => $auteur,
        'annee' => $annee,
        'genre' => $genre
    ];
}



// Fonction pour afficher les livres
function afficherLivres($biblio)
{
    foreach ($biblio as $id => $livre) {
        echo "ID : " . $id . "\n";
        echo "Titre : " . $livre['titre'] . "\n";
        echo "Auteur : " . $livre['auteur'] . "\n";
        echo "Annee de publication : " . $livre['annee'] . "\n";
        echo "Genre : " . $livre['genre'] . "\n";
        echo "--------------------------------------------" . "\n";
    }
}

// // doit encore être corrigé
// // Fontion pour modifier un livre
// function modifierLivre(&$biblio){

//         $id = readline("Entrez l'ID du livre à modifier : ");

//         if (isset($biblio[$id])) {
//             $titre = readline("Entrez le nouveau titre du livre (laisser vide pour ne pas changer) : ");
//             $auteur = readline("Entrez le nouvel auteur du livre (laisser vide pour ne pas changer) : ");
//             $anneePublication = readline("Entrez la nouvelle année de publication du livre (laisser vide pour ne pas changer) : ");
//             $genre = readline("Entrez le nouveau genre du livre (laisser vide pour ne pas changer) : ");

//             if (!empty ($titre)) {
//                 $biblio[$id]['Titre'] = $titre;
//             }
//             if (!empty($auteur)) {
//                 $biblio[$id]['Auteur'] = $auteur;
//             }
//             if (!empty($anneePublication)) {
//                 $biblio[$id]['Année de publication'] = $anneePublication;
//             }
//             if (!empty($newGenre)) {
//                 $biblio[$id]['Genre'] = $genre;
//             }

//             echo "Le livre a été modifié avec succès.\n";
//         } else {
//             echo "Le livre avec l'ID $id n'existe pas.\n";
//         }

        // Fonction pour modifier un livre
function modifierLivre(&$biblio)
{
    $id = readline("Entrez l'ID du livre à modifier : ");

    if (isset($biblio[$id])) {
        $titre = readline("Entrez le nouveau titre du livre (laisser vide pour ne pas changer) : ");
        $auteur = readline("Entrez le nouvel auteur du livre (laisser vide pour ne pas changer) : ");
        $anneePublication = readline("Entrez la nouvelle année de publication du livre (laisser vide pour ne pas changer) : ");
        $genre = readline("Entrez le nouveau genre du livre (laisser vide pour ne pas changer) : ");

        if (!empty($titre)) {
            $biblio[$id]['titre'] = $titre;
        }
        if (!empty($auteur)) {
            $biblio[$id]['auteur'] = $auteur;
        }
        if (!empty($anneePublication)) {
            $biblio[$id]['annee'] = $anneePublication;
        }
        if (!empty($genre)) {
            $biblio[$id]['genre'] = $genre;
        }

        echo "Le livre a été modifié avec succès.\n";
    } else {
        echo "Le livre avec l'ID $id n'existe pas.\n";
    }
}










// function modifierLivre(&$biblio)
// {
//     $id = readline("Entrez l'ID du livre à modifier : ");

//     if (isset($biblio[$id])) {
//         $newTitre = readline("Entrez le nouveau titre du livre (laisser vide pour ne pas changer) : ");
//         $newAuteur = readline("Entrez le nouvel auteur du livre (laisser vide pour ne pas changer) : ");
//         $newAnneePublication = readline("Entrez la nouvelle année de publication du livre (laisser vide pour ne pas changer) : ");
//         $newGenre = readline("Entrez le nouveau genre du livre (laisser vide pour ne pas changer) : ");

//         if (!empty($newTitre)) {
//             $biblio[$id]['titre'] = $newTitre;
//         }
//         if (!empty($newAuteur)) {
//             $biblio[$id]['auteur'] = $newAuteur;
//         }
//         if (!empty($newAnneePublication)) {
//             $biblio[$id]['annee'] = $newAnneePublication;
//         }
//         if (!empty($newGenre)) {
//             $biblio[$id]['genre'] = $newGenre;
//         }

//         echo "Le livre a été modifié avec succès.\n";
//     } else {
//         echo "Le livre avec l'ID $id n'existe pas.\n";
//     }


function supprimerLivre(&$biblio,$id){
   if(isset($biblio))


}