

<?php
include_once('../session_check.php');
include_once("../../connection.php");



$select = "select * from customer ";

$query = $con->query($select);
// $query = mysqli_query($con,$select) or die(mysqli_error($con));

// $data = mysqli_fetch_all($query, MYSQLI_ASSOC);
$data = $query->fetch_all(MYSQLI_ASSOC);
// print_r($data);
// exit;
// $input = [];
include_once("../../views/customer/list.php");

?>
    

