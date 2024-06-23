<?php
session_start();

$username = "NELICEE";
$password = "LALI";

if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] === $username && $_POST['password'] === $password) {
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit();
    }
} else {
    $erreurMessage = "Nom d'utilisateur ou mot de passe incorrect.";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="login-form">
        <h2>Connexion</h2>
        <form action="login.php" method="POST">
            <label for="username">Nom d'utilisateur:</label>
            <input type="text" id="username" name="username" value="<?= htmlspecialchars($username); ?>" required>
            <br>
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" value="<?= htmlspecialchars($password); ?>" required>
            <br>
            <input type="submit" value="Se connecter">
            <?php if (isset($erreurMessage)) : ?>
                <p><?= $erreurMessage ?> </p>
            <?php endif; ?>
        </form>
    </div>

</body>

</html>