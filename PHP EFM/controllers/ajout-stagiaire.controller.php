<?php
require "../database.php";

$statement = $pdo->prepare("SELECT * FROM filiere");
$statement->execute();
$filieres = $statement->fetchAll();

if ($_SERVER['REQUEST_METHOD']== 'POST'){

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    // $dateNaissance	= $_POST['dateNaissance'];
    $photoProfile = "background.png";
    $filiere = $_POST['filiere'];
    $statement = $pdo->prepare("INSERT INTO stagiaire (nom, prenom, photoProfile, idFiliere) 
    VALUES (:nom, :prenom, :photoProfile, :filiere)");
    $statement->execute([
        ':nom' => $nom, 
        ':prenom' => $prenom, 
        // ':dateNaissance' => $dateNaissance,
        ':photoProfile' => $photoProfile,
        ':filiere' => $filiere
    ]);
    header('Location: ../views/liste-stagiaire.view.php');
    exit();
}




