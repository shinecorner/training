<?php

// echo "snehal ajax example";
include_once("connection.php");
$fname = $_POST['fname'];
$lname = $_POST['lname'];

$sql = "INSERT INTO customer (fname, lname)
VALUES ('".$fname."', '".$lname."')";

// echo $q;
// exit;
$result = $conn->query($sql);

$customer_id = mysqli_insert_id($conn);
$sql = "select  * from customer where id = $customer_id ";
$result = $conn->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($rows[0]);
?>