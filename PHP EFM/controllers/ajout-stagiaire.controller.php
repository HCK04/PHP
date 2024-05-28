<?php
require "../database.php";

$statement = $pdo->prepare("SELECT * FROM filiere");
$statement->execute();

$filieres = $statement->fetchAll();



