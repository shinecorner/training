<?php

include_once("../session_check.php");
include_once("../../connection.php");

$sql = "select  * from customer ";

 $result = $conn->query($sql);
 $rows = $result->fetch_all(MYSQLI_ASSOC);

include_once("../../views/ajax/list.php");
?>