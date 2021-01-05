<?php

// print_r($_GET);
// exit;
include_once("../../connection.php");


$c_query = "select * from customer";
$resultC = mysqli_query($con, $c_query);

$customerdata = mysqli_fetch_all($resultC,   MYSQLI_ASSOC);

// print_r($customerdata);
// exit;
$p_query = "select * from property";
$resultP = mysqli_query($con, $p_query);

$propertydata = mysqli_fetch_all($resultP, MYSQLI_ASSOC);


include_once("../../views/inquiry/insert.php");