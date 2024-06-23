

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="style.css">
</head>
    

<body>
    <h2>Inscription</h2>
    <form action="register.php" method="POST">
        <label for="username">Nom d'utilisateur :</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="email">Email :</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Mot de passe :</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">S'inscrire</button>

        <div id="password-requirements">
            <p id="min-length" class="invalid">- doit comporter au moins 8 caractères</p>
            <p id="uppercase" class="invalid">- doit comporter au moins une majuscule</p>
            <p id="number" class="invalid">- doit comporter au moins un chiffre</p>
            <p id="special-char" class="invalid">- doit comporter au moins un caractère spécial</p>
        </div>
    </form>
    <script src="script.js"></script>
</body>

</html>
<!-- <?php
// if (isset($_POST['password'])) {
//     $password = $_POST['password'];
//     $password_model = "/^( ?: ( ?: +|00)33|0)[1-9]( ?: [.\-\s]?\d{2}){4}$/";

//     if (preg_match($password_model, $password_model)) {
//         echo "Numéro de téléphone valide";
//     } else {
//         echo "Numéro de téléphone invalide";
//     }
// } else {
//     echo "Veuillez soumettre le formulaire.";
// }
?> 