<?php

include_once("../session_check.php");
include_once("../../connection.php");
//  print_r($_GET);exit;

$sql = "select  * from customer ";

$result = $conn->query($sql);
 $rows = $result->fetch_all(MYSQLI_ASSOC);
// $result = mysqli_query($conn,$sql);
// $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);

include_once("../../views/customer/list.php");
?>