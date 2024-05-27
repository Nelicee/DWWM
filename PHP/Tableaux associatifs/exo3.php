<?php
// 3°) $tabNotes = array(['prenot'] => array (2,10,14), ['perthuis'] => array (10,18,12) …à compléter avec 
// des élèves et des notes de votre choix 
// 1. Afficher le nom et les notes de chaque élève. 
// 2. Afficher le nom et la moyenne de chaque élève 
// 3. Afficher les notes et la moyenne d'un élève dont le nom sera saisi au clavier (attention vous 
// devez vérifier que cet élève est bien présent dans le tableau) 
// 4. Faire un menu pour afficher les questions 1,2,3

$tabNotes = array(
    'prenot' => array(2,10,14), 
    'perthuis' => array(10,18,12)
);
// 1. Afficher le nom et les notes de chaque élève.
// dans le code ci-dessous, on peut utiliser un for ou un foreach pourle tableau des notes/

foreach ($tabNotes as $nom => $notes) {
    // Afficher le nom de l'élève
    echo "Nom: $nom, Notes: "." ";
    
    // Parcourir le tableau normal pour afficher les notes
    // foreach ($notes as $note) {
    //     echo $note . " \n";
    // }
    for ($i=0; $i <count($notes) ; $i++) { 
        echo $notes[$i] . " "; 
    }
  
}

// 2. Afficher le nom et la moyenne de chaque élève 
    