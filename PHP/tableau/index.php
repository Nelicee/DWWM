<?php
// EXERCICES 6 : Les Tableaux 
// 1°) Écrire un programme qui déclare un tableau de 9 notes, dont on fait ensuite saisir les valeurs par 
// utilisateurs.
// Calculez la moyenne des notes
$total = 0;
$notes = [];
for($i=1;$i<10;$i++){
   $saisie = readline("Merci de saisir une note numéro $i ");
    $notes[] = $saisie;
    echo $i . ": " .$saisie ."\n ";
    }
// var_dump($notes);
foreach($notes as $key => $note){
    // echo $key . ":" . $note;
$total += $note;
}
  
echo "Voici la moyenne des 9 notes " . $total/count($notes);







