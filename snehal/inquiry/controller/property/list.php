<?php

include_once("../session_check.php");
include_once("../../connection.php");

$sql = "select  * from property";

$result = $conn->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);

// print_r($rows);
// var_dump($rows);
include_once("../../views/property/list.php");
?>