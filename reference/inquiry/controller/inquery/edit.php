<?php
include_once("../session_check.php");
include_once("../../connection.php");

$selected_customer_id = $_GET['customer_id'];
$selected_property_ids = [];


$q_c = "select  * from customer";


$q_p = "select  * from property";

$result_p = mysqli_query($conn,$q_p);
$properties = mysqli_fetch_all($result_p,MYSQLI_ASSOC);
// print_r($_GET);
// exit ('abc');

$q_inqury = "select * from customer_property where customer_id = ".$_GET['customer_id'];
$result_inqury = mysqli_query($conn,$q_inqury);
$inquries = mysqli_fetch_all($result_inqury,MYSQLI_ASSOC);


foreach($inquries as $inqury)
{
    $selected_property_ids[]=$inqury['property_id'];
}

// print_r($selected_property_ids);
// exit;



include_once("../../views/inquery/edit.php");
?>