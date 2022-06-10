<?php

define("MINIMUM_ID_LENGTH", 5);
define("MAXIMUM_ID_LENGTH", 20);
define("MINIMUM_PASSWORD_LENGTH", 6);
define("MAXIMUM_PASSWORD_LENGTH", 15);
define("MAX_FIRST_NAME_LENGTH", 20);
define("MAX_LAST_NAME_LENGTH", 30);
define("MAXIMUM_EMAIL_LENGTH", 255);



function db_connect()
{


    $conn = pg_connect("host=127.0.0.1 dbname=modil_db user=modil password=100657755" );


    return $conn;
    
}

function getDataEST()
{

    date_default_timezone_set('America/Toronto');

    return date("Y-m-d",time());
}

function displayCopyrightInfo()
{
    $year = date('Y');

    echo "<p>&copy; Luv Modi, $year </p>";
}



