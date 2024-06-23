<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="index.php" method="POST">
<p>Intérêt : </p>

<label for="music">Musique</label>
<input type="checkbox" name="interet[]" value="musique" checked >

<label for="Voyage">Voyages</label>
<input type="checkbox" name="interet[]" value="voyage"  >

<label for="lecture">Lecture</label>
<input type="checkbox" name="interet[]" value="lecture"  >

<label for="cinema">Cinéma</label>
<input type="checkbox" name="interet[]" value="cinéma" checked >

<input type="submit" value="Envoyer">

</form>
<?php
if(isset($_POST['interet']) && is_array(($_POST['interet']))){
$interets = $_POST['interet'];

foreach($interets as $interet){
}
echo ($interet) . "<br>";
}else{

echo "Aucun intérêt sélectionné";
}
?>
 

</body>
</html>