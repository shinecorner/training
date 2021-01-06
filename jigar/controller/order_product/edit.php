<?php
include_once('../session_check.php');
include_once("../../connection.php");



$selected_order = $_GET['order_id'];
$selected_product = [];

$so_query = "select * from order_product where order_id = $selected_order";

$so_result = mysqli_query($con,$so_query) or die(mysqli_error($con));

    $so_data = mysqli_fetch_all($so_result,MYSQLI_ASSOC);
// print_r($sc_data);
// exit;
    foreach($so_data as $record)
    {
        $selected_product[] = $record['product_id'];

    }
    // print_r($selected_customer); exit;


    $o_query = "select * from orders";
    $resulto = mysqli_query($con, $o_query);
    
    $orderdata = mysqli_fetch_all($resulto,   MYSQLI_ASSOC);
    
    // print_r($customerdata);
    // exit;
    $p_query = "select * from product";
    $resultP = mysqli_query($con, $p_query);
    
    $productdata = mysqli_fetch_all($resultP, MYSQLI_ASSOC);
    
    
    include_once("../../views/order_product/edit.php");

