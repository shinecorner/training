<?php
include_once("../../connection.php");

$sql = "select  * from category";

$result = mysqli_query($conn,$sql);
$rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
// print_r($rows);
// var_dump($rows);
include_once("../../views/category/list.php");
?>