<?php 
include 'session-admin.php';
?>
<?php
error_reporting(0);
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

  <title>EDIT COUNSELLOR</title>
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
<link rel="stylesheet" href="style1.css">
<body style="background-image: url(555.png);
  background-attachment: fixed;
  max-width: 100%; 
  background-position: -50px -500px;
  background-size: cover;">
<body>
<br></br>
<div class="container">
  <h2 style="text-align: center;"><b>EDIT COUNSELLOR</b></h2>
  	<?php
        $conn = mysqli_connect('localhost', 'root', '', 'my_db');
            if(isset($_GET['edit'])){
            $edit_id = $_GET['edit'];

            $select = "SELECT * FROM counsellor WHERE id='$edit_id'";
            $run = mysqli_query($conn,$select);
            $row_user = mysqli_fetch_array($run);
                   $user_lastname = strtoupper($row_user['user_lastname']);
                   $user_firstname = strtoupper($row_user['user_firstname']);
                   $user_middlename = strtoupper($row_user['user_middlename']);
	               $user_employee = strtoupper($row_user['user_employee']);
                 $password = strtoupper($row_user['user_lastname']);
	               $user_email = $row_user['user_email'];
	               $user_contact = strtoupper($row_user['user_contact']);
    } 
    ?> 
  <form action="" method="POST">
    <div class="form-group">
    	<label>Last Name</label>
				<input type="text" onkeyup="lettersOnly(this)" class="form-control" name="user_lastname" value="<?php echo $user_lastname; ?>" placeholder="Lastname">
			</div>
			<div class="form-group">
				<label for="firstname">First Name</label>
				<input type="firstname" onkeyup="lettersOnly(this)" name="user_firstname" class="form-control" value="<?php echo $user_firstname; ?>" placeholder="First Name">
			</div>
			<div class="form-group">
				<label for="middlename">Middle Initial</label>
				<input type="middlename" onkeyup="lettersOnly(this)" name="user_middlename" class="form-control" value="<?php echo $user_middlename; ?>" placeholder="Middle Initial">
			</div>
			<div class="form-group">
				<label for="employee">Employee ID</label>
				<input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
        		type = "number" maxlength = "10"  name="user_employee" class="form-control" value="<?php echo $user_employee; ?>" placeholder="Employee ID">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="user_email" value="<?php echo $user_email; ?>" class="form-control"
				placeholder="Email">
			</div>
			<div class="form-group">
				<label>Contact</label>
				<input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
        		type = "number"  maxlength = "11"  name="user_contact" value="<?php echo $user_contact; ?>" class="form-control" placeholder="Contact">
			</div>
			<div class="input-group">
				<button type="submit" name="insert-btn" class="btn btn-primary">Submit</button><a class="btn btn-primary" href="viewcounsellor.php" style="margin-left: 80px;">VIEW COUNSELLOR</a><button type="reset" value="Reset" class="btn btn-primary" style="margin-left: 80px;">Reset </button>
			</div>
  </form>
 <?php
    $conn = mysqli_connect('localhost', 'root','','my_db');

    if(isset($_POST['insert-btn'])){
    	$euser_lastname = strtoupper($_POST['user_lastname']);
    	$euser_firstname = strtoupper($_POST['user_firstname']);
    	$euser_middlename = strtoupper($_POST['user_middlename']);
    	$euser_employee = strtoupper($_POST['user_employee']);
      $epassword = strtoupper($_POST['user_lastname']);
    	$euser_email = $_POST['user_email'];
    	$euser_contact = strtoupper($_POST['user_contact']);

    	$updates = "UPDATE counsellor SET user_lastname='$euser_lastname', user_firstname='$euser_firstname', user_middlename='$euser_middlename',
    	user_employee='$euser_employee', password='$euser_lastname', user_email='$euser_email', user_contact='$euser_contact' WHERE id=$edit_id";

    	$run_updates = mysqli_query($conn,$updates);
    	if($run_updates === true){
    		echo "Data has been Updated";
    	} else {
    		echo "Failed Try Again";
    	}
    }
 ?>

</div>

</body>
</html>