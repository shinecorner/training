<?php

// print_r($_POST);
// exit;
$con  = mysqli_connect('localhost', 'root', '', 'buildcon');
$count = 0;

if(isset($_POST['btn_submit']))
{
$insert_property = "insert into property values('','$_POST[type]','$_POST[sq_feet]','$_POST[direction]','$_POST[discription]','$_POST[is_sold]','$_POST[evidance_date]')";

// print_r($insert_property);
// exit;


$p_query = mysqli_query($con,$insert_property) or die(mysqli_error($con));
if($p_query)
{
    header("Location: /jigar/controller/property/list.php");

}

}
include_once("../../views/property/insert.php");

?>