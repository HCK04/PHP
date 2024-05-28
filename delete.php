<?php

require 'pd.php';

//preper method
$statment = $pdo->prepare('DELETE FROM posts WHERE id=:id');


//Executer la requete
$statment->execute([
    ':id' =>2,
]);


// fetch data
$result = $statment->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
var_dump($result);
echo '<pre>';

?>