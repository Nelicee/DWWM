<?php

ob_start();

?>

<form action="traitement.php" method="POST">
    <label for="nbre1">Entrez votre premier nombre </label>
    <br>
    <input type="number" name="nbre1" id="nbre1">
    <br>
    <label for="nbre2">Entrez votre deuxième nombre </label>
    <br>
    <input type="number" name="nbre2" id="nbre2">
    <br>
    <label for="choix">Choisissez une option :</label>
    <select id="choix" name="choix">
        <option value="1">Additionner</option>
        <option value="2">Soustraire</option>
        <option value="3">Multiplier</option>
        <option value="4">Diviser</option>
    </select>
    <input type="submit" value="Calculer">

</form>

<?php
$content = ob_get_clean();
$titre = "Utilisation d'une calculatrice";
require "template.php";

?>