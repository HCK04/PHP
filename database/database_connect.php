<?php

require 'pd.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['psw'];

$sql = 'SELECT * FROM users';

$statement = $pdo->prepare($sql);
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
var_dump($result);
echo '</pre>';

}
?>
