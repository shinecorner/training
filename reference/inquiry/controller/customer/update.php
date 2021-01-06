<?php

include_once("../session_check.php");
include_once("../../connection.php");
if(count($_POST)>0)
{
    $sql = "UPDATE customer  set fname='" . $_POST['fname'] . "', lname='" . $_POST['lname'] . "' WHERE id='" . $_POST['id'] . "'";
    $result = mysqli_query($conn,$sql);
        if($result)
    {
        header('Location: /controller/customer/list.php');
        exit;
    }

    else
    {
        exit('misstake in qurey');
    }
	$message = "Record Modified Successfully";
}
