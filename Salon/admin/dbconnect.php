<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "salon";

$con = new mysqli($host,$user,$pass,$db);
if (!$con)
{
    echo "There are some problems while connecting to the Database";
}

?>