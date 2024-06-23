<?php
// Inclusion du fichier de connexion à la base de données
require_once "dbConnect.php";

$error = '';
$success = '';

// Traitement du formulaire lors de la soumission
if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['telephone'])){ 
    // Récupération et validation des données du formulaire
    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);
    $email = trim($_POST['email']);
    $telephone = trim($_POST['telephone']);

    if (empty($nom) || empty($prenom) || empty($email) || empty($telephone)) {
        $error = "Tous les champs sont obligatoires.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Email invalide.";
    } else {
        // Insertion des données dans la base de données
        try {
            $pdo = getPDOConnexion();
            $stmt = $pdo->prepare("INSERT INTO users (nom, prenom, email, telephone) VALUES (?, ?, ?, ?)");
            $stmt->execute([$nom, $prenom, $email, $telephone]);
            $success = "Utilisateur créé avec succès.";
        } catch (PDOException $e) {
            if ($e->errorInfo[1] == 1062) {
                $error = "Cet email est déjà utilisé.";
            } else {
                $error = "Erreur lors de la création de l'utilisateur.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Création d'utilisateur</title>
</head>
<body>
    <h2>Création d'utilisateur</h2>
    <?php if ($error): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <?php if ($success): ?>
        <p style="color: green;"><?php echo $success; ?></p>
    <?php endif; ?>
    <form method="POST" action="create.php">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br>
        <label for="telephone">Téléphone :</label>
        <input type="text" id="telephone" name="telephone" required><br>
        <button type="submit">Créer</button>
    </form>
</body>
</html>
