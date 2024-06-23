<?php

$bibliotheque =  [];

//fonction pour ajouter un livre
function ajouterLivre(&$livre, $idLivre, $auteurLivre, $titreLivre, $anneePublication, $genre)
{
    $livre[$idLivre] = [
        "Auteur" => $auteurLivre,
        "Année de publication" => $anneePublication,
        "Genre" => $genre,
    ];
}

