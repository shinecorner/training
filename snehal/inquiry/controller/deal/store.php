<?php
//print_r($_POST);

include_once("../session_check.php");
include_once("../../connection.php");
$property_id = $_POST['property_id'];
$customer_id = $_POST['customer_id'];
$sq_foot_price = $_POST['sq_foot_price'];
$sq_foot_maintenance = $_POST['sq_foot_maintenance'];
$pgvcl_charge = $_POST['pgvcl_charge'];
$token_amount = $_POST['token_amount'];
$remaining_ammout = $_POST['remaining_ammout'];

$q = "INSERT INTO deal (property_id, customer_id, sq_foot_price, sq_foot_maintenance, pgvcl_charge, token_amount, remaining_ammout)
VALUES ('".$property_id."', '".$customer_id."', '".$sq_foot_price."', '".$sq_foot_maintenance."', '".$pgvcl_charge."', '".$token_amount."', '".$remaining_ammout."')";

// echo $q;
// exit;
$result = mysqli_query($conn,$q);

if($result)
{
    header('Location: /controller/deal/list.php');
    exit;
}

else
{
    exit('misstake in qurey');
}

// var_dump($result);
// exit;
?>