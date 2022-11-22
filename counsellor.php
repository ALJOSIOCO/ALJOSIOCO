<?php
session_start();
$conn=mysqli_connect("localhost","root","","my_db");
if(isset($_POST['login-btn'])){
	$useremployee=$_POST['useremployee'];
	$password=$_POST['password'];
	$query="SELECT * from counsellor where user_employee='$useremployee' and password='$password';";
	$result=mysqli_query($conn,$query);
	if(mysqli_num_rows($result)==1)
	{
    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
    
		      $_SESSION['user_employee']=$row['user_employee'];
          $_SESSION['user_lastname'] = $row['user_lastname'];
          $_SESSION['id'] = $row['id'];
		  $_SESSION['fullnames'] = $row['user_firstname'] . ' ' .$row['user_middlename'] . ' ' . $row['user_lastname'];
          $_SESSION['user_firstname'] = $row['user_firstname'];
          $_SESSION['user_middlename'] = $row['user_middlename'];
          $_SESSION['user_lastname'] = $row['user_lastname'];
          $_SESSION['user_email'] = $row['user_email'];
          $_SESSION['user_contact'] = $row['user_contact']; 
          $_SESSION['password'] = $row['password'];     
    }
		header("Location:table.php");
	}
	else{
    echo("<script>alert('Invalid Username or Password. Try Again!');
          window.location.href = 'counsellor.php';</script>");
  }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Making Lives Better</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<style type="text/css">
	* {
		margin: 0px;
		padding: 0px;
	}
	body {
		font-size: 150%;
		background-image: url(bg.jpg);
	}
	.header {
    width: 30%;
    margin: 0px auto 10px;
    color: white;
    background: whitesmoke;
    text-align: center;
    border: 1px solid #B0C4D3;
    border-bottom: none;
    border-radius: 0px 0px 10px 10px;
    padding: 20px;
    margin-right: 50px;
  }
  .head {
    width: 30%;
    margin: 150px auto 0px;
    color: white;
    background: #384823;
    text-align: center;
    border: 1px solid #B0C4D3;
    border-bottom: none;
    border-radius: 10px 10px 0px 0px;
    padding: 20px;
    margin-right: 50px;
  }
	
	
	
	.input {
		margin: 10px 0px 10px 0px;
	}

	.input-group label {
		display: block;
		text-align: left;
		margin: 3px;
	}

	.input-group input {
		height: 50px;
		width: 93%;
		padding: 5px 10px;
		font-size: 25px;
		border-radius: 5px;
		border: 1px solid black;
	}
	.fa{
		margin-right: 10px;
	}
	.eye{
		position: absolute;
	}
	#hide1{
		display: none;
	}
	.btn {
		padding: 10px;
		font-size: 25px;
		color: white;
		background: #384823;
		border: none;
		border-radius: 5px;
	}
</style>
</head>
<body style="background-image: url(bg.jpg);
  background-attachment: fixed;
  max-width: 100%;  
  background-position: 0px -200px;
  background-size: cover;">
	 <div class="head">
    <h2>LOGIN</h2>
  </div>
  <div class="header">
  	<form action="counsellor.php" method="POST">
			<div class="input-group">
				<input type="text" name="useremployee" placeholder="EMPLOYEE ID" required>
				<i class="zmdi zmdi-account"></i>
			</div><br>
			<div class="input-group">
				<input type="password" name="password" id="Show" placeholder="Password" required>
				
			</div><br>
			<div class="input-group">
				<input type="submit" name="login-btn"  class="btn btn-primary btn-block" value="Login" style="width: 440px; height: 50px; font-size: 25px; " required>
				<div style="color: black;">
				</div>
			</div>
		</form>

</body>
</html>