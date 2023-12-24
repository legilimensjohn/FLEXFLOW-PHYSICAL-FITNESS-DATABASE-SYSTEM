<?php

$url = "localhost";
$username = "root";
$password = "";

$db = "flexflow";

$conn = mysqli_connect($url, $username, $password, $db);

if(!$conn){
    die('Could not connect to MySql' . mysqli_connect_error());
}
?>