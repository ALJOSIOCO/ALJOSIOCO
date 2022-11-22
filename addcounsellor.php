<?php 
  include 'session-admin.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<script>
		function lettersOnly(input){
            var regx = /[^a-z || ^ ]/gi;
            input.value = input.value.replace(regx, "");
        }
        
	</script>
  <title>ADD COUNSELLOR</title>
  <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
  
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url(555.png);
  background-attachment: fixed;
  max-width: 100%; 
  background-position: -50px -500px;
  background-size: cover;">
<link rel="stylesheet" href="style2.css">
<br></br>
<div class="container">
	<h2 style="text-align: center;"><b>ADD COUNSELLOR</b></h2>
	<form action="" method="POST">
		<div class="form-group">
			<label>Last Name</label>
			<input type="text" onkeyup="lettersOnly(this)"  class="form-control" name="user_lastname" placeholder="Last Name">
		</div>
		<div class="form-group">
			<label for="firstname">First Name</label>
			<input type="text" onkeyup="lettersOnly(this)" name="user_firstname" class="form-control" placeholder="First Name">
		</div>
		<div class="form-group">
			<label for="middlename">Middle Initial</label>
			<input type="text" onkeyup="lettersOnly(this)" name="user_middlename" class="form-control" placeholder="If None Leave It Blank">
		</div>
		<div class="form-group">
			<label for="employee">Employee ID</label>
			<input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
        		type = "number" maxlength = "9" name="user_employee" class="form-control" placeholder="Employee ID">
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" name="user_email" class="form-control" placeholder="Email">
		</div>
		<div class="form-group">
			<label>Contact</label>
			<input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
        		type = "number" maxlength = "11" name="user_contact" class="form-control" placeholder="Contact">
		</div>
		<div class="input-group">
			<button type="submit" name="insert-btn" class="btn btn-primary">Submit</button>
			<a class="btn btn-primary" href="viewcounsellor.php" style="margin-left: 80px;">VIEW COUNSELLOR</a><button type="reset" value="Reset" class="btn btn-primary" style="margin-left: 80px;">Reset </button>
		</div>

</form>
<?php
    $conn = mysqli_connect('localhost','root','','my_db');

    if (isset($_POST['insert-btn'])){

    	$user_lastname = strtoupper($_POST['user_lastname']);
    	$user_firstname = strtoupper($_POST['user_firstname']);
    	$user_middlename = strtoupper($_POST['user_middlename']);
    	$user_employee = strtoupper($_POST['user_employee']);
    	$user_email = $_POST['user_email'];
    	$user_contact = strtoupper($_POST['user_contact']);

    	$insert = "INSERT INTO counsellor(user_lastname,user_firstname,user_middlename,user_employee,password,user_email,user_contact) VALUES('$user_lastname', '$user_firstname', '$user_middlename','$user_employee','$user_lastname', '$user_email', '$user_contact')";
    	    $run_insert = mysqli_query($conn, $insert);
    	    if($run_insert === true){
    	    	echo "Data has been Inserted";

    	    } else {
    	    	echo "Failed Try Again";
    	    }
    }

	?>
</div>

</body>
</html>
