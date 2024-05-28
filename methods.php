<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP METHODS</title>
</head>
<body>
    
</body>
</html>
    <?php
        $list = ['Akram'];
        echo $list[0] ?? '';

        echo "<h1>Server Dump</h1>";
        
        var_dump($_SERVER);

        echo "<h1>PHP methods</h1>";


        // $GLOBALS
        // $_SERVER
        // $_REQUEST
        // $_POST
        // $_GET
        // $_FILES
        // $_ENV
        // $_COOKIE
        // $_SESSION



        echo "<br>";
        var_dump($_GET);
        echo $_GET['nom'];

    ?>
    <form action="post">
        <input type="text" id="nom", name="">

    </form>


