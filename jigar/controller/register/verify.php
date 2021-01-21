<?php

include_once("../../connection.php");
session_start();



if (isset($_GET['token']) && ($_GET['id'])) {
    $token = $_GET['token'];
    $id =  $_GET['id'];
} else {
    $token = 'Do Not Match';
}


$select = "select * from users where id = '".$_GET['id']."'";
$r_query = $con->query($select);

$register_data = $r_query->fetch_all(MYSQLI_ASSOC);

$data = $register_data[0];

if ($r_query) {
    $_SESSION["verify"] = "Successfully";
    header('Location: /views/login/login.php') ;
    exit;
}
// print_r($data);exit;

if (($data['token'] == $token) && ($data['id'] == $id)) {
    $update = "UPDATE users SET is_active = 1
     WHERE id = '".$_GET['id']."'";
    $r_query = $con->query($update);

    header("Location: /views/login/login.php");
    
} else {
    echo "Token And id does not match";
}
exit;
