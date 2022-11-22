<?php
    $conn = mysqli_connect('localhost','root','','my_db');

  if(isset($_GET['id'])) {
    $sql = "DELETE FROM counsellor WHERE id=".$_GET['id'];
    $mysqli->query($sql);
    echo 'Record deleted successfully.';
  ?>   