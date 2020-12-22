<?php
$con  = mysqli_connect('localhost', 'root', '', 'buildcon');
$count = 0;

$sort_by = isset($_GET['sort_by']) ? $_GET['sort_by'] : 'id';

$sort_order = isset($_GET['sort_order']) ? $_GET['sort_order'] : 'ASC';

$select = "select orders.id as ord_id,orders.transaction_num,orders.total,product.name,product.id as prod_id,category.id as cat_id,category.name as cat_name
from (((orders
left join order_product on orders.id = order_product.order_id)
left join product on product.id = order_product.product_id)
left join category on category.id = product.category_id)
order by orders." .$sort_by." ".$sort_order;

    $query = mysqli_query($con,$select) or die(mysqli_error($con));

    $data = mysqli_fetch_all($query,MYSQLI_ASSOC);
        
    $input = [];

    
    foreach($data as $key => $value)
    {
        $input[$value["ord_id"]]["order_id"] = $value["ord_id"];
        $input[$value["ord_id"]]["transaction_num"] = $value["transaction_num"];
        $input[$value["ord_id"]]["total"] = $value["total"];
        $input[$value["ord_id"]]["name"][$value['prod_id']] = $value["name"]."(".$value['cat_name'].")";
    }
    include_once("../../views/order_product/list.php");
    // print_r($data);
    // exit;
