<?php

// print_r($_GET);
// exit;
include_once('../session_check.php');
include_once("../../connection.php");


$c_query = "select * from customer";
// $resultC = mysqli_query($con, $c_query);
$resultC = $con->query($c_query);

// $customerdata = mysqli_fetch_all($resultC,   MYSQLI_ASSOC);
$customerdata = $resultC->fetch_all(MYSQLI_ASSOC);

// print_r($customerdata);
// exit;
$p_query = "select * from property";
// $resultP = mysqli_query($con, $p_query);
$resultP = $con->query($p_query);

// $propertydata = mysqli_fetch_all($resultP, MYSQLI_ASSOC);
$propertydata = $resultP->fetch_all(MYSQLI_ASSOC);


include_once("../../views/inquiry/insert.php");