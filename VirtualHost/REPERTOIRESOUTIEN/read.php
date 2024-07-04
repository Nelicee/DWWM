<?php
ob_start();
require_once "auth.php";
verifAdmin();
$pdo = getPDOConnection();


//A EVITER MIEUX DE FAIRE UN PREPARE  UN EXECUTE UN FETCH
$stmt = $pdo->query('SELECT * FROM users');
$users = $stmt->fetchAll();
?>
<table border="1">

    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>Télephone</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($users as $user) : ?>
        <tr>
            <td> <?php echo htmlspecialchars($user['id']); ?></td>
            <td> <?php echo htmlspecialchars($user['nom']); ?></td>
            <td> <?php echo htmlspecialchars($user['prenom']); ?></td>
            <td> <?php echo htmlspecialchars($user['email']); ?></td>
            <td> <?php echo htmlspecialchars($user['telephone']); ?></td>
            <td><a href="update.php?id =<?php echo $user['id']; ?>">Modifier</a></td>
        </tr>
    <?php endforeach; ?>






</table>




<?php
$content = ob_get_clean();
$titre = "Voir les utilisateurs";
require "template.php";
?>