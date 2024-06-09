<?php

require "loginrole.php";

if($_SERVER["REQUEST_METHOD" == "POST"]){
    $login = $_POST["nom"];
    $psw = $_POST["psw"];

    if(empty($login) || empty($psw)){
        echo "Please fill out the whole thing nigga";
    }

    
}





