<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "Alanturing.1912";
$dbname = "casamiento";

$conn = mysqli_connect ($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn){
    die ("No hay conexion: ".mysqli_connect_error());
}
?>