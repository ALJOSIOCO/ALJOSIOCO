<?php
	$conn = mysqli_connect("localhost","root","","my_db");
    $id = $_GET['sid'];
    $sql = "SELECT * FROM counsellinghistory WHERE sid = '$id'";
	if(isset($_GET['sid']))
  	{
    $query=mysqli_query($conn,"UPDATE counsellinghistory SET status = '3' WHERE sid = '$id'");
    if($query)
    {
      echo "";
    }
    $query2=mysqli_query($conn,"UPDATE student SET Status = '3' WHERE id = '$id'");
    if($query2)
    {
      echo "<script>alert('You finished appointment.');</script>";
      header( "Refresh:2; url=counsellorhistory.php?sid=$id");
    }
  }		
?>