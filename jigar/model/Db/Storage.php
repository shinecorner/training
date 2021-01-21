<?php

namespace Db;

use \storeable;


class Storage implements storeable
{
    
    public $detail = [];
    public function __construct($detail)
    {
        //DB connection
        // print_r($detail); exit;
        $this->detail = $detail;
        
    }

    public function store()
    {
        
        $con = new \mysqli("localhost","root","","develop_jigar");

        $query = "insert into product_tbl(product_name,size,color,price,store_type) values('" . $this->detail['product_name'] . "','" . $this->detail['size'] . "','" . $this->detail['color'] . "','" . $this->detail['price'] . "','" . $this->detail['store_type'] . "')";

        $result = $con->query($query);

        // $productdata = $result->fetch_all(MYSQLI_ASSOC);
    }
    // public function __construct($product_name,$size,$color,$price,$store_type)
    // {
    //     $product_name = $_POST['product_name'];
    //     $size = $_POST['size'];
    //     $color = $_POST['color'];
    //     $price = $_POST['price'];
    //     $store_type = $_POST['store_type'];

    //     $con = new mysqli("localhost", "root", "", "develop_jigar");

    //     $query = "insert into product_tbl(product_name,size,color,price,store_type) values('" . $product_name . "','" . $size . "','" . $color . "','" . $price . "','" . $store_type . "')";

    //     $result = $con->query($query);

    //     $productdata = $result->fetch_all(MYSQLI_ASSOC);
    // }
}
