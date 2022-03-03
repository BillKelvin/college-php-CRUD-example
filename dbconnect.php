<?php
$server="localhost";
$root="root";
$pass="";
$db="college";
$con = mysqli_connect($server,$root,$pass,$db);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>