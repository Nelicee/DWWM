<?php
ob_start();
require_once '../entities/Auth.class.php';
require_once '../dbConnect/MyDbConnection.php';
require_once '../entities/User.class.php';


// require_once "../entities/Auth.class.php";
// require_once '../entities/User.class.php';

$auth = new Auth();
$auth->verifierAdmin();

$user = new User();
$users = $user->getAllUsersRole();
?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
        <th>Téléphone</th>
        <th>Rôle</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo htmlspecialchars($user['id']); ?></td>
        <td><?php echo htmlspecialchars($user['nom']); ?></td>
        <td><?php echo htmlspecialchars($user['prenom']); ?></td>
        <td><?php echo htmlspecialchars($user['email']); ?></td>
        <td><?php echo htmlspecialchars($user['telephone']); ?></td>
        <td><?php echo htmlspecialchars($user['role']); ?></td>
        <td><a href="../public/update.php?id=<?php echo $user['id']; ?>">Modifier</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<?php
$content = ob_get_clean();
$titre = "Voir les utilisateurs";
require "template.php";
?>
