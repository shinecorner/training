<?php

// echo "snehal ajax example";
include_once("connection.php");
$name = $_POST['name'];

$sql = "INSERT INTO category (name)
VALUES ('".$name."')";

// echo $q;
// exit;
$result = mysqli_query($conn,$sql);

$category_id = mysqli_insert_id($conn);
$sql = "select  * from category where id = $category_id ";
$result = mysqli_query($conn,$sql);
$rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
echo json_encode($rows[0]);
?>