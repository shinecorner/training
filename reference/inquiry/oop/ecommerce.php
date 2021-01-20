<?php
namespace Ecommerce;
ini_set('display_errors', 1);
error_reporting(E_ALL);
class Quotation{
   
    public $weight;
    public $type;    
    //method
    public function __construct($weight, $type){
        $this->weight = $weight;
        $this->type = $type;        
    }   
    public function getPrice(){
        if($this->type == 'plastic'){
            return (10 * $this->weight);
        }
        elseif($this->type == 'metal'){
            return (20 * $this->weight);
        }
    }
}