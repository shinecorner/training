<?php
include_once('../session_check.php');
include_once("../../connection.php");

// session_start();


$select_order = "select * from orders ";

    $o_query = mysqli_query($con,$select_order) or die(mysqli_error($con));

    $order_data = mysqli_fetch_all($o_query,MYSQLI_ASSOC);
        // print_r($data);
        // exit;
    // $input = [];




include_once("../../views/order/list.php");
