<?php
require "fonctions.php";
// Exercice 3 : Le tableau de notes 
// Vous devez développer un programme en PHP pour gérer les notes des élèves d'une classe. Le 
// programme doit permettre d'ajouter, supprimer, afficher et trier les notes des élèves, ainsi que de 
// calculer la moyenne de la classe et d'afficher les élèves ayant une note au-dessus de cette moyenne. 
// Fonctionnalités requises : 
// 1. Demander les notes initiales : 
// • Le programme demande le nombre d’élèves dans la classe 
// • Pour chaque élève, le programme demande son nom et sa note 
// • Les notes doivent être comprises entre 0 et 20 
// 2. Ajouter une note : 
// • Le programme doit permettre d’ajouter une nouvelle note à un élève. Si l’élève a 
// déjà des notes, la nouvelle note est ajoutée à la liste de ses notes 
// 3. Supprimer un élève : 
// • Le programme doit permettre de supprimer un élève (et toutes ses notes) du tableau 
// 4. Calculer la moyenne de la classe : 
// • Le programme doit calculer et afficher la moyenne des notes de toute la classe. 
// 5. Trouver la note la plus élevée et la note la plus basse : 
// • Le programme doit identifier et afficher l'élève ayant la note la plus élevée ainsi que 
// celui ayant la note la plus basse. 
// 6. Afficher les élèves au-dessus de la moyenne générale : 
// • Le programme doit afficher les noms des élèves dont la note est au-dessus de la 
// moyenne de la classe. 
// 7. Trier et afficher le tableau des notes : 
// • Le programme doit permettre de trier les élèves par leur moyenne de notes en ordre 
// croissant ou décroissant et afficher le tableau trié. 
// 8. Afficher le tableau des notes : 
// • Le programme doit afficher le tableau complet des élèves et de leurs notes. 
// 9. Le Menu : 
// • Le programme doit afficher un menu permettant à l'utilisateur de choisir parmi les 
// options ci-dessus. 
// • Le programme se termine lorsque l'utilisateur choisit l'option "Quitter". 
// 10. Vérifications des entrées : 
// • Le programme doit vérifier que les entrées des utilisateurs sont valides (nombre 
// entier positif pour le nombre d'élèves, note entre 0 et 20, choix de menu valide, 
// etc.).

$nbreEleves = readline("Combien y a-t-il d'élèves ?\n");


$nom = readline("Merci d'ajouter le nom de l'élève \n");
$note = readline("Merci d'ajouter la note de l'élève\n");
verifiernote($note);
ajouterEleve($Eleves,$nom,$note);