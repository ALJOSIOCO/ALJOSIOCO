<?php 
	include('dbconfig.php');
	session_start();
	$username=$_SESSION['username'];
	$ses_sql=mysqli_query($conn,"SELECT username FROM admin WHERE username='$username' ORDER BY ID");
	$row=mysqli_fetch_assoc($ses_sql);
	$login_session=$row['username'];
	if (!isset($login_session)) {
		header('Location:adminlogin.php');
	}
?>