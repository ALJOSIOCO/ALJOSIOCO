<?php
session_start();
$conn=mysqli_connect("localhost","root","","my_db");
if(isset($_POST['login'])){
  $username=$_POST['username'];
  $password=$_POST['password'];
  $query="SELECT * from patient where username='$username' and password='$password';";
  $result=mysqli_query($conn,$query);
  if(mysqli_num_rows($result)==1)
  {
    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
    
          $_SESSION['username']=$row['username'];
          $_SESSION['name'] = $row['name'];
          $_SESSION['id'] = $row['id'];
          $_SESSION['user_firstname'] = $row['user_firstname'];
          $_SESSION['user_middlename'] = $row['user_middlename'];
          $_SESSION['fullname'] = $row['user_firstname'] . ' ' .$row['user_middlename'] . ' ' . $row['name'];
          $_SESSION['email'] = $row['email'];
          $_SESSION['contact'] = $row['contact']; 
          $_SESSION['password'] = $row['password'];  
          $_SESSION['user_address'] = $row['user_address']; 
          $_SESSION['yearlevel'] = $row['yearlevel'];  
          $_SESSION['course'] = $row['course'];
          $_SESSION['date'] = $row['date'];
          $_SESSION['issues'] = $row['issues'];
          $_SESSION['others'] = $row['others'];
          $_SESSION['status'] = $row['status'];
          $_SESSION['time'] = $row['time'];
          $_SESSION['dob'] = $row['dob'];
    }
    header("Location:counselling.php");
  }
  else{
    echo("<script>alert('Invalid Username or Password. Try Again!');
          window.location.href = 'index.php';</script>");
  }
}
?>
<!DOCTYPE html>
<html>
<title>Making Lives Better</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="fontawesome-free-5.15.4-web\css\all.css">

<style type="text/css">
  .nav-item{
    margin-right: 50px;
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
    margin-right: 10px;
  }
  .head {
    width: 30%;
    margin: 50px auto 0px;
    color: white;
    background: #384823;
    text-align: center;
    border: 1px solid #B0C4D3;
    border-bottom: none;
    border-radius: 10px 10px 0px 0px;
    padding: 20px;
    margin-right: 10px;
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
    margin-bottom: 25px;
  }
  .button {
    padding: 5px;
    font-size: 25px;
    color: white;
    background: #384823;
    border: none;
    border-radius: 5px;
    margin-left: 120px;
  }
  .form-body{
    color: black;
  }
 
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
<body style="background-image: url(123.jpg);
  background-attachment: fixed;
  max-width: 100%;  
  background-position: -50px 10px;
  background-size: cover;">
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
  		<div class="container-fluid">
    		<a class="navbar-brand" href="#"><img class="logo" src="logo.png">PHINMA-UPANG Online Student Counselling</a>
    		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      		<span class="navbar-toggler-icon"></span>
    	</button>
    	<div class="collapse navbar-collapse" id="navbarSupportedContent">
      		<ul class="navbar-nav me-auto mb-2 mb-lg-0">
        	<li class="nav-item">
          	<a class="nav-item"></a>
        </li>
      	</ul>
      	<form class="d-flex">
      		<ul class="navbar-nav me-auto mb-2 mb-lg-0">
        	<li class="nav-item">
          	<a class="nav-link active"  aria-current="page" href="">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="contact.php">Contact</a>
      	</form>
    	</div>
  		</div>
		</nav>
	</header>
<body>
  <div class="head">
    <h2>LOGIN</h2>
  </div>
  <div class="header">
  	<form  method="post" action="index.php">
	
    <div class="container">
     <div class="input-group">
      <input type="text" placeholder="Enter Username" name="username" required>
     </div>
    <div class="input-group">    
      <input type="password" placeholder="Enter Password" name="password" required>
    </div>
    <div class="input-group">
		<button type="submit" name="login" value="" class="btn btn-primary btn-block" style="width: 420px; height: 50px; font-size: 25px; ">Login</button>
    </div>
    </div>
    </form>
  </div>

</body>
</body>
</html>
     