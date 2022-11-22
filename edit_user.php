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

  <title>EDIT STUDENT</title>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
</head>
<link rel="stylesheet" href="style1.css">
<body style="background-image: url(555.png);
  background-attachment: fixed;
  max-width: 100%; 
  background-position: -50px -500px;
  background-size: cover;">
<body>
<br></br>
<div class="container" style="width: 565px">
  <h2 style="text-align: center;">EDIT STUDENT</h2>
    <?php
        $conn = mysqli_connect('localhost', 'root', '', 'my_db');
            if(isset($_GET['edit'])){
            $edit_id = $_GET['edit'];

            $select = "SELECT * FROM patient WHERE id='$edit_id'";
            $run = mysqli_query($conn,$select);
            $row_user = mysqli_fetch_array($run);
                   $name = strtoupper($row_user['name']);
                   $user_firstname = strtoupper($row_user['user_firstname']);
                   $user_middlename = strtoupper($row_user['user_middlename']);
                 $username = strtoupper($row_user['username']);
                 $yearlevel = strtoupper($row_user['yearlevel']);
                 $course = strtoupper($row_user['course']);
                 $email = $row_user['email'];
                 $contact = strtoupper($row_user['contact']);
                 $dob = strtoupper($row_user['dob']);
                 $user_address = strtoupper($row_user['user_address']); 
    } 
    ?> 
  <form action="" method="POST">
    <div class="form-group">
      <label>Lastname</label>
        <input type="text" onkeyup="lettersOnly(this)" class="form-control" name="name" value="<?php echo $name; ?>" placeholder="Lastname">
      </div>
      <div class="form-group">
        <label for="firstname">FirstName</label>
        <input type="firstname" onkeyup="lettersOnly(this)" name="user_firstname" class="form-control" value="<?php echo $user_firstname; ?>" placeholder="First Name">
      </div>
      <div class="form-group">
        <label for="middlename">Middle Initial</label>
        <input type="middlename" onkeyup="lettersOnly(this)" name="user_middlename" class="form-control" value="<?php echo $user_middlename; ?>" placeholder="Middle Initial">
      </div>
      <div class="form-group">
        <label for="studentno">Student No.</label>
        <input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
        type = "numbers"
        maxlength = "13" name="username" class="form-control" value="<?php echo $username; ?>" placeholder="Student No.">
      </div>
      <div class="form-group">
        <label for="yearlevel">Year Level</label>
        <input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
        type = "text"
        maxlength = "8" name="yearlevel" class="form-control" value="<?php echo $yearlevel; ?>" placeholder="eg. 1st Year">
      </div>
      <div class="form-group">
        <label for="studentno">Course</label>
        <input type = "text" onkeyup="lettersOnly(this)" name="course" class="form-control" value="<?php echo $course; ?>" placeholder="Course">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" value="<?php echo $email; ?>" class="form-control"
        placeholder="Email">
      </div>
      <div class="form-group">
        <label>Contact</label>
        <input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
        type = "number"
        maxlength = "11" name="contact" value="<?php echo $contact; ?>" class="form-control" placeholder="Contact">
      </div>
      <div class="form-group">
        <label>Birthdate</label>
        <input type="date" name="dob" value="<?php echo $dob; ?>" id="dems" class="form-control" placeholder="Birthdate">
      </div>
      <div class="form-group">
        <label>Address</label>
        <input type="address" name="user_address" value="<?php echo $user_address; ?>" class="form-control" placeholder="Complete Address">
      </div>
      <div class="input-group">
        <button type="submit" name="insert-btn" class="btn btn-primary">Submit</button><a class="btn btn-primary" href="view_user.php" style="margin-left: 120px;">VIEW STUDENT</a><button type="reset" value="Reset" class="btn btn-primary" style="margin-left: 140px">Reset </button>
      </div>
				
  </form>
<script>
   $(document).ready(function(){
    var minDate = new Date();
    $("#dems").datepicker({

    }
   }
  </script>
  </form>

 <?php  
    $conn = mysqli_connect('localhost','root','','my_db');

    if (isset($_POST['insert-btn'])){
      $ename = strtoupper($_POST['name']);
      $euser_firstname = strtoupper($_POST['user_firstname']);
      $euser_middlename = strtoupper($_POST['user_middlename']);
      $eusername = strtoupper($_POST['username']);
      $eyearlevel = strtoupper($_POST['yearlevel']);
      $ecourse = strtoupper($_POST['course']);
      $eemail = $_POST['email'];
      $econtact = strtoupper($_POST['contact']);
      $edob = strtoupper($_POST['dob']);
      $euser_address = strtoupper($_POST['user_address']);
      $updates = "UPDATE patient SET name='$ename', user_firstname='$euser_firstname', user_middlename='$euser_middlename', username='$eusername', yearlevel='$eyearlevel', course='$ecourse', email='$eemail', contact='$econtact', dob='$edob',user_address='$euser_address' WHERE id=$edit_id";
    $run_updates = mysqli_query($conn,$updates);
    if($run_updates === true){
      echo "Data has been Updated";
    } else{
      echo "Failed Try again";
      }
}
?>

</div>

</body>
</html>