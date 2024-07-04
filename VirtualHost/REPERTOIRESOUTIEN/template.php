<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Répertoire</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li> <a href="index.php">Accueil</a></li>
                <li> <a href=""></a>Ajouter</li>
                <li> <a href="read.php"></a>Voir les utilisateurs</li>
                <li> <a href=""></a>Modifier les un utilisateur </li>
                <li> <a href=""></a>Supprimer un utilisateur </li>
                <?php if (isset($_SESSION['user_id'])) : ?>
                    <li><a href="logout.php">Déconnexion</a></li>
                <?php else : ?>
                    <li><a href="login.php">Login</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>



    <h1><?= $titre ?></h1>
    <?= $content ?>
    <footer>
        <p class="foot">Copyright AFCI - 2024</p>
    </footer>

</body>

</html>