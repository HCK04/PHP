<?php

$host = "localhost";
$port = "5432";
$dbname = "forum_tari9";
$user = "postgres";
$password = "akram";

$dsn = "pgsql:host={$host};port={$port};dbname={$dbname};user={$user} password={$password}";


try{

    $pdo = new PDO($dsn,$user,$password);
    echo 'Connection Successfuly';

} catch (PDOException $e){
    echo 'Connection Faild : ' . $e->getMessage();
}