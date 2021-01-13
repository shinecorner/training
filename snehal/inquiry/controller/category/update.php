<?php

include_once("../session_check.php");
include_once("../../connection.php");
if(count($_POST)>0)
{
    $sql = "UPDATE category set name='" . $_POST['name'] . "' WHERE id='" . $_POST['id'] . "'";
    $result = $conn->query($sql);
 
        if($result)
    {
        header('Location: /controller/category/list.php');
        exit;
    }

    else
    {
        exit('misstake in qurey');
    }
	$message = "Record Modified Successfully";
}