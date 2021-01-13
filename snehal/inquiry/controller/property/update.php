<?php

include_once("../session_check.php");
include_once("../../connection.php");
if(count($_POST)>0)
{
    // print_r($_POST);
    // exit;
    $sql = "UPDATE property set type='" . $_POST['type'] . "', sq_foot='" . $_POST['sq_foot'] . "', dirction='" . $_POST['dirction'] . "', description='" . $_POST['description'] . "', number='" . $_POST['number'] . "', is_sold='" . $_POST['is_sold'] . "', aggremnt_date='" . $_POST['aggremnt_date'] . "' WHERE id='" . $_POST['id'] . "'";
    $result = $conn->query($sql);

    if($result)
    {
        header('Location: /controller/property/list.php');
        exit;
    }

    else
    {
        exit('misstake in qurey');
    }
	$message = "Record Modified Successfully";
}