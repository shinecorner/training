<?php

namespace Csv;

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
        if (!is_dir("../../uploads/logs")) {
            mkdir("../../uploads/logs", 0777);
        }

        $file = fopen("../../uploads/logs/product.csv", "a+");


        $file = fopen("../../uploads/logs/product.csv", "a+");
        $data = [
            $this->detail['product_name'],
            $this->detail['size'],
            $this->detail['color'],
            $this->detail['price'],
            $this->detail['store_type'],

        ];


        fputcsv($file, $data);
        fclose($file);
        // $error_detail = [
        //     date("Y-m-d"),
        //     date("H:i:s"),
        //     $error->getMessage(),
        //     $error->getFile(),
        //     $error->getLine(),
        // ];
        // fputcsv($file, $error_detail);
        // fclose($file);
    }
}
   
    
  
//     {
       
//         {
            
//             $file = fopen("../../uploads/logs/product.csv", "a+");
//             $error_detail = [
//                 date("Y-m-d"),
//                 date("H:i:s"),
//                 $error->getMessage(),
//                 $error->getFile(),
//                 $error->getLine(),
//             ];
//             fputcsv($file, $error_detail);
//             fclose($file);
        
//     }
