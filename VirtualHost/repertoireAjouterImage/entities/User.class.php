<?php

require_once '../dbConnect/MyDbConnection.php';

class User {
    private $pdo;

    public function __construct() {
        $this->pdo = MyDbConnection::getInstance();
    }

    public function createUser($image_name, $nom, $prenom, $email, $telephone, $password, $role ) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        try {
            $stmt = $this->pdo->prepare('INSERT INTO users (image_name, nom, prenom, email, telephone, password) VALUES (?, ?, ?, ?, ?,?)');
            $stmt->execute([$image_name, $nom, $prenom, $email, $telephone, $hashedPassword,]);

            $userId = $this->pdo->lastInsertId();

            $stmt = $this->pdo->prepare('INSERT INTO UserRoles (user_id, role) VALUES (?, ?)');
            $stmt->execute([$userId, $role]);

            return "Utilisateur ajouté avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public function deleteUser($id) {
        try {
            $stmt = $this->pdo->prepare('DELETE FROM users WHERE id = ?');
            $stmt->execute([$id]);
            return "Utilisateur supprimé avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public function updateUser($id, $image_name, $nom, $prenom, $email, $telephone, $role) {
        try {
            $stmt = $this->pdo->prepare('UPDATE users SET image_name = ? nom = ?, prenom = ?, email = ?, telephone = ? WHERE id = ?');
            $stmt->execute([$image_name, $nom, $prenom, $email, $telephone, $id]);

            $stmt = $this->pdo->prepare('UPDATE UserRoles SET role = ? WHERE user_id = ?');
            $stmt->execute([$role, $id]);

            return "Utilisateur mis à jour avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public function getUserById($id) {
        $stmt = $this->pdo->prepare('SELECT users.*, userroles.role FROM users JOIN userroles ON users.id = userroles.user_id WHERE users.id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function getAllUsers() {
        $stmt = $this->pdo->prepare('SELECT * FROM users');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllUsersRole() {
        $stmt = $this->pdo->prepare('SELECT users.*, userroles.role FROM users JOIN userroles ON users.id = userroles.user_id');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
