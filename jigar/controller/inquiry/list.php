<?php
$con  = mysqli_connect('localhost', 'root', '', 'buildcon');
$count = 0;


$select = "select property.id as prop_id,property.type,property.sq_feet,customer.firstname,customer.id as cust_id
from ((customer_property
left join property on property.id = customer_property.property_id)
left join customer on customer.id = customer_property.customer_id)";


    $query = mysqli_query($con,$select) or die(mysqli_error($con));

    $data = mysqli_fetch_all($query,MYSQLI_ASSOC);
        // print_r($data);
        // exit;
        
    $input = [];

    foreach($data as $key => $value)
    {
        $input[$value["prop_id"]]["property_id"] = $value["prop_id"];
        $input[$value["prop_id"]]["type"] = $value["type"];
        $input[$value["prop_id"]]["sq_feet"] = $value["sq_feet"];
        $input[$value["prop_id"]]["firstname"][$value['cust_id']] = $value["firstname"];
    }
    include_once("../../views/inquiry/list.php");
    // print_r($input);
    // exit;
