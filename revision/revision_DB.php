<?php
$host = 'localhost';
$port = 3306;
$dbname = 'revision';
$user = 'root';
$password = '';


$dsn = "mysql:host={$host}; port={$port}; dbname={$dbname};charset=utf8";


try{
    $pdo = new PDO($dsn, $user, $password);
    echo 'connected successfully';

}
catch(PDOException $e){
    echo 'Connection Failed: ' .$e->getMessage();

}











