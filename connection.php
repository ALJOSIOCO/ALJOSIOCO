<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "my_db";
$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn){
	die("<script>alert('Connection Failed.')</script>");
}

$conn = mysqli_connect('localhost', 'root', '', 'my_db') or die("Connection Failed" .mysqli_error());

?>