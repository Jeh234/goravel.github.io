<?php
$host="localhost";
$username="id20036481_goravel";
$password="GoravelGroup04++";
$database="id20036481_goraveldb";

$con=mysqli_connect("$host","$username","$password","$database");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }
  echo "";
  

?>