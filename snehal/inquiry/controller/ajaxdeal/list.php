<?php

include_once("../session_check.php");
include_once("../../connection.php");

$sql = "select  * from deal ";

$result = mysqli_query($conn,$sql);
$rows = mysqli_fetch_all($result,MYSQLI_ASSOC);

include_once("../../views/ajaxdeal/insert.php");
?>