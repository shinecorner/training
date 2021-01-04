<?php

// echo "snehal ajax example";
include_once("connection.php");
$fname = $_POST['fname'];
$lname = $_POST['lname'];

$q = "INSERT INTO customer (fname, lname)
VALUES ('".$fname."', '".$lname."')";

// echo $q;
// exit;
$result = mysqli_query($conn,$q);

$customer_id = mysqli_insert_id($conn);
$sql = "select  * from customer where id = $customer_id ";
$result = mysqli_query($conn,$sql);
$rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
echo json_encode($rows[0]);
?>