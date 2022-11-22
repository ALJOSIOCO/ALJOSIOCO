<?php  $page = 'about'; 
?>
<!DOCTYPE html>
<html>
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
<body style="background-image: url(555.png);
  background-attachment: fixed;
  max-width: 100%; 
  background-position: -50px -500px;
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
          <a class="nav-link active" class="<?php if($page=='About')?>" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" class="<?php if($page=='countact')?>" href="contact.php">Contact</a>
        </form>
      </div>
      </div>
    </nav>
  </header>
<body>
	<div>
		<br><h1>&nbspAbout Us</h1><br><br>
		<p style="font-size: 30px">&nbsp&nbspMaking Lives Better</p>
		<p style="text-align: center; font-size: 130%; font-family: Sans-serif;" >&nbsp&nbspThis is an Online Personal Counselling for Students in PHINMA University of Pangasinan. It focuses on students that needs personal counselling especially now that we are still in the situation of pandemic, gives students necessary support sush as helping them to understand themselves and their needs, to solve their problems, to make realistic decisions, to improve their abilities and skills, and to adjust themselves and their environment in a healthy way.<br></p>
		<p style="text-align: center; font-size: 130%; font-family: Sans-serif;">&nbspThe goal is to explore their feelings, beliefs, and behaviors, work through challenging or influential memories, identify aspects of their lives that they would like to change, betterunderstand themselves and others, set personal goals, and work toward desired change.</p>
	</div>
</body>
</html>
