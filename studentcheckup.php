<?php 
  include 'session-patient.php';
  $conn = mysqli_connect('localhost','root','','my_db'); 
  $id=$_GET['followup'];
  $rec = mysqli_query($conn, "SELECT * FROM counsellinghistory WHERE sid=$id");
  $row = mysqli_fetch_array($rec); 
  $fullname=$row['fullname'];
  $date=$row['date'];
  $id=$row['id'];
  $issues=$row['issues'];
  $others=$row['others'];
  $time=$row['time'];
  $link=$row['link'];
  $subject=$row['subject'];
  $message=$row['message'];
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
                <h2 style="text-align: center;">Re-Counselling letter</h2>
              </div>
                
  <body>
      <div class="letter" style="padding:50px;" >
        <p class="first-paragraph" style="margin-top:-120px; font-weight: bold;"><br> <br> <br> <br> Dear Mr/Ms. <?php echo $fullname; ?><b> </a>,</p>
        <p> <br>We’ve heard that you needed more in-depth counselling regarding your <?php echo $issues ?>, wherein you’ve already adhere to the prior advise.   
        <p> Our session would be on <?php echo $date ?> at <?php echo date('h:i a', strtotime($time)) ?>  you may proceed with counselling session by<?php
                          echo " <a href='".$row['link']."'>clicking here.</a>";
                        ?> </p>
        <p> We’ll be discussing your other issues and concerns by slowly being more open to share your matters and/or relationships. To achieve better results your cooperation is a must.
 </p>
        <p> Again, you are a valuable member of our school and we do not want to lose you. We hope to see improved school performance in terms of achievement as well as your behavior.
 <br> </p>
        <p> <br> <br>Sincerely,</p>
        <p  style="color: solid black;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $_SESSION['fullnames'];?></p>
        <p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Counsellor</p>
	    </div>
	
</body> 
</html>