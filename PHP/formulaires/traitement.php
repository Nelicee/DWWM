
<?php 
require "fonctions.php";
$rayon = $resultats = $message = "";




if (isset($_POST['rayon'])) {
    $rayon = $_POST['rayon'];
    if (verifierSaisie($rayon)) {
        $resultats = calculerCercle($rayon);
    } else {
        $message = "Veuillez entrer un nombre valide";
    }
}

ob_start(); 
?>

<div>
<?php if ($resultats) : ?>
            <p>La circonférence du cercle est : <?= $resultats['circonference']; ?></p>
            <p>La surface du cercle est : <?= $resultats['surface']; ?> </p>
        <?php endif; ?>
        <?php if ($message) : ?>
            <p> <?= $message; ?></p>
        <?php endif; ?>
</div>

       


<?php
$content = ob_get_clean();
$titre = "Calcul sur le cercle";
require "template.php";

?>

