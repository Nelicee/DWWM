<?php
ob_start();
require_once "auth.php";

verifAdmin();

$pdo = getPDOConnexion();

if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Récupérer les informations de l'utilisateur
    $stmt = $pdo->prepare('SELECT Users.nom, Users.prenom, Users.email, Users.telephone, UserRoles.role FROM Users 
                           LEFT JOIN UserRoles ON Users.id = UserRoles.user_id WHERE Users.id = ?');
    $stmt->execute([$userId]);
    $user = $stmt->fetch();

    if ($user) {
        $nom = $user['nom'];
        $prenom = $user['prenom'];
        $email = $user['email'];
        $telephone = $user['telephone'];
        $role = $user['role'];
    } else {
        echo "Utilisateur non trouvé.";
        exit;
    }
} else {
    echo "ID d'utilisateur non fourni.";
    exit;
}


if (isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['telephone'], $_POST['role'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $role = $_POST['role'];

    // Mettre à jour les informations de l'utilisateur
    $stmt = $pdo->prepare('UPDATE Users SET nom = ?, prenom = ?, email = ?, telephone = ? WHERE id = ?');
    $stmt->execute([$nom, $prenom, $email, $telephone, $userId]);

    $stmt = $pdo->prepare('UPDATE UserRoles SET role = ? WHERE user_id = ?');
    $stmt->execute([$role, $userId]);

    echo "Utilisateur mis à jour avec succès.";
} else {
    echo "Tous les champs ne sont pas remplis.";
}

?>

<div class="form-container">
    <form method="POST">
        <label for="nom">Nom:</label>
        <input type="text" name="nom" value="<?= htmlspecialchars($nom, ENT_QUOTES, 'UTF-8') ?>" required><br>

        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom" value="<?= htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8') ?>" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" value="<?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?>" required><br>

        <label for="telephone">Téléphone:</label>
        <input type="text" name="telephone" value="<?= htmlspecialchars($telephone, ENT_QUOTES, 'UTF-8') ?>" required><br>

        <label for="role">Rôle:</label>
        <select name="role" required>
            <option value="admin" <?= $role === 'admin' ? 'selected' : '' ?>>Admin</option>
            <option value="non-admin" <?= $role === 'non-admin' ? 'selected' : '' ?>>Non-Admin</option>
        </select><br>

        <input type="submit" value="Mettre à jour">
    </form>
</div>

<?php
$content = ob_get_clean();
$titre = "Mettre à jour un utilisateur";
require "template.php";

