<?php
// Initialisation du répertoire

$contacts = [
    [
        'nom' => "BRASSENS",
        'prenom' => "Antoine",
        'telephone' => 0000000010
    ],
    [
        'nom' => "DUBOIS",
        'prenom' => "Léonie",
        'telephone' => 0102031415
    ],
    [
        'nom' => "MACHIN",
        'prenom' => "Marie",
        'telephone' => 1512150408
    ],

];


function ajouterContact(&$contacts, $nom, $prenom, $telephone)
{
    $contacts[] = [
        'nom' => $nom,
        'prenom' => $prenom,
        'telephone' => $telephone
    ];
    echo "Contact ajouté : $nom - $prenom - $telephone \n";
}


function rechercherContact($contacts, $nom)
{
    foreach ($contacts as $contact) {
        if ($nom == $contact['nom']) {
            echo "Nom : " . $contact['nom'] . "\n";
            echo "Prénom : " . $contact['prenom'] . "\n";
            echo "Téléphone : " . $contact['telephone'] . "\n";
            echo "\n";
            return; // Quitte la fonction une fois que le contact est trouvé
        }
    }
    echo "Le contact n'existe pas"; // Ceci ne sera exécuté que si aucun contact correspondant n'est trouvé
}



// function rechercheContact($contacts, $nom)
// {
//     $contactTrouve = false;
//     foreach ($contacts as $contact) {
//         if ($nom == $contact['nom']) {
//             echo "Nom : " . $contact['nom'] . "\n";
//             echo "Prénom : " . $contact['prenom'] . "\n";
//             echo "Téléphone : " . $contact['telephone'] . "\n";
//             echo "\n";
//             $contactTrouve = true;
//         }
//     }
//     if (!$contactTrouve) {
//         echo "Le contact n'existe pas\n";
//     }
// }


function afficherContacts($contacts)
{
    // foreach ($contacts as $contact) {
    //     echo "Nom : " . $contact['nom'] . "\n";
    //     echo "Prénom : " . $contact['prenom'] . "\n";
    //     echo "Téléphone : " . $contact['telephone'] . "\n";
    //     echo "\n"; // Ajouter une ligne vide entre les contacts
    // }
    foreach ($contacts as $contact) {
        foreach($contact as $key => $value){
            echo $key . ": ". $value . "\n";
        }
        echo "\n";
    }
}

