<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Ici je vérifie si le nom existe dans le tableau $_POST -->
    <?php
    $nom = isset($_POST['nom']) ? $_POST['nom'] : null;
    ?>
    <h2>Bonjour <?= isset($nom) ? $nom : "null" ?></h2>
    <form action="index.php" method="POST">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom">
        <input type="submit" value="Envoyer">
    </form>
</body>

</html>