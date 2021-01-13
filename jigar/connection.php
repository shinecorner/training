<?php


// $con  = mysqli_connect('localhost', 'root', '', 'develop_jigar');
// $count = 0;


$con = new mysqli("localhost","root","","develop_jigar");

// Check connection
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
}

?>