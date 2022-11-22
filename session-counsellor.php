<?php 
	include('dbconfig.php');
	session_start();
	$username=$_SESSION['user_employee'];
	$ses_sql=mysqli_query($conn,"SELECT user_employee FROM counsellor WHERE user_employee='$username' ORDER BY ID");
	$row=mysqli_fetch_assoc($ses_sql);
	$login_session=$row['user_employee'];
	if (!isset($login_session)) {
		header('Location:counsellor.php');
	}
?>