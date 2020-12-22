<?php

include_once("../../connection.php");
$sql = "DELETE FROM category WHERE id='" . $_GET["id"] . "'";
$result = mysqli_query($conn,$sql);

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