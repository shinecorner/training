<?php

// print_r($_POST);
// exit;
include_once('../session_check.php');
include_once("../../connection.php");

if(isset($_POST['btn_submit']))
{
$insert_category = "insert into category values('','$_POST[name]')";


$c_query = mysqli_query($con,$insert_category) or die(mysqli_error($con));
if($c_query)
{
    header("Location: /controller/category/list.php");

}

}
include_once("../../views/category/insert.php");

?>