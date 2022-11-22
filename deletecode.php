<?php
    $conn = mysqli_connect('localhost','root','','my_db');
    $select = "SELECT * FROM counsellor";

  if(isset($_GET['deletedata']))
  {
    $id = $_GET['delete_id'];
  $delete = "DELETE FROM counsellor WHERE id='$id'";
  $run_delete = mysqli_query($conn, $delete);
    if ($run_delete){
      echo '<script> alert("Data Deleted"); </script>';
      header("Location:viewcounsellor.php");
    } else 
    {
      echo '<script> alert("Data Not Deleted"); </script>';
    }
  }
  ?>   