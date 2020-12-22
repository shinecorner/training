<?php
include_once("../../connection.php");

$sql = "select  * from customer";

$result = mysqli_query($conn,$sql);
$rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
//print_r($rows);
include_once("../../views/customer/list.php");
?>