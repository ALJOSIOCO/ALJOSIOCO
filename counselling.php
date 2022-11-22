<?php
include 'session-patient.php';
if(isset($_POST['sub']))
{
    
    include 'dbconfig.php';
    $date=$_POST['date'];
    $username=$_SESSION['username'];
    $issues=$_POST['issues'];
    $others=$_POST['others'];
    $time=date('h:i a', strtotime($_POST['time']));
    $sql = "INSERT INTO student (Username,date,issues,others,time,Status,result,message,subject,Fullname,yearlevel,course) VALUES ('$username','$date','$issues','$others','$time','0','0','message','subject','".$_SESSION['fullname']."','".$_SESSION['yearlevel']."','".$_SESSION['course']."') ";
   
      
        if (mysqli_query($conn, $sql)) 
        {
            echo "<h2>Booking successful!!</h2>";
            header( "Refresh:2; url=counsellingtable.php");

        } 
        else
        {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
      }
    
    

?>
<!DOCTYPE html>
<html>
  <head><?php include "dbconfig.php"; ?>
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
  .form-head{
    background-color: #807428;
    color: white;
  }
  .date{
    border: 1px solid black;
  }
  .form-button{
    color: white;
    background-color: green;
    width: 100px;
    margin-left: 500px;
    height: 40px;
  }
li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 12px 14px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: lightgreen;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: white;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: green}

.dropdown:hover .dropdown-content {
    display: block;
}

</style>
  </head>
  <body style="background-image: url(qwer.png);
  background-attachment: fixed;
  max-width: 100%;  
  background-position: 0px 0px;
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
        <li class="dropdown">
          <a class="nav-link active" href="counselling.php" style="color: black;">Book Appointment</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="counsellingtable.php" style="color: black;">Appointment History</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="studentsettings.php" style="color: black;"><?php echo $_SESSION['fullname']; ?></a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php" style="color: black;">Logout</a>
        </li>
              
        </ul>
        </form>
      </div>
      </div>
    </nav>
  </header>
<div class="form-body" style="margin-top: -30px;">
            <form action="counselling.php" method="POST">
            <div class="form-data">
              <div class="form-head">
                <h2 style="text-align: center; margin-top: ;">Book Appointment</h2>
              </div>
  </head>
  <body>
                  <div class="form-body">
                <h3>Fill out the following:</h3>
                <br><div class="row form-row">
                  <div class="col-sm-4">
                    <p>Date of appointment</p>
                    <input type="date" name="date" value="<?php echo $date; ?>" style="border: 1px solid black;" id="demo" class="form-control"  style="width: 100%; height: 100%; border-style: none;" required>             
                  </div>
                  <div class="col-sm-4">  
                   <select name="issues" value="<?php echo $issus; ?>" style="width: 100%; height: 60%; border-style: 1px solid black; margin-left: 10px; margin-top: 30px;" required>
                     <option value="" style="background-color: green">Key Issues</option>
                     <option value="FAMILY PROBLEMS">FAMILY PROBLEMS</option>
                     <option value="MENTAL HEALTH">MENTAL HEALTH</option>
                     <option value="ANXIETY">ANXIETY</option>
                     <option value="DEPRESSION">DEPRESSION</option>
                     <option value="OTHERS">OTHERS...</option>
                   </select>           
                  </div>
                  <div class="col-sm-4"><br> 
                    <textarea type="input" name="others" value="<?php echo $others; ?>" placeholder="If not in the option state here, If it is in option write N/A" style="width: 100%; height: 60%; margin-top: 5px; margin-left: 20px;  "></textarea>
                  </div>
                  <div class="col-sm-4">
                   <br> <p>Time of appointment</p>
                    <input type="time" name="time" value="<?php echo $time; ?>" id="time" class="form-control" style="width: 100%; height: 45%; border: 1px solid black;" required>
                  </div>
                </div>             
                <br><div class="row form-row">
                  <button type="submit" name="sub" value="SendNow" class="form-button" style="margin-bottom: -10px; width: 200px; margin-left: 455px;">
                    SUBMIT
                  </button>
                </div>
                
              </div>
              
            </div>
            <div class="modal-footer" style="margin-left: -40px; margin-right: -40px";>
            

<?php
if(isset($_POST['check']))
{
    include 'dbconfig.php';
    $name = $_SESSION['user'];
    $sql = "Select * from patient where name='$name'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      while($rows = mysqli_fetch_assoc($result)) 
      {
        echo "Username:".$rows["username"]."Name:".$rows["name"]."<br>";
      }

    } 
    else 
    {
      echo "0 results";
    }
}
?>
    <script>
   $(document).ready(function(){
    $(function(){
      var dtToday = new Date();
      var month = dtToday.getMonth() + 1;
      var day = dtToday.getDate();
      var year = dtToday.getFullYear();
      if(month < 10)
        month = '0' + month.toString();
      if(day < 10)
        day = '0' + day.toString();

      var maxDate = year + '-' + month + '-' + day;
    $("#demo").attr('min', maxDate);
  

    });
   })
  </script>

  </body>
</html>