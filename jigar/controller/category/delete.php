<?php

// print_r($_POST);
// exit;
include_once('../session_check.php');
include_once("../../connection.php");

if (isset($_GET['id'])) {
    $delete = "delete from category where id = " . $_GET['id'];

    // $query = mysqli_query($con,$delete);
    $query = $con->query($delete);
    if ($query) {
        header("Location: /controller/category/list.php");
    }


    // echo $select;
    // exit;



    // var_dump($query);
    // exit;


    // header("Location : controller/property/list.php");
    // exit;

}
    

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
