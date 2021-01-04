<?php
// print_r($_POST);
// exit;

include_once("../../connection.php");
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phones = $_POST['phone'];

$q = "INSERT INTO customer (fname, lname)
VALUES ('".$fname."', '".$lname."')";

// echo $q;
// exit;
$result = mysqli_query($conn,$q);


if($result)
{
    $customer_id = mysqli_insert_id($conn);
    // echo $customer_id;
    // exit;
    foreach($phones as $phone)
    {
        $q_phone = "INSERT INTO customer_phone (customer_id, phone)
        VALUES ('".$customer_id."', '".$phone."')";
        mysqli_query($conn,$q_phone);
    }
    header('Location: /controller/customer_phone/list.php');
    exit;
}

else
{
    exit('misstake in qurey');
}

// var_dump($result);
// exit;
?>