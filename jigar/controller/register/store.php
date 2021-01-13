<?php
//$password = "snehal";
//$encoded = md5($password);
//echo $encoded;
//echo base64_decode($encoded);
// $servername = "localhost";
// $username = "shine";
// $password = "shine";
// $dbname = "test";
include_once("../../connection.php");
// Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection


$sql = "INSERT INTO users (username, email, password)
VALUES ('".$_POST['username']."','".$_POST['email']."','".md5($_POST['password'])."')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
    header("Location: /index.php");    
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($cnn);
}

mysqli_close($con);


// include_once("../../views/register/register.php");


?>