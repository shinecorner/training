<?php

include_once("../session_check.php");
include_once("../../connection.php");

$sql = "select * from product";

$result = $conn->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);

// print_r($rows); exit;
// var_dump($rows);
include_once("../../views/product/list.php");
?>