<?php

session_start();
require "revision_DB.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $login = $_POST['nom'];
    $psw = $_POST['motpasse'];

    if(empty($login) and empty($psw)){
        header ("location: login.php");
        echo "Enter login credentials";

    }else{
            try{
                $query = "SELECT * FROM admin WHERE nom=:login AND motPasse=:psw";
                $stmt = $pdo->prepare($query);
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($result) {
                    echo "Login successful";
                    header("Location: welcome.php");
                } 
                    else {
                    echo "Invalid username or password";
                    
                }
            } catch(PDOException $e) {
                echo "Login failed: " . $e->getMessage();
        }
    }
}

?>