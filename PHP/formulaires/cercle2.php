<?php
require "fonctions.php";
$rayon = $resultats = $message = "";



if (isset($_GET['rayon'])) {
    $rayon = $_GET['rayon'];
    if (verifierSaisie($rayon)) {
        $resultats = calculerCercle($rayon);
    } else {
        $message = "Veuillez entrer un nombre valide";
    }
}

ob_start();
?>

<form action="cercle2.php" method="GET">
    <label for="rayon">Entrez le rayon du cercle : </label>
    <br>
    <input type="number" name="rayon" id="rayon">
    <br>
    <input type="submit" value="Calculer">

        <?php if ($resultats) : ?>
            <p>La circonférence du cercle est : <?= $resultats['circonference']; ?></p>
            <p>La surface du cercle est : <?= $resultats['surface']; ?> </p>
        <?php endif; ?>
        <?php if ($message) : ?>
            <p> <?= $message; ?></p>
        <?php endif; ?>
</form>

<?php
$content = ob_get_clean();
$titre = "Exemple avec la méthode GET";
require "template.php";
?>