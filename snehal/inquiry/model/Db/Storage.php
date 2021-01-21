<?php
namespace Db;
use \storable;
Class Storage implements storable {
        public $detail = [];

    
    public function __construct($data){
                  $this->detail = $data;
    }

    public function store()
    {      
        $conn = new \mysqli("localhost", "snehal", "snehal123", "develop_snehal");  
        
        // exit("abc");
         $sql = "INSERT INTO product (productname, size, color, price) values ('".$this->detail['productname']."', '".$this->detail['size']."', '".$this->detail['color']."', '".$this->detail['price']."')";
         $result =$conn->query($sql);
    }
        

        
        //  echo $sql;
        //  exit;

    // $result =$conn->query($sql);
        
    }