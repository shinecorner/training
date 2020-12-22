<?php



// print_r($_GET);
// exit;
$con  = mysqli_connect('localhost', 'root', '', 'buildcon');
$count = 0;


$c_query = "select * from category";
$resultc = mysqli_query($con, $c_query);

$categorydata = mysqli_fetch_all($resultc,   MYSQLI_ASSOC);

// $category_data = [];
// print_r($categorydata);
// exit;

include_once("../../views/product/insert.php");
