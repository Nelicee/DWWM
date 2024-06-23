<?php
phpinfo();
?>
<?php
$host = 'localhost';
$port = '3306';
$db = 'entreprise';
$user = 'root';
$pwd = '';
$charset = 'utf8mb4';


$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try{ 

    $pdo = new PDO($dsn,$user,$pwd,$options);
    echo "Connexion réussie à la base de données";
}
catch(PDOException $e){
 throw new PDOException($e->getMessage(),(int)$e->getCode());

}



?>



