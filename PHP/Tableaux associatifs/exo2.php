<?php
// 2°) Compléter le tableau suivant avec quelques noms et quelques notes : $tabNotes = array 
// (['boucher'] =>16, ['bourdette'] =>13 .........à compléter 
// 1. A l'aide d'une boucle afficher le nom de chaque élève et la note correspondante 
// 2. Afficher la moyenne des notes 
$tabNotes = array(
    'boucher' => 16,
    'bourdette'=> 13,
);

foreach ($tabNotes as $nom => $note) {
    echo "$nom : $note\n";
}
// 2. Afficher la moyenne des notes
  // Calculer la somme des éléments du tableau
  $somme = array_sum($tabNotes);
    
  // Calculer le nombre d'éléments dans le tableau
  $nombreEleves = count($tabNotes);
  
  // Calculer la moyenne
  $moyenne = $somme / $nombreEleves;

  echo "Voici la moyenne des notes: $moyenne";
