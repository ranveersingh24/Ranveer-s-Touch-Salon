<?php


if (isset($_GET["id"]))
{
    $id = $_GET["id"];
    
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "salon";

    $con = new mysqli($host,$user,$pass,$db);
    
    $sql = "DELETE FROM contact WHERE id=$id";
    $con ->query($sql);
}

header("location:test.php");
exit;

?>