<?php

// echo "snehal ajax example";
include_once("connection.php");
$name = $_POST['name'];

$sql = "INSERT INTO category (name)
VALUES ('".$name."')";

// echo $q;
// exit;
$result = $conn->query($sql);

$category_id = mysqli_insert_id($conn);
$sql = "select  * from category where id = $category_id ";
$result = $conn->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($rows[0]);
?>