<?php

include_once("../session_check.php");
include_once("../../connection.php");
$sql = "DELETE FROM category WHERE id='" . $_GET["id"] . "'";
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


?>