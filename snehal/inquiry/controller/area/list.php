<?php

include_once("../session_check.php");
include_once("../../connection.php");

// print_r($_POST);
// exit;

abstract class shape
{
    public $detail = [];

    public function __construct($data)
    {
        $this->detail = $data;
        // print_r($this->detail);
        // exit;
    }

    public abstract function calculateArea();
}

class Circle extends Shape
{

    const PI = 3.14;


    // The method calcArea calculates the area of circles
    public function calculateArea()
    {
        return $this->detail['radius'] * $this->detail['radius'] * self::PI;
    }
}

class Squre extends Shape
{

    // The method calcArea calculates the area of circles
    public function calculateArea()
    {
        return $this->detail['size'] * $this->detail['size'];
    }
}

class Rectangle extends Shape
{

    // The method calcArea calculates the area of circles
    public function calculateArea()
    {
        return $this->detail['length'] * $this->detail['width'];
    }
}

class Triangle extends Shape
{

    // The method calcArea calculates the area of circles
    public function calculateArea()
    {
        return (($this->detail['base'] * $this->detail['height']) / 2);
    }
}

if (isset($_POST['area_type']) && !empty($_POST['area_type'])) {
    if ($_POST['area_type'] == 'cricle') {
        $area = new Circle($_POST);
    } else if ($_POST['area_type'] == 'squre') {
        $area = new Squre($_POST);
    } else if ($_POST['area_type'] == 'rectangle') {
        $area = new Rectangle($_POST);
    } else if ($_POST['area_type'] == 'triangle') {
        $area = new Triangle($_POST);
    }
    $total = $area->calculateArea();
    echo $total;
    exit;

}

// include_once("../../views/area/list.php");
?>