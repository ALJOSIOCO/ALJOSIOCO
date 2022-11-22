	<?php
		$id = $_GET['del'];
		$conn = mysqli_connect("localhost", "root", "", "my_db") or die("Error in Connection");
		if(isset($_GET['del']))
	  	{
	    $query2=mysqli_query($conn,"DELETE FROM patient WHERE id = '$id'");
	    if($query2)
	    {
	      echo "<script>alert('Are you sure you want to DELETE this RECORD?');</script>";
	      header( "Refresh:2; url=view_user.php?");
	    }
	  }		
	?>