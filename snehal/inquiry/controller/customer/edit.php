<?php

include_once("../session_check.php");
include_once("../../connection.php");
// print_r($_GET);
// exit;
$record = [];
if(isset($_GET['id']))
{
    $q = "SELECT * FROM customer WHERE id='" . $_GET["id"] . "'";
    $result = mysqli_query($conn,$q);
    $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
    $record = $rows[0];
    
    // $sql = "UPDATE users set name='" . $_POST['name'] . "' WHERE id='" . $_POST['id'] . "'";
    // $result = mysqli_query($conn,$sql);
	// $message = "Record Modified Successfully";
}

include_once("../../views/customer/edit.php");
?>
