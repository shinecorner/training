<?php

// print_r($_POST);
// exit;
$con  = mysqli_connect('localhost', 'root', '', 'buildcon');
$count = 0;


$select = "update customer 
SET firstname = '".$_POST['firstname']."',
lastname = '".$_POST['lastname']."'

where id = ".$_POST['id'];

// echo $select;
// exit;

    $query = mysqli_query($con,$select) or die(mysqli_error($con));

    // var_dump($query);
    // exit;

    if($query)
    {
        header("Location: /controller/customer/list.php");
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
    


