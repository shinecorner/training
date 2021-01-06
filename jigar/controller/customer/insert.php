<?php
// session_start();
// ini_set('display_errors', 1);
// error_reporting(E_ALL);
// if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
//     exit("Wellcome " . $_SESSION['username'] . " You are login successfully");
// } else {
//     exit("You can not access this page");
// }

?>

<?php

// print_r($_POST);
// exit;
include_once('../session_check.php');
include_once("../../connection.php");

if(isset($_POST['btn_submit']))
{
$insert_order = "insert into customer values('','$_POST[firstname]','$_POST[lastname]')";

// echo $insert_order;
// exit;


$o_query = mysqli_query($con,$insert_order) or die(mysqli_error($con));
if($o_query)
{
    header("Location: /controller/customer/insert.php");
    // echo  mysqli_insert_id($con);

}

}
include_once("../../views/customer/insert.php");

?>