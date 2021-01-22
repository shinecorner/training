<?php

// print_r($_POST);exit;

include_once("../../connection.php");

ini_set('display_errors', 1);
error_reporting(E_ALL);


abstract class Shape
{
    public $detail = [];

    abstract public function calculatearea();
}
class Circle extends Shape
{

    const pi = 3.14;

    public function __construct($detail)
    {
        
        $this->detail = $detail;
    }

    public function calculatearea()
    {
        
        return (self::pi) * ($this->detail['radius']) * ($this->detail['radius']);
        
    }
}
class Square extends Shape
{
    public function __construct($detail)
    {
       
        $this->detail = $detail;
    }

    public function calculatearea()
    {
        
        
        return ($this->detail['size'] * $this->detail['size']);
        
    }
}
class Rectangle extends Shape
{
    public function __construct($detail)
    {
       
        $this->detail = $detail;
    }

    public function calculatearea()
    {
        
        
        return ($this->detail['length'] * $this->detail['width']);
         
    }
}
class Triangle extends Shape
{
    public function __construct($detail)
    {
       
        $this->detail = $detail;
    }

    public function calculatearea()
    {
        
        return (1/2)*($this->detail['height'] * $this->detail['base']);
        
    }
}

if (isset($_POST['shape']) && !empty($_POST['shape']) && $_POST['shape'] == "circle") {
    
    $areaclass = new Circle($_POST);
} elseif (isset($_POST['shape']) && !empty($_POST['shape']) && $_POST['shape'] == "square") {

    $areaclass = new Square($_POST);
} elseif (isset($_POST['shape']) && !empty($_POST['shape']) && $_POST['shape'] == "rectangle") {

    $areaclass = new Rectangle($_POST);
} elseif (isset($_POST['shape']) && !empty($_POST['shape']) && $_POST['shape'] == "triangle") {

    $areaclass = new Triangle($_POST);
}
echo $areaclass->calculatearea();
// exit("data Succesfully");
