<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Bienvenue sur notre site</h1>
        <p>Veuillez vous inscrire ou vous connecter.</p>
        <a href="inscription.php">Inscription</a>
        <a href="login.php">Connexion</a>
    </div>
</body>
</html>

<?php
//MD5
$password = "1234";
$passwordHash = md5($password);
var_dump($password);
var_dump($passwordHash);

echo"***********************<br>";
//SHA256
$password = "1234";
$passwordHash = hash("sha256",$password);
var_dump($password);
var_dump($passwordHash);

echo"***********************<br>";
//PASSWORD HASH
$password ="1234";
$passwordHash =  password_hash($password,PASSWORD_DEFAULT);
var_dump($password);
var_dump($passwordHash);

echo"***********************<br>";
?>