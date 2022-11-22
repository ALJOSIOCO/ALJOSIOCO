<?php  
session_start();
    include 'dbconfig.php';
if(isset($_POST['submit']))
{
    
    $studentfeedback = $_POST['studentfeedback'];
    $sql1 = "INSERT INTO feedback (studentfeedback) VALUES ('$studentfeedback') ";
   
      
        if (mysqli_query($conn, $sql1)) 
        {
            echo "<h2>Successful!!</h2>";

        } 
        else
        {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
      }
      ?>
<!DOCTYPE html>
<html>
<head>
<title>Making Lives Better</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="fontawesome-free-5.15.4-web\css\all.css">
<style type="text/css">
  .nav-item{
    margin-right: 50px;
  }
  .header {
    width: 30%;
    margin: 0px auto 10px;
    color: white;
    background: whitesmoke;
    text-align: center;
    border: 1px solid #B0C4D3;
    border-bottom: none;
    border-radius: 0px 0px 10px 10px;
    padding: 20px;
    margin-right: 10px;
  }
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
</head>

<body style="background-image: url(bg.jpg);
  background-attachment: fixed;
  max-width: 100%;  
  background-position: 0px 10px;
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
          <li class="nav-item">
            <a class="nav-link" class="<?php if($page=='home')?>" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" class="<?php if($page=='About')?>" href="about.php">About Us</a>
        </li>
          <a class="nav-link active" class="<?php if($page=='countact')?>" href="contact.php">Contact</a>
        </form>
      </div>
      </div>
    </nav>
  </header>
    <div class="main">
      <div class="container">
        <div class="row no-margin">
          <div class="col-sm-1">
          
          </div>
          <form action="contact.php" method="POST">
            <div class="form-data">
              <div class="form-head" style="background-color: #384823; color: white; text-align: center;">
                <h2>Contact</h2>
              </div>

              <div class="form-body">
                <p>Do you have a question, concern, idea, feedback, or problem? Please fill out the form below and we'd be happy to help!</p>
                
                <div class="row form-row"><img src="log.png" alt="log" style="float:right;width:300px;height:300px;">                  
                  <div class="col-md-5">

                  <textarea class="text" type="type" name="studentfeedback"  placeholder="Message or Feedback" required cols="100" rows="10" style="margin-top: 30px"></textarea>
                  </div>
                </div>

                <div class="row form-row">
                  <button class="btn btn-success btn-appointment" name="submit" style="margin-left: 305px;">
                    submit
                  </button>
                </div>
                <div>
                  
                </div>
                
              </div>
              
            </div>
            
          </div>
          </form>

        </div>
        
      </div>
    </div> 

</body>
</html>