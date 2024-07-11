<?php
ob_start();
require_once "../entities/Auth.class.php";
require_once '../dbConnect/MyDbConnection.php';
require_once '../entities/User.class.php';

$auth = new Auth();
$auth->verifierAdmin();

if (isset($_POST['image_name'],$_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['telephone'], $_POST['password'], $_POST['role'])) {
    $image_name = $_POST['image_name'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $password = $_POST['password'];
    $role = $_POST['role'];
   
    

    $user = new User();
    $message = $user->createUser($image_name, $nom, $prenom, $email, $telephone, $password, $role, );
    echo $message;
} else {
    echo "Tous les champs du formulaire doivent être remplis.";
}
?>

<div class="form-container">
    <form method="POST">
        <label for="nom">Nom:</label>
        <input type="text" name="nom" required><br>
        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom" required><br>
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>
        <label for="telephone">Téléphone:</label>
        <input type="text" name="telephone" required><br>
        <label for="password">Mot de passe:</label>
        <input type="password" name="password" required><br>
        <label for="role">Rôle:</label>
        <select name="role" required>
            <option value="admin">Admin</option>
            <option value="non-admin">Non-Admin</option>    
        </select><br>
        <label for="image_name">Image :</label>
            <input type="file" name="image_name">
        <input type="submit" value="Ajouter">
    </form>
</div>

<?php
$content = ob_get_clean();
$titre = "Ajouter un utilisateur";
require "template.php";
?>
