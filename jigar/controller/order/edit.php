<?php

// print_r($_GET);
// exit;
$con  = mysqli_connect('localhost', 'root', '', 'buildcon');
$count = 0;

$select = "select * from orders where id = ".$_GET['id'];

    $query = mysqli_query($con,$select) or die(mysqli_error($con));

    $data = mysqli_fetch_all($query,MYSQLI_ASSOC);
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
    

