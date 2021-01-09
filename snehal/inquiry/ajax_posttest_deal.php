<?php

// echo "snehal ajax example";
include_once("../session_check.php");
include_once("connection.php");
//print_r($_GET);

$property_id = $_GET['property_id'];
$customer_id = $_GET['customer_id'];
$sq_foot_price = $_GET['sq_foot_price'];
$sq_foot_maintenance = $_GET['sq_foot_maintenance'];
$pgvcl_charge = $_GET['pgvcl_charge'];
$token_amount = $_GET['token_amount'];
$remaining_ammout = $_GET['remaining_ammout'];

$q = "INSERT INTO deal (property_id, customer_id, sq_foot_price, sq_foot_maintenance, pgvcl_charge, token_amount)
VALUES ('".$property_id."', '".$customer_id."', '".$sq_foot_price."', '".$sq_foot_maintenance."', '".$pgvcl_charge."', '".$token_amount."')";

$result = mysqli_query($conn,$sql);

$property_id = mysqli_insert_id($conn);
$sql = "select  * from category where id = $remaining_ammout ";
$result = mysqli_query($conn,$sql);
$rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
echo json_encode($rows[0]);
$result = mysqli_query($conn,$q);

if($result)
{
    if(isset($'check_ajax'))
    header('Location: /controller/ajaxdeal/test.php');
    exit;
}

else
{
    exit('misstake in qurey');
}

?>