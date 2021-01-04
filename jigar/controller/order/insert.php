<?php

// print_r($_POST);
// exit;
$con  = mysqli_connect('localhost', 'root', '', 'buildcon');
$count = 0;

if(isset($_POST['btn_submit']))
{
$insert_order = "insert into orders values('','$_POST[transaction_num]','$_POST[total]')";

// print_r($insert_order);
// exit;


$o_query = mysqli_query($con,$insert_order) or die(mysqli_error($con));
if($o_query)
{
    header("Location: /jigar/controller/order/list.php");

}

}
include_once("../../views/order/insert.php");

?>