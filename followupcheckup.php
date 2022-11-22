<?php 
  include 'session-counsellor.php';
?>
<?php 
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
  if(isset($_POST['approve']))
      {
        $query=mysqli_query($conn,"UPDATE student set link='".$_POST['link']."', date = ' ".$_POST['date']." ' , time = '".date('h:i a', strtotime($_POST['time']))."' ,status = '11', result = '1' where id = '".$_GET['followup']."' ");
        $message = "Booked.";
      }
      if(isset($_POST['approve']))
      {
        $query=mysqli_query($conn,"UPDATE counsellinghistory set link ='".$_POST['link']."', date = ' ".$_POST['date']." ', time = '".date('h:i a', strtotime($_POST['time']))."' where sid = '".$_GET['followup']."' ");
        $message = "Booked.";
      }
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
            <form action="followupcheckup.php" method="POST">
            <div class="form-data">
              <div class="form-head">
                <h2 style="text-align: center;">Choose the available time for re-counselling and Paste the ZOOM/GOOGLE MEET link.</h2>
              </div>
  <body>
    <div class="card-body">      
          <div class="row">
    <center>
      <div class="letter" style="padding:50px;" >
        <div class="col-md-4"><label>Date:</label></div>
        <div class="col-md-8"><input type="text" name="date"  value="<?php echo $row['date']; ?>" class="form-control" required></div>
        <br>
        <div class="col-md-4"><label>Time: </label></div>
        <div class="col-md-8"><input type="time" name="time" value="<?php echo $row['time']; ?>" class="form-control" required></div>
        <br>
        <div class="col-md-4"><label>Link: </label></div>
        <div class="col-md-8"><input class="form-control" type="text" name="link" value="<?php echo $row['link']; ?>" required></div>
      </div>
    </center>
    </div>
  </div>

                <div class="row form-row">

                  <input type="submit" name="approve" style="margin-bottom: -10px; width: 200px; margin-left: 500px;" onClick="return confirm('Are you sure the student need this?')" value="Re-Counselling" class="btn btn-success" >
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