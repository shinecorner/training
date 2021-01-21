<?php
namespace csv;
use \storable;
Class Storage implements storable {

    public $detail = [];
    public $file;

    public function __construct($data){
                  $this->detail = $data;
                   if(!is_dir("../../error/product")) {
        mkdir("../../error/product",0777);
    }
    $this->file = fopen("../../error/product/product.csv","a+");
    }
    
    public function store(){
        
    // print_r($this->detail);
    // exit;
    fputcsv($this->file, $this->detail);
    fclose($this->file);

        return "Csv file enter entry";
    }
    }