<?php

// print_r($_POST);
// exit;
include_once('../session_check.php');
include_once("../../connection.php");



$select = "update category 
SET name = '".$_POST['name']."'
where id = ".$_POST['id'];

// echo $select;
// exit;

    // $query = mysqli_query($con,$select) or die(mysqli_error($con));
    $query = $con->query($select);

    // var_dump($query);
    // exit;

    if($query)
    {
        header("Location: /controller/category/list.php");
        // header("Location : controller/property/list.php");
        exit;

    }
    exit("eror");

    // $data = mysqli_fetch_all($query,MYSQLI_ASSOC);
    // $property = [];
    // if(!empty($data))
    // {
    //     $property = $data[0];
    // }
    // //     print_r($data);
    // //     exit;
    // // // $input = [];
// include_once("../../views/property/edit.php");
// exit("error");
    
    ?>
    


