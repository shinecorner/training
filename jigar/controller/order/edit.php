<?php

// print_r($_GET);
// exit;
include_once('../session_check.php');
include_once("../../connection.php");

$select = "select * from orders where id = ".$_GET['id'];

    // $query = mysqli_query($con,$select) or die(mysqli_error($con));
    $query = $con->query($query);

    // $data = mysqli_fetch_all($query,MYSQLI_ASSOC);
    $data = $query->fetch_all(MYSQLI_ASSOC);

    $order = [];
    if(!empty($data))
    {
        $order = $data[0];
    }
    //     print_r($data);
    //     exit;
    // // $input = [];
include_once("../../views/order/edit.php");
    
    ?>
    


