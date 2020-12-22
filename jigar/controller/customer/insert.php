<?php

// print_r($_POST);
// exit;
$con  = mysqli_connect('localhost', 'root', '', 'buildcon');
$count = 0;

if(isset($_POST['btn_submit']))
{
$insert_order = "insert into customer values('','$_POST[firstname]','$_POST[lastname]')";

// print_r($insert_order);
// exit;


$o_query = mysqli_query($con,$insert_order) or die(mysqli_error($con));
if($o_query)
{
    header("Location: /controller/customer/list.php");

}

}
include_once("../../views/customer/insert.php");

?>