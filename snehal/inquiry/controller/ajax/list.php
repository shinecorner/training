<?php

include_once("../../connection.php");

$sql = "select  * from customer ";

$result = mysqli_query($conn,$sql);
$rows = mysqli_fetch_all($result,MYSQLI_ASSOC);

include_once("../../views/ajax/list.php");
?>