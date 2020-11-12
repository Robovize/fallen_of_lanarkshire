<?php
$server = "localhost";
$username = "root";
$password = "";

$dbname = "fallen_of_lanarkshire";

$conn = mysqli_connect($server, $username, $password, $dbname);

if (!$conn){
    die ("Connection failed: " . mysqli_connect_error());
}

?>