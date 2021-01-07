<?php

$con = mysqli_connect('localhost','root','','buildcon');
$count = 0;

$select = "SELECT a.id,a.name as name1,b.parent_id,b.name as name2
FROM mlm a
inner join mlm b
on
a.id = b.parent_id";
// -- and 
// -- a.name > b.name
// -- order by
// -- a.parent_id";
        
    $query = mysqli_query($con,$select) or die(mysqli_error($con));

    $data = mysqli_fetch_all($query,MYSQLI_ASSOC);
        // print_r($data);
        // exit;
        
    // $input = [];

    // foreach($data as $key => $value)
    // {
    //     $input[$value["prop_id"]]["property_id"] = $value["prop_id"];
    //     $input[$value["prop_id"]]["type"] = $value["type"];
    //     $input[$value["prop_id"]]["sq_feet"] = $value["sq_feet"];
    //     $input[$value["prop_id"]]["firstname"][$value['cust_id']] = $value["firstname"];
    // }
    include_once("../../views/parent/list.php");
    // print_r($input);
    // exit;
