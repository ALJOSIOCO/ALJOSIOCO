<?php 
	include('dbconfig.php');
	session_start();
	$username=$_SESSION['username'];
	$ses_sql=mysqli_query($conn,"SELECT username FROM patient WHERE username='".$username."'");
	$row=mysqli_fetch_assoc($ses_sql);
	$login_session=$row['username'];
	if (!isset($login_session)) {
		header('Location:index.php');
	}
?>