<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
    header("Location: login.view.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Espace Privé</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: sans-serif;
            line-height: 1.5;
            min-height: 100vh;
            background: #f3f3f3;
            flex-direction: column;
            margin: 0;
        }

        .main {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 500px;
            text-align: center;
        }

        h1 {
            color: #4CAF50;
        }

        button {
            padding: 15px;
            border-radius: 10px;
            margin-top: 15px;
            border: none;
            color: white;
            cursor: pointer;
            background-color: #4CAF50;
            width: 100%;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="main">
        <h1>Bienvenue dans l'Espace Privé</h1>
        <p>Vous êtes connecté en tant que <strong style="color: red;"></strong>.</p>
        <form action="../controllers/logout.controller.php" method="post">
            <button type="submit">Logout</button>
        </form>
    </div>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: sans-serif;
            line-height: 1.5;
            min-height: 100vh;
            background: #f3f3f3;
            flex-direction: column;
            margin: 0;
        }

        .main {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 500px;
            text-align: center;
            margin-bottom: 100px;

        }

        h1 {
            color: #4CAF50;
        }

        label {
            display: block;
            width: 100%;
            margin-top: 10px;
            margin-bottom: 5px;
            text-align: left;
            color: #555;
            font-weight: bold;
        }

        input, select {
            display: block;
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            padding: 15px;
            border-radius: 10px;
            margin-top: 15px;
            margin-bottom: 15px;
            border: none;
            color: white;
            cursor: pointer;
            background-color: #4CAF50;
            width: 100%;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="main">
        <h1>Inserer un Nouveau Voyage</h1>
        <form action="../inserer.controller.php" method="POST">
            <label for="nom">Ville Depart</label>
            <input type="text" id="nom" name="nom" placeholder="Entrer le nom">

            <label for="prenom">Ville d'arrive</label>
            <select>
                <?php
                    


                ?>

            </select>

            <label for="nom">Date Voyage</label>
            <input type="text" id="nom" name="nom" placeholder="Entrer le nom">

            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" placeholder="Entrer le nom">

            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" placeholder="Entrer le nom">

            <label for="filiere">Filière</label>
            <select id="filiere" name="filiere">
                <?php foreach ($filieres as $filiere): ?>
                    <option value="<?= $filiere['idFiliere'] ?>"><?= htmlspecialchars($filiere['intitule']) ?></option>
                <?php endforeach; ?>
            </select>

            <label for="photo">Photo</label>
            <input type="file" id="photo" name="photo">

            <button type="submit">Ajouter</button>
        </form>
    </div>
</body>
</html>
