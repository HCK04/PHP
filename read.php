<?php

require 'pd.php';

$statement = $pdo->prepare('SELECT * FROM posts');


//Executer la requete
$statement->execute();


// fetch data
$result = $statement->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
var_dump($result);
echo '</pre>';