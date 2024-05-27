<?php
// 2°) Ecrivez un algorithme permettant à l’utilisateur de saisir un nombre quelconque de valeurs, qui 
// devront être stockées dans un tableau. L’utilisateur doit donc commencer par entrer le nombre de 
// valeurs qu’il compte saisir. Il effectuera ensuite cette saisie. Enfin, une fois la saisie terminée, le 
// programme affichera le nombre de valeurs négatives et le nombre de valeurs positives.


$tab = [];
$nombre = readline("Merci de me donner le nombre de valeurs que vous comptez saisir :");
for ($i = 1; $i <= $nombre; $i++) {
    $saisie = readline("Merci de saisir votre nombre (qu'il soit positif ou négatif) $i ");
    $tab[] = $saisie;
}

$nbresPositifs = 0;
$nbresNégatifs = 0;
foreach ($tab as $key => $value) {
    echo $key . ":" . $value;
    if ($value >= 0) {
        $nbresPositifs += 1;
    }
    if ($value < 0) {
        $nbresNégatifs += 1;
    }
}
echo "il y a $nbresPositifs nombres positif(s) et $nbresNégatifs nombres négatif(s) ";
