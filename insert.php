<?php

require 'pd.php';

//preper method
$statment = $pdo->prepare('INSERT INTO posts (id,titre,contenue) VALUES (:id,:titre,:contenue)');


//Executer la requete
$statment->execute([
    ':id' =>2,
    ':titre' => 'Second Post'
]);



// fetch data
$result = $statment->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
var_dump($result);
echo '<pre>';

?>