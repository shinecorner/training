<?php

// print_r($_GET);
// exit;
include_once('../session_check.php');
include_once("../../connection.php");

$select = "select * from property where id = ".$_GET['id'];

    $query = mysqli_query($con,$select) or die(mysqli_error($con));

    $data = mysqli_fetch_all($query,MYSQLI_ASSOC);
    $property = [];
    if(!empty($data))
    {
        $property = $data[0];
    }
    //     print_r($data);
    //     exit;
    // // $input = [];
include_once("../../views/property/edit.php");
    
    ?>
    


