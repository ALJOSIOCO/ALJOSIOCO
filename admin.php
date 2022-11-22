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

  <title>ADD STUDENT</title>
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
<body style="background-image: url(555.png);
  background-attachment: fixed;
  max-width: 100%; 
  background-position: -50px -500px;
  background-size: cover;">
<link rel="stylesheet" href="style2.css">
<br></br>
<div class="container" style="width: 565px">
  <h2 style="text-align: center;"><b>ADD STUDENT</b></h2>
  <form action="" method="POST">
    <div class="form-group">
    	<label>Last Name</label>
				<input type="text" onkeyup="lettersOnly(this)" class="form-control" name="name"  placeholder="Lastname"57	>		</div>
			<div class="form-group">
				<label for="firstname">First Name</label>
				<input type="text" onkeyup="lettersOnly(this)" name="user_firstname" class="form-control"  placeholder="First Name">
			</div>
			<div class="form-group">
				<label for="middlename">Middle Initial</label>
				<input type="text" onkeyup="lettersOnly(this)" name="user_middlename" class="form-control"  placeholder="If None Leave It Blank">
			</div>
			<div class="form-group">
        <label for="studentno">Student No.</label>
        <input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
        type = "numbers"
        maxlength = "13" name="username" class="form-control" value="<?php echo $username; ?>" placeholder="eg. 03-1718-01234">
      </div>
			<div class="form-group" class="form-group">  
				<label for="yearlevel">Year Level</label>
                   <select style="height: 35px" name="yearlevel" value="<?php echo $yearlevel; ?>" required>
                     <option value="" style="background-color: green">Select</option>
                     <option value="1ST YEAR &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;">1ST YEAR &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</option>
                     <option value="2ND YEAR &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;">2ND YEAR &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</option>
                     <option value="3RD YEAR &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;">3RD YEAR &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</option>
                     <option value="4TH YEAR &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;">4TH YEAR &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</option>
                     <option value="5TH YEAR &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;">5TH YEAR &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</option>
                   </select>           
                  </div>
			<div class="form-group" class="form-group">  
				<label for="course" >Course</label>
                   <select name="course" style="height: 35px"> value="<?php echo $course; ?>" required>
                     <option value="" style="background-color: green">Select</option>
                     <option value="Bachelor of Science in Information Technology">Bachelor of Science in Information Technology</option>
                     <option value="Bachelor of Science in Architecture">Bachelor of Science in Architecture</option>
                     <option value="Bachelor of Science in Civil Engineering">Bachelor of Science in Civil Engineering</option>
                     <option value="Bachelor of Science in Electrical Engineering">Bachelor of Science in Electrical Engineering</option>
                     <option value="Bachelor of Science in Electronics Engineering">Bachelor of Science in Electronics Engineering</option>
                     <option value="Bachelor of Science in Computer Engineering">Bachelor of Science in Computer Engineering</option>
                     <option value="Bachelor of Science in Mechanical Engineering">Bachelor of Science in Mechanical Engineering</option>
                     <option value="Bachelor of Arts in Communication">Bachelor of Arts in Communication</option>
                     <option value="Bachelor of Arts in Political Science">Bachelor of Arts in Political Science</option>
                     <option value="Bachelor of Education">Bachelor of Education</option>
                     <option value="Bachelor of Education major in Pre-School Education">Bachelor of Education major in Pre-School Education</option>
                     <option value="Bachelor of Secondary Education major in Biological Science">Bachelor of Secondary Education major in Biological Science</option>
                     <option value="Bachelor of Secondary Education major in English">Bachelor of Secondary Education major in English</option>
                     <option value="Bachelor of Secondary Education major in Mathematics">Bachelor of Secondary Education major in Mathematics</option>
                     <option value="Bachelor of Science in Criminology">Bachelor of Science in Criminology</option>
                     <option value="Bachelor of Science in Accountancy">Bachelor of Science in Accountancy</option>
                     <option value="Bachelor of Science in Accounting Technology">Bachelor of Science in Accounting Technology</option>
                     <option value="Bachelor of Science in Business Administration major in Financial Management">Bachelor of Science in Business Administration major in Financial Management</option>
                     <option value="Bachelor of Science in Business Administration major in Marketing Management">Bachelor of Science in Business Administration major in Marketing Management</option>
                     <option value="Bachelor of Science in Hospitality Management">Bachelor of Science in Hospitality Management</option>
                     <option value="Bachelor of Science in Tourism Management">Bachelor of Science in Tourism Management</option>
                     <option value="Bachelor of Science in Nursing">Bachelor of Science in Nursing</option>
                     <option value="Bachelor in Medical Laboratory Science">Bachelor in Medical Laboratory Science</option>
                     <option value="Bachelor of Science in Physical Therapy">Bachelor of Science in Physical Therapy</option>
                     <option value="Bachelor of Science in Pharmacy">Bachelor of Science in Pharmacy</option>
                     <option value="Diploma in Midwifery">Diploma in Midwifery</option>
                     <option value="Bachelor of Science in Midwifery">Bachelor of Science in Midwifery</option>
                   </select>           
                  </div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email"  class="form-control"
				placeholder="eg. juandelacruz@gmail.com">
			</div>
			<div class="form-group">
				<label>Contact</label>
				<input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
        type = "number"
        maxlength = "11" name="contact"  class="form-control" placeholder="Contact">
			</div>
			<div class="form-group">
				<label>Birthdate</label>
			    <input type="date" name="dob" value="?php echo $dob; ?>" style="border: 1px solid black;" id="demo" class="form-control"  style="width: 100%; height: 100%; border-style: none;" required>
			</div>
			<div class="form-group">
				<label>Address</label>
				<input type="address" name="user_address"  class="form-control" placeholder="Complete Address">
			</div>
			<div class="input-group">
				<button type="submit" name="insert-btn" class="btn btn-primary">Submit </button><a class="btn btn-primary" href="view_user.php" style="margin-left: 120px;">VIEW STUDENT</a><button type="reset" value="Reset" class="btn btn-primary" style="margin-left: 140px">Reset </button>
			</div>
  </form>

 <?php  
    $conn = mysqli_connect('localhost','root','','my_db');

    if (isset($_POST['insert-btn'])){

	$name = $_POST['name'];
	$user_firstname = $_POST['user_firstname'];
	$user_middlename = $_POST['user_middlename'];
	$username = $_POST['username'];
	$yearlevel = $_POST['yearlevel'];
	$course = $_POST["course"];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$dob = $_POST['dob'];
	$user_address = $_POST['user_address'];
	$insert = "INSERT INTO patient(name,user_firstname,user_middlename,username,yearlevel,course,email,password,contact,dob,user_address) 
					VALUES('$name', '$user_firstname', '$user_middlename', '$username', '$yearlevel', '$course', '$email', '$name', '$contact', '$dob', '$user_address')";
		$run_insert = mysqli_query($conn, $insert);
		if($run_insert === true){
			echo "Data has been Inserted";
		}else{
			echo "Failed Try again";
			}
}
?>
</div>
<script>
   $(document).ready(function(){
    var minDate = new Date();
    $("#demo").datepicker({

    }
   }
  </script>
</body>
</html>
