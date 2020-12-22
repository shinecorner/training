<?php

// print_r($_GET);
// exit;
$con  = mysqli_connect('localhost', 'root', '', 'buildcon');
$count = 0;


$c_query = "select * from category";
$resultc = mysqli_query($con, $c_query);

$categorydata = mysqli_fetch_all($resultc,   MYSQLI_ASSOC);

// $selected_category = $_GET['category_id'];


// $sc_query = "select * from product where category_id = $selected_category";


// $sc_result = mysqli_query($con, $sc_query) or die(mysqli_error($con));

// $sc_data = mysqli_fetch_all($sc_result, MYSQLI_ASSOC);




$select = "select * from product where id = " . $_GET['id'];

$query = mysqli_query($con, $select) or die(mysqli_error($con));

$product_data = mysqli_fetch_all($query, MYSQLI_ASSOC);
$product = [];
if (!empty($product_data)) {
    $product = $product_data[0];
}
//     print_r($data);
//     exit;
// // $input = [];
include_once("../../views/product/edit.php");
