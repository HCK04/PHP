<?php
session_start();
require "revision_DB.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 100px auto;
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h2 {
            color: #4CAF50;
        }
        p {
            color: #333;
            margin-bottom: 20px;
        }
        a {
            color: #4CAF50;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        a:hover {
            color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome, termousa </h2>
        <p>This is your welcome page.</p>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>
