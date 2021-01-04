<?php
include_once("../../connection.php");

$q_c = "select  * from customer";

$result_c = mysqli_query($conn,$q_c);
$customers = mysqli_fetch_all($result_c,MYSQLI_ASSOC);

$q_p = "select  * from property";

$result_p = mysqli_query($conn,$q_p);
$properties = mysqli_fetch_all($result_p,MYSQLI_ASSOC);
//print_r($rows);
// exit ('abc');

// print_r($customers);
// exit;


include_once("../../views/inquery/insert.php");
?>