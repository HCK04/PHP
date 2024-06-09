<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $destination = $_POST['destination'];
    $nombre = $_POST['nombre'];

    if (empty($nom) || empty($prenom) || empty($destination) || empty($nombre)) {
        echo "Tous les champs doivent être remplis.";
        exit;
    }


    $prix_billet = 2000;
    $prix_total = $prix_billet * $nombre;

    if (($destination) == "london") {
        $prix_total *= 0.90;
    }

    if ($nombre > 5) {
        $prix_total *= 0.95;
    }

    echo "Bonjour $prenom $nom, <br>";
    echo "Vous avez reserve $nombre billet(s) pour $destination. <br>";
    echo "Le prix total est de  . ($prix_total, 2)";
}
?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Reservation</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

h1 {
    color: #333;
}

form {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
}

label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
}

input[type="text"],
input[type="number"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    border: none;
    border-radius: 4px;
    color: white;
    font-weight: bold;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}





    </style>
</head>
<body>
    <h1></h1>
    <form action="index.php" method="POST">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom" required><br><br>

        <label for="destination">Destination:</label>
        <select>
            <option>Tari9</option>
            <option><?php $london ?></option>
            <option>Tari9</option>
        </select>

        <label for="nombre">Nombre de billets:</label>
        <input type="number" id="nombre" name="nombre" min="1" required><br><br>

        <input type="submit" value="Réserver">
    </form>
</body>
</html>
