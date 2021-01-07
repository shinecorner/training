<?php
include_once('../session_check.php');
include_once("../../connection.php");

// session_start();



$select_category = "select * from category ";

    $c_query = mysqli_query($con,$select_category) or die(mysqli_error($con));

    $category_data = mysqli_fetch_all($c_query,MYSQLI_ASSOC);
        // print_r($data);
        // exit;
    // $input = [];

include_once("../../views/category/list.php");
