<?php

// print_r($_POST);
// exit;
include_once('../session_check.php');
include_once("../../connection.php");

$select = "update property 
SET type = '".$_POST['type']."',
sq_feet = '".$_POST['sq_feet']."',
direction = '".$_POST['direction']."',
discription = '".$_POST['discription']."',
is_sold = '".$_POST['is_sold']."',
evidance_date = '".$_POST['evidance_date']."'
where id = ".$_POST['id'];

// echo $select;
// exit;

    // $query = mysqli_query($con,$select) or die(mysqli_error($con));
    $query = $con->query($select);

    // var_dump($query);
    // exit;

    if($query)
    {
        header("Location: /controller/property/list.php");
        
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
    


