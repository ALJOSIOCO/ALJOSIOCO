<?php
error_reporting(0);
$conn = mysqli_connect('localhost','root','','my_db');
$password = $_POST['$user_lastname'];
$upperCase = strtoupper('user_lastname');
echo "$upperCase" ;
?>


<?php
error_reporting(0);
$conn = mysqli_connect('localhost','root','','my_db');
$password = $_POST['$name'];
$upperCase = strtoupper('name');
echo "$upperCase";
?>