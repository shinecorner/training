<?php

// print_r($_POST);
// exit;
include_once('../session_check.php');
include_once("../../connection.php");

if(isset($_POST['btn_submit']))
{
$insert_order = "insert into orders values('','$_POST[transaction_num]','$_POST[total]')";

// print_r($insert_order);
// exit;


$o_query = mysqli_query($con,$insert_order) or die(mysqli_error($con));
if($o_query)
{
    header("Location: /controller/order/list.php");

}

}
include_once("../../views/order/insert.php");

?>