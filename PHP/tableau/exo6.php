<?php
// 6°) Toujours et encore sur le même principe, écrivez un algorithme permettant, à l’utilisateur de saisir 
// les notes d'une classe. Le programme, une fois la saisie terminée, renvoie le nombre de ces notes 
// supérieures à la moyenne de la classe.

$total = 0;
$notes = [];
$nbreEleves = readline("Merci de saisir le nombre d'élèves :");
$NbreSupMoyenne = 0;
for ($i = 1; $i <= $nbreEleves; $i++) {
    $saisie = readline("Merci de saisir une note numéro $i ");
    $notes[] = $saisie;
}

foreach ($notes as $key => $note) {
    // echo $key . ":" . $note;
    $total += $note;
}
$moyenne = $total / count($notes);
foreach ($notes as $key => $note) {
    if($note > $moyenne){
        $NbreSupMoyenne += 1;
    }
}
echo "Voici le nombre de notes supérieures à la moyenne de la classe " .  $NbreSupMoyenne ;
