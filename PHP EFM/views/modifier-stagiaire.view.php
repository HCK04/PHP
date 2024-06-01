<?php
require "../database.php";

$id = $_GET['id'];
$statement = $pdo->prepare("SELECT * FROM stagiaire WHERE idStagiaire = :id");
$statement->execute([':id' => $id]);
$stagiaire = $statement->fetch();

$statement = $pdo->prepare("SELECT * FROM filiere");
$statement->execute();
$filieres = $statement->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Modifier Stagiaire</title>
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
        <h1>Modifier Stagiaire</h1>
        <form action="../controllers/ajout-stagiaire.controller.php?action=modify&id=<?php echo $id; ?>" method="POST">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" value="<?php echo $stagiaire['nom']; ?>" placeholder="Entrer le nom">

            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" name="prenom" value="<?php echo $stagiaire['prenom']; ?>" placeholder="Entrer le prénom">

            <label for="filiere">Filière</label>
            <select id="filiere" name="filiere">
                <?php foreach ($filieres as $filiere): ?>
                <option value="<?php echo $filiere['idFiliere']; ?>" <?php if ($filiere['idFiliere'] == $stagiaire['idFiliere']) echo 'selected'; ?>><?php echo $filiere['intitule']; ?></option>
                <?php endforeach; ?>
            </select>

            <button type="submit">Modifier</button>
        </form>
    </div>
</body>
</html>
