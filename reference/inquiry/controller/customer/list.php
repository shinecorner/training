<?php

include_once("../session_check.php");
include_once("../../connection.php");
//  print_r($_GET);exit;

$sql = "select  * from customer ";
// echo $sql;
// exit;

$result = mysqli_query($conn,$sql);
$rows = mysqli_fetch_all($result,MYSQLI_ASSOC);

include_once("../../views/customer/list.php");
?>