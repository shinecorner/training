<?php

include_once("../session_check.php");
include_once("../../connection.php");

$sql = "select  * from category";

$result = $conn->query($sql);
 $rows = $result->fetch_all(MYSQLI_ASSOC);
// print_r($rows);
// var_dump($rows);
include_once("../../views/category/list.php");
?>