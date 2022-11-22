<?php
include 'session-counsellor.php';
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
  $date=$row['date'];
  $issues=$row['issues'];
  $others=$row['others'];
  $time=$row['time'];
  $Username=$row['Username'];
  $yearlevel=$row['yearlevel'];
  $course=$row['course'];
?>

<?php 
    $conn = mysqli_connect("localhost","root","","my_db");
    if(isset($_POST['approve']))
      {
        $query=mysqli_query($conn,"UPDATE student set link = '" . $_POST['link'] . "', status = '1', result = '1', user_employee = '".$_SESSION['user_employee']."', user_lastname = '".$_SESSION['user_lastname']."', user_firstname = '".$_SESSION['user_firstname']."' where id = '".$_GET['approve']."' ");
        $message = "Booked.";
      }
?>
<!DOCTYPE html>
<html>
  <head>
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
  
            <form method="post" action="">            
            <div class="form-data">
              <div class="form-head">
                <div class="form-body" style="margin-top: -50px;">
            <form action="linkapproval.php" method="POST">
            <div class="form-data">
              <div class="form-head">
                <h2 style="text-align: center;">Link for the Counselling</h2>
              </div>
  <body>
      <div class="letter" style="padding:50px;" >
      <textarea class="text" type="text" name="link" id="message"  cols="180" rows="5" style="margin-top: 10px"><?php echo $link; ?></textarea>
      </div>

                <div class="row form-row">
                  <input type="submit" name="approve" style="margin-bottom: -10px; width: 200px; margin-left: 500px;" onClick="return confirm('Are you sure you want to book this appointment?')" value="Book" class="btn btn-success">
                  </button>
                  <a href="counsellorhistory.php" class="btn btn-primary"  style=" margin-bottom: -10px; width: 200px; margin-left: 50px;">Back</a>
</div>
</div>
</div>
</body>
</html>
  </div>
	</div>
</body> 
</html>