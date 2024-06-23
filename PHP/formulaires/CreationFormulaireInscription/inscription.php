<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création d’un formulaire d’inscription avec vérification </title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <?php

    $nom = isset($_POST['nom']) ? $_POST['nom'] : null;
    $email = "";
    if (isset($_POST['email'])) {
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    }
    // Vérifier si l'e-mail est valide
    if ($email) {
        echo "<p> L'adresse e-mail saisie est : $email</p>";
    } else {
        echo "<p> L'adresse e-mail saisie est non valide</p>";
    }
    // Vérifier que le mot de passe fait au moins 7
    $password = isset($_POST['password']) ? $_POST['password'] : null;
    if (strlen($password) < 8) {
        echo "<p>Le mot de passe doit avoir au moins 8 caractères.</p>";
    }
    // Vérifier que la confirmation du mot de passe correspond au mot de passe
    $confirm_password = isset($_POST['confirm_password']) ? $_POST['confirm_password'] : null;
    if ($password !== $confirm_password) {
        echo "<p>La confirmation du mot de passe ne correspond pas</p>";
    }
    //Vérifier que la personne a plus de 18 ans
    $dateNaissance = isset($_POST['date_naissance']) ? $_POST['date_naissance'] : null;
    ?>


    <p>
    <H1>Formulaire d'inscription</H1>
    </p>
    <form action="inscription.php" method="POST">
        <label for="nom">Nom complet :</label><br>
        <input type="text" name="nom" id="nom" value="" required><br>

        <label for="email">Adresse e-mail :</label><br>
        <input type="email" name="email" id="email" value=" <?= htmlspecialchars($email); ?>" required><br>

        <label for="password">Mot de passe :</label><br>
        <input type="password" name="password" id="password" required><br>

        <label for="confirm_password">Confirmation du mot de passe :</label><br>
        <input type="password" name="confirm_password" id="confirm_password" required><br>

        <label for="date_naissance">Date de naissance :</label><br>
        <input type="date" name="date_naissance" id="date_naissance" value="" required><br>

        <label>Sexe :</label><br>
        <input type="radio" name="sexe" value="Homme" required> Homme<br>
        <input type="radio" name="sexe" value="Femme" required> Femme<br>

        <input type="submit" value="S'inscrire">
    </form>


</body>

</html>