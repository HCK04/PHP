<?php
require "../database.php";

$statement = $pdo->prepare("SELECT * FROM filiere");
$statement->execute();
$filieres = $statement->fetchAll();

$action = $_GET['action'] ?? '';
$id = $_GET['id'] ?? '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $photoProfile = "background.png";
    $filiere = $_POST['filiere'];

    if ($action == 'modify' && !empty($id)) {
        $statement = $pdo->prepare("UPDATE stagiaire SET nom = :nom, prenom = :prenom, photoProfile = :photoProfile, idFiliere = :filiere WHERE idStagiaire = :id");
        $statement->execute([
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':photoProfile' => $photoProfile,
            ':filiere' => $filiere,
            ':id' => $id
        ]);
    } else {
        $statement = $pdo->prepare("INSERT INTO stagiaire (nom, prenom, photoProfile, idFiliere) VALUES (:nom, :prenom, :photoProfile, :filiere)");
        $statement->execute([
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':photoProfile' => $photoProfile,
            ':filiere' => $filiere
        ]);
    }
    header('Location: ../views/liste-stagiaire.view.php');
    exit();
}

if ($action == 'delete' && !empty($id)) {
    $statement = $pdo->prepare("DELETE FROM stagiaire WHERE idStagiaire = :id");
    $statement->execute([':id' => $id]);
    header('Location: ../views/liste-stagiaire.view.php');
    exit();
}
?>
