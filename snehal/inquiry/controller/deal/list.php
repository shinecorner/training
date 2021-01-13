<?php

include_once("../session_check.php");
include_once("../../connection.php");

$sql = "select  * from deal";

$result = $conn->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);
// print_r($rows);
// exit;

include_once("../../views/deal/list.php");
?>