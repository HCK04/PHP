<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            padding: 20px;
            text-align: center;
        }
        .title {
            font-size: 24px;
            margin-bottom: 16px;
        }
        .input-field {
            font-size: 16px;
            margin-bottom: 12px;
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .button {
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<form action="database_connect.php" method="post">
    <div class="card">
        <div class="title">Registration Form</div>
        <div>
            <label for="nom">Nom:</label><br>
            <input type="text" id="nom" class="input-field" placeholder="Entrez votre nom" nom=>
        </div>
        <div>
            <label for="age">Age:</label><br>
            <input type="number" id="age" class="input-field" placeholder="Entrez votre âge">
        </div>
        <div>
            <label for="email">Email:</label><br>
            <input type="email" id="email" class="input-field" placeholder="Entrez votre adresse email">
        </div>
        <div>
            <label for="password">Mot de passe:</label><br>
            <input type="password" id="password" class="input-field" placeholder="Entrez votre mot de passe">
        </div>
        <button class="button">Enregistrer</button>
    </div>
</form>
</body>
</html>
