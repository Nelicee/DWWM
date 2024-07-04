<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once "dbConnect.php";
function estAdmin($userId){
    $pdo = getPDOConnection();
    $stmt = $pdo ->prepare('SELECT role FROM userroles WHERE user_id = ?');
    $stmt->execute([$userId]);
    $userRole = $stmt->fetch();

    return $userRole && $userRole['role'] === 'admin';
}

function verifAdmin(){
if(!isset($_SESSION['user_id'])){
    echo "session utilisateur non définie";
    exit();
}else{
    $userId = $_SESSION['user_id'];
    if(!estAdmin($userId)   ){
        echo "L'utilisateur avec l'ID $userId n'est pas un admin";
        exit();
    }
}
}
?>