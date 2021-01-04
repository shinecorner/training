<?php
//$password = "snehal";
//$encoded = md5($password);
//echo $encoded;
//echo base64_decode($encoded);
$servername = "localhost";
$username = "shine";
$password = "shine";
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO users (username, email, password)
VALUES ('".$_POST['username']."','".$_POST['email']."','".md5($_POST['password'])."')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>