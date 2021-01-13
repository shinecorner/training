<?php

include_once("../session_check.php");
include_once("../../connection.php");

$q_c = "select  * from customer";

$result_c = $conn->query($q_c);
$customers = $result_c->fetch_all(MYSQLI_ASSOC);

$q_p = "select  * from property";

$result_p = $conn->query($q_p);
$properties = $result_p->fetch_all(MYSQLI_ASSOC);

//print_r($rows);
// exit ('abc');

// print_r($customers);
// exit;


include_once("../../views/inquery/insert.php");
?>