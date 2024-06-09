<?php

$host = "localhost";
$port = 3306;
$dbname = "rolelogin";
$user = "root";
$password = '';

$dsn = "mysql:host={$host}; port={$port}; dbname={$dbname}";

try{
      $pdo = new PDO($dsn, $user, $password);
      echo "Connected!";
} catch (PDOException $e){
      echo "error" . $e->getMessage();
}
?>
<!DOCTYPE html>
<html>
<head>
      <title>HTML Login Form</title>
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
    padding: 10px 20px;
    transition: transform 0.2s;
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

input {
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

.wrap {
    display: flex;
    justify-content: center;
    align-items: center;
}


      </style>
</head>
<body>
      <div class="main">
            <h3>Enter votre login</h3>
            <form action="">
                  <label for="first">
                        Username:
                  </label>
                  <input type="text" 
                         id="first" 
                         name="login" 
                         placeholder="Enter your Username">

                  <label for="password">
                        Password:
                  </label>
                  <input type="password"
                         id="password" 
                         name="psw"
                         placeholder="Enter your Password">

                  <div class="wrap">
                        <button type="submit">
                              Submit
                        </button>
                  </div>
            </form>
      </div>
</body>
</html>
