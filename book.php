<html>
<head>
<link rel="stylesheet" href="main.css">
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
</head><?php include "dbconfig.php"; ?>

<body>
	<div class="header">
		
	</div>
	<form action="book.php" method="post">
	<div class="sucontainer" style="background-image:url(images/bookback.jpg)">
		<label><b>Name:</b></label><br>
		<input type="text" placeholder="Enter Full name of patient" name="fname" required><br>
		<div class="col-sm-4">
        <p>Date of appointment</p>
        	<input type="date" name="date"  style="border: 1px solid black;" id="demo" class="form-control"  style="width: 100%; height: 100%; border-style: none;" required>             
        </div>
        <div class="col-sm-4">  
		   <select name="issues"  style=" border-style: 1px solid black; margin-left: 10px; margin-top: 30px;" required>
            <option value="" style="background-color: green">Key Issues</option>
            <option value="FAMILY PROBLEMS">FAMILY PROBLEMS</option>
            <option value="MENTAL HEALTH">MENTAL HEALTH</option>
            <option value="ANXIETY">ANXIETY</option>
            <option value="DEPRESSION">DEPRESSION</option>
            <option value="OTHERS">OTHERS...</option>
            </select>           
        </div>
        <div class="col-sm-4"><br> 
            <textarea type="input" name="others" placeholder="If others, please state the issue." style=" margin-top: 5px; margin-left: 20px;  "></textarea>
         </div>
		<div class="col-sm-4">
            <br> <p>Time of appointment</p>
            <input type="time" name="time"  id="time" class="form-control" style="border: 1px solid black;" required>
        </div>
		
		<div class="container">
			<button type="submit" style="position:center" name="submit" value="Submit">Submit</button>
		</div>
<?php
session_start();
if(isset($_POST['submit']))
{
		
		include 'dbconfig.php';
		$fname=$_POST['fname'];
		$date=$_POST['date'];
		$username=$_SESSION['username'];
		$issues=$_POST['issues'];
		$others=$_POST['others'];
		$time=$_POST['time'];
		$status="Booking Registered.Wait for the update";
		$sql = "INSERT INTO book (Username,Fname,date,issues,others,time,Status) VALUES ('$username','$fname','$date','$issues','$others','$time','$status') ";
		if(!empty($_POST['fname'])&&!empty($_POST['date'])&&!empty($_SESSION['username'])&&!empty($_POST['issues'])&&!empty($_POST['others']) && !empty($_POST['time']))
		{
			
				if (mysqli_query($conn, $sql)) 
				{
						echo "<h2>Booking successful!! Redirecting to home page....</h2>";
						header( "Refresh:2; url=viewappointment.php");

				} 
				else
				{
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
			}
		}
		else
		{
			echo "Enter data properly!!!!";
		}

?>
	</form>
</body>
</html>