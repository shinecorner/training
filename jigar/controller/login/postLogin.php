<?php
//$password = "snehal";
//$encoded = md5($password);
//echo $encoded;
//echo base64_decode($encoded);
// print_r($_POST);
// exit;

ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once("../../connection.php");
$count = 0;

// $servername = "localhost";
// $username = "shine";
// $password = "shine";
// $dbname = "test";

// Create connection

// Check connection

session_start();
$_SESSION['postLogin.php'] = true;

$sql = "select * from users where username = '".$_POST['username']."'";
// $result = mysqli_query($con, $sql);
$result = $con->query($sql);
// echo mysqli_num_rows($result);exit;


if (mysqli_num_rows($result) > 0) {
    // $rs = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $rs = $result->fetch_all(MYSQLI_ASSOC);
    // print_r($rs);exit;
    $db_password = $rs[0]['password'];
    $user_insert_password = $_POST['password'];
    if($db_password == md5($user_insert_password))
    {
        // print_r($rs[0]['username']);
        // exit("if");
        $_SESSION["username"] = $rs[0]['username'];

        header("Location: /index.php");
        exit;
    }
    else{
        exit("else");
        $_SESSION["login_error"] = "Detail not match with our Database";
        header("Location: /index.php");
        exit;
    }
} else {
    exit('aavu kai chhe nahi');
}


mysqli_close($con);
// include_once("../../views/login/login.php");


?>
