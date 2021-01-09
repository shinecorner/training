<?php

include_once('../session_check.php');
include_once("../../connection.php");


$c_sql = "select * from customer";
$resultC = mysqli_query($conn, $c_sql);

$customer = mysqli_fetch_all($resultC,   MYSQLI_ASSOC);

// print_r($customer);
// exit;
$p_sql = "select * from property";
$resultP = mysqli_query($conn, $p_sql);

$property = mysqli_fetch_all($resultP, MYSQLI_ASSOC);


include_once("../../views/ajaxdeal/insert.php");