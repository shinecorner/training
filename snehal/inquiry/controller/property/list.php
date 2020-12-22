<?php
include_once("../../connection.php");
$sql = "select  * from property";

$result = mysqli_query($conn,$sql);
$rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
// print_r($rows);
// var_dump($rows);
include_once("../../views/property/list.php");
?>