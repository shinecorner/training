<?php

include_once("../session_check.php");
include_once("../../connection.php");
// print_r($_GET);
// exit;
$record = [];
if(isset($_GET['id']))
{
    $sql = "SELECT * FROM category WHERE id='" . $_GET["id"] . "'";
    $result = $conn->query($sql);
    $rows = $result->fetch_all(MYSQLI_ASSOC);
    $record = $rows[0];
    
    // $sql = "UPDATE users set name='" . $_POST['name'] . "' WHERE id='" . $_POST['id'] . "'";
    // $result = mysqli_query($conn,$sql);
	// $message = "Record Modified Successfully";
}

include_once("../../views/category/edit.php");