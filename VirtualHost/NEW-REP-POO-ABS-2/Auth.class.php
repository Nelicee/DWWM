<?php

require_once 'MyDbConnection.php';

class Auth {
    private $pdo;

    public function __construct() {
        $this->pdo = MyDbConnection::getInstance();
    }

    public function startSession() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function estAdmin($userId) {
        $stmt = $this->pdo->prepare('SELECT role FROM UserRoles WHERE user_id = ?');
        $stmt->execute([$userId]);
        $userRole = $stmt->fetch();
        return $userRole && $userRole['role'] === 'admin';
    }

    public function verifierAdmin() {
        $this->startSession();
        if (!isset($_SESSION['user_id'])) {
            echo "Session utilisateur non définie.";
            exit();
        } else {
            $userId = $_SESSION['user_id'];
            if (!$this->estAdmin($userId)) {
                echo "L'utilisateur avec l'ID $userId n'est pas un administrateur.";
                exit();
            }
        }
    }
}
?>
