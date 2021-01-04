<?php

// print_r($_POST);
// exit;
$con  = mysqli_connect('localhost', 'root', '', 'buildcon');
$count = 0;


$select = "update product 
SET name = '" . $_POST['name'] . "',
category_id = '" . $_POST['category_id'] . "',
price = '" . $_POST['price'] . "'
where id = " . $_POST['id'];
$query = mysqli_query($con, $select) or die(mysqli_error($con));

// var_dump($query);
// exit;

if ($query) {
    header("Location: /jigar/controller/product/list.php");

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
