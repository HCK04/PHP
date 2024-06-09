<?php
session_start();
require "../connBD.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];

    if(!empty($login) || !empty($mdp)){
        $statement = $pdo->prepare("SELECT * FROM Employe WHERE utilisateur = :login AND motDePasse = :mdp");
        $statement->execute([
            ':login' => $login,
            ':mdp' => $mdp
        ]);
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        if($result){
            echo "good!!";
            header("Location: ../views/prive.view.php");
            $_SESSION['loggedin'] = $result;

        }else{
            echo "bad";
        }

    }
}