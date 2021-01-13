<?php 

// print_r($_POST);
// exit;

include_once("../session_check.php");
include_once("../../connection.php");
$customer_id = $_POST['customer_id'];
$properties = $_POST['property_id'];

if(!empty($properties))
{
    $sql = "DELETE FROM customer_property WHERE customer_id='" . $customer_id. "'";
    $result = $conn->query($sql);

    foreach($properties as $property_id)
    {
        $sql = "INSERT INTO customer_property (customer_id, property_id)
        VALUES ('".$customer_id."', '".$property_id."')";

        // echo $q;
        // exit;
        $result = mysqli_query($conn,$sql);
    }
}


if($result)
{
    header('Location: /controller/inquery/list.php');
    exit;
}

else
{
    exit('misstake in qurey');
}

?>