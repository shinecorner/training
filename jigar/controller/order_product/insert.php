<?php

// print_r($_GET);
// exit;
$con  = mysqli_connect('localhost', 'root', '', 'buildcon');
$count = 0;


$o_query = "select * from orders";
$resulto = mysqli_query($con, $o_query);

$orderdata = mysqli_fetch_all($resulto,   MYSQLI_ASSOC);

// print_r($customerdata);
// exit;
$p_query = "select * from product";
$resultP = mysqli_query($con, $p_query);

$productdata = mysqli_fetch_all($resultP, MYSQLI_ASSOC);


include_once("../../views/order_product/insert.php");