<?php



// print_r($_GET);
// exit;
include_once('../session_check.php');
include_once("../../connection.php");


$c_query = "select * from category";
// $resultc = mysqli_query($con, $c_query);
$resultc = $con->query($c_query);

// $categorydata = mysqli_fetch_all($resultc,   MYSQLI_ASSOC);
$categorydata = $resultc->fetch_all(MYSQLI_ASSOC);

// $category_data = [];
// print_r($categorydata);
// exit;

include_once("../../views/product/insert.php");
