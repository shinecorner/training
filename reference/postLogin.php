<?php
//$password = "snehal";
//$encoded = md5($password);
//echo $encoded;
//echo base64_decode($encoded);
//print_r($_POST);
//exit;
ini_set('display_errors', 1);
error_reporting(E_ALL);

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
session_start();
$sql = "select * from users where username = '".$_POST['username']."'";
$result = mysqli_query($conn, $sql);
//echo mysqli_num_rows($result);exit;
if (mysqli_num_rows($result) > 0) {
    $rs = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $db_password = $rs[0]['password'];
    $user_insert_password = $_POST['password'];
    if($db_password == md5($user_insert_password))
    {
        $_SESSION["username"] = $rs[0]['username'];
        header('Location: /test/homepage.php');
        exit;
    }
    else{
        $_SESSION["login_error"] = "Detail not match with our Database";
        header('Location: /test/login.php');
        exit;
    }
} else {
    exit('aavu kai chhe nahi');
}


mysqli_close($conn);

?>