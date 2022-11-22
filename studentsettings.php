<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head><?php include "dbconfig.php"; ?>
    <title>Making Lives Better</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="fontawesome-free-5.15.4-web\css\all.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
<link href='DataTables/datatables.min.css' rel='stylesheet' type='text/css'>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="DataTables/datatables.min.js"></script>
<style type="text/css">
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
          <a class="nav-link" href="counselling.php" style="color: black;">Book Appointment</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="counsellingtable.php" style="color: black;">Appointment History</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="studentsettings.php" style="color: black;"><?php echo $_SESSION['fullname']; ?></a>
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
<body>
<link rel="stylesheet" href="style2.css">
<div class="container" style="width: 565px; height: 220px; margin-top:150px;" >
  <h2 style="text-align: center;"><b>Password</b></h2>
  <?php
        $conn = mysqli_connect('localhost', 'root', '', 'my_db');
            if(isset($_GET['login'])){
            $edit_id = $_GET['login'];

            $selectss = "SELECT * FROM patient WHERE id='$edit_id'";
            $runs = mysqli_query($conn,$selects);
            $row_user = mysqli_fetch_array($runs);
                   $password = strtoupper($row_user['password']);
            }
                   ?>
  <form action="" method="POST">
    <div class="form-group">
      <label>New Password</label>
        <input type="text" class="form-control" name="password"  placeholder="New Password" required>     </div>
        <div class="form-group">
      <div class="input-group">
        <button type="submit" name="insert-btns" class="btn btn-primary">Submit
      </div>
  </form>
  <?php  
    $conn = mysqli_connect('localhost','root','','my_db');

    if (isset($_POST['insert-btns'])){
        $epassword = strtoupper($_POST['password']);
        $inserts = "UPDATE patient SET password='$epassword'";
        $run_inserts = mysqli_query($conn, $inserts);
    if($run_inserts === true){
      echo "Data has been Inserted";
    }
    }
    ?>
</body>
</html>
