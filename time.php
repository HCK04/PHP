<?php


    $output = date("Y"); // Year

    $output = date("m");  // month
    
    $output = date("d");   // daY

    $output = date('d/m/Y'); // full date

    $output = date('w'); // week

    $output = date('S'); // second

    $output = date('i'); // minute

    $output = date('H'); // H hours

    ///////////////////////

    $todaY = strtotime('05/09/2024') ;

    $output = date('d-m-Y',$todaY);

    echo $output;



    // FUNCTIONS:

    $salutation = "Bonjour";
    $output = strlen($salutation);
    $output = strtolower($salutation);
    $output = strtoupper($salutation);
    $output = trim($salutation);
    echo $output;

