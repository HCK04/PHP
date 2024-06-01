<?php
require "../database.php";

$statement = $pdo->prepare("SELECT * FROM stagiaire JOIN filiere ON stagiaire.idFiliere = filiere.idFiliere");
$statement->execute();
$stagiaires = $statement->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des Stagiaires</title>
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
            width: 80%;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }

        a {
            text-decoration: none;
            color: #4CAF50;
        }

        a.delete {
            color: red;
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
        <h1>Liste des Stagiaires</h1>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Filière</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($stagiaires as $stagiaire): ?>
                <tr>
                    <td><?php echo $stagiaire['nom']; ?></td>
                    <td><?php echo $stagiaire['prenom']; ?></td>
                    <td><?php echo $stagiaire['intitule']; ?></td>
                    <td>
                        <a href="../views/modifier-stagiaire.view.php?id=<?php echo $stagiaire['idStagiaire']; ?>">Modifier</a> |
                        <a href="../controllers/ajout-stagiaire.controller.php?action=delete&id=<?php echo $stagiaire['idStagiaire']; ?>" class="delete">Supprimer</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="../views/ajout-stagiaire.view.php"><button>Ajouter un Stagiaire</button></a>
    </div>
</body>
</html>
