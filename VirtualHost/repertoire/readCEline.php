<?php
// Inclusion du fichier de connexion à la base de données
require_once "dbConnect.php";
require_once "auth.php";

// Vérifier si l'utilisateur est un administrateur
verifAdmin();

// Récupérer tous les utilisateurs de la base de données
$pdo = getPDOConnexion();
$stmt = $pdo->query("SELECT * FROM users");
$stmt -> execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des utilisateurs</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body> -->

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo htmlspecialchars($user['id']); ?></td>
                    <td><?php echo htmlspecialchars($user['nom']); ?></td>
                    <td><?php echo htmlspecialchars($user['prenom']); ?></td>
                    <td><?php echo htmlspecialchars($user['email']); ?></td>
                    <td><?php echo htmlspecialchars($user['telephone']); ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $user['id']; ?>">Modifier</a>
                        <a href="delete.php?id=<?php echo $user['id']; ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?');">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<!-- </body>
</html> -->

<?php
$content =  ob_get_clean();
$titre = "Voir les utilisateurs";
require "template.php";
?>

