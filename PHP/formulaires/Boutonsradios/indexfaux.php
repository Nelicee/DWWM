<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutons radios</title>
</head>
<body>
    <form action="index.php" methos="POST">
    <p>Etat civil</p>
    <label for="option1">Marié(e)</label>
    <input type="radio" id="option1" name="option" value ="Marié(e)">

    <label for="option2">Célibataire</label>
    <input type="radio" id="option2" name="option" value ="Célibataire">

    <label for="option3">Pacsé(e)</label>
    <input type="radio" id="option3" name="option" value ="¨Pacsé(e)">

   <input type="submit" value="soumettre">

</form>


<?php
if(isset($POST['option'])){
$option = $_POST['option'];
echo "Vous avez sélectionné: " . $option;
} else {
    echo"Aucune option sélectionnée";
}
?>

</body>
</html>
