<?php

// print_r($_GET);
// exit;
include_once('../session_check.php');
include_once("../../connection.php");

$select = "select * from category where id = ".$_GET['id'];

    $query = mysqli_query($con,$select) or die(mysqli_error($con));

    $data = mysqli_fetch_all($query,MYSQLI_ASSOC);
    $category = [];
    if(!empty($data))
    {
        $category = $data[0];
    }
    //     print_r($data);
    //     exit;
    // // $input = [];
include_once("../../views/category/edit.php");
    
    ?>
    


