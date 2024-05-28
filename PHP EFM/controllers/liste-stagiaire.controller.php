<?php
require "../database.php";
$statement = $pdo->prepare("SELECT idStagiaire, nom, prenom, stagiaire.idFiliere, intitule FROM stagiaire, filiere WHERE stagiaire.idFiliere = filiere.idFiliere");
$statement->execute();

$stagiaires = $statement->fetchAll(PDO::FETCH_ASSOC);




