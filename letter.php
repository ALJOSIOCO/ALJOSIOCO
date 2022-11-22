<?php 
include 'session-patient.php';
error_reporting(0);
      $error='';
      if (isset($_POST['sl'])){
      $error = "Employee ID or Password is invalid";
      }
      else
      {
      	include 'dbconfig.php';

      	$selectt = mysqli_query($conn, "SELECT * FROM counsellor where user_employee='$user_employee' AND password='$password'");
      	$runn = mysqli_fetch_assoc($selectt);
      	$numm = mysqli_num_rows($selectt);
      	if ($numm == 1) {
      		$_SESSION['user_employee']=$runn['user_employee'];
      		$_SESSION['users'] = $runn['user_firstname'] . ' ' .$runn['user_middlename'] . ' ' . $runn['user_lastname'];
      		$_SESSION['users1']= $runn['user_firstname'] . ' ' .$runn['user_middlename'] . ' ' . $runn['user_lastname'];
      		header( "Refresh:1; url=table.php");
      	}
      	else {
      		$error = "EMPLOYEE ID or Password is invalid";
      	}
      	mysqli_close($conn);
	  }
   	  ?>
<?php 
  $conn = mysqli_connect('localhost','root','','my_db'); 
  $id=$_GET['approve'];
  $rec = mysqli_query($conn, "SELECT * FROM student WHERE id=$id");
  $row = mysqli_fetch_array($rec); 
  $Fullnames=$row['Fullname'];
  $Status=$row['Status'];
  $id=$row['id'];
  $link=$row['link'];
  $user_lastname=$row['user_lastname'];
  $user_firstname=$row['user_firstname'];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Making Lives Better</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="fontawesome-free-5.15.4-web\css\all.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<style type="text/css">

</style>
  </head>
  <body style="background-image: url(qwer.png);
  background-attachment: fixed;
  max-width: 100%;  
  background-position: 0px 0px;
  background-size: cover;">
<div class="form-body" style="margin-top: -50px;">
            
            <div class="form-data">
              <div class="form-head">
                <h2 style="text-align: center;">Appointment Letter</h2>
              </div>
                
  <body>
      <div class="letter" style="padding:50px;" >
    		<p class="first-paragraph" style="margin-top:-120px; font-weight: bold;"><br> <br> <br> <br> Dear Mr/Ms. <?php echo $Fullnames ?><b> </a>,</p>
    		<p> <br>Thank your for using the PHINMA-UPANG Online Student Counselling, you may proceed with counselling session by<?php
                          echo " <a href='".$row['link']."'>clicking here.</a>";
                        ?> </p>
    		<p> Let us both work hand-in-hand in the preparation of performance improvement plan which will be designed based on your comfortability and needs. For the meantime, I’ve prepared some materials relative to your initial issues. </p>
    		<p> If there are other matters hindering your school performance, or you are being unable to balance your work and life issues, kindly, let us know so we may provide the required help. </p>
    		<p> You are a valuable member of our school and we do not want to lose you. We hope to see improved school performance in terms of achievement as well as your behavior. <br> </p>
    		<p> <br> <br>Sincerely,</p>
    		<p  style="color: solid black;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $_SESSION['fullnames'];?></p>
    		<p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Counsellor</p>
	    </div>
	
</body> 
</html>