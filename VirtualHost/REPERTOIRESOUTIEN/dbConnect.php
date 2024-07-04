<?php

// function getPDOConnection()
// {
//     $host = 'localhost';
//     $port = '3306';
//     $db = 'repertoire';
//     $user = 'root';
//     $pass = '';
//     $charset = 'utf8mb4';

//     $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";

//     $options = [
//         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//         PDO::ATTR_EMULATE_PREPARES   => false,
//     ];

//     try {
//         return new PDO($dsn, $user, $pass, $options);
//     } catch (PDOException $e) {
//         throw new PDOException($e->getMessage(), (int)$e->getCode());
//     }
// }

function getPDOConnection(){
    $host = 'localhost';
    $port = '3306';
    $db = 'repertoire';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";

    $options = [
        PDO::ATTR_ERRMODE                   => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE        => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES          => false,  
    ];

    try{
        return new PDO($dsn,$user,$pass,$options);
    }catch(PDOException $e){
        throw new PDOException($e->getMessage(),(int)$e->getCode());
    }


} 
