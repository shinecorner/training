<?php
include_once('../session_check.php');
include_once("../../connection.php");

// session_start();



$select_category = "select * from category ";

    // $c_query = mysqli_query($con,$select_category) or die(mysqli_error($con));
    $c_query = $con->query($select_category);

    // $category_data = mysqli_fetch_all($c_query,MYSQLI_ASSOC);
    $category_data = $c_query->fetch_all(MYSQLI_ASSOC);
        // print_r($data);
        // exit;
    // $input = [];

include_once("../../views/category/list.php");
