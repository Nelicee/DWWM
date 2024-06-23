<?php
$personne = [
    "nom" => "Dupont",
    "prenom" => "Jean",
    "age" => 30,
    "profession" => "Développeur"
];
unset($personne["profession"]);



foreach ($personne as $cle => $valeur) {
    echo ucfirst($cle) . ": " . $valeur . "\n";
}



$cleSup = readline("Entrez la clé à supprimer (nom, prenom, age, profession) " );

//Supprimer la cle de l'utilisateur
unset($personne[$cleSup]);

foreach ($personne as $cle => $valeur) {
echo ucfirst($cle) . ": " . $valeur . "\n";

}