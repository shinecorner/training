<?php

include_once("../session_check.php");
include_once("../../connection.php");

// print_r($_POST);
// exit;

abstract class Investment
{
    public $amount;

    public function __construct($amount, $stock = null)
    {
        $this->amount = $amount;

        // print_r($this->detail);
        // exit;
    }

    public abstract function calculateRetun();
}

class Fd extends Investment
{

    public static $year = 5;
    public static $rate = 7;

    // The method calcArea calculates the area of circles
    public function calculateRetun()
    {
//        echo"snehal";
//        exit;
        return (($this->amount * self::$year * self::$rate) / 100);
    }
}

class Stock extends Investment
{
    public static $prevoursStockPrice =
        [
            'tatamotores' => 3200,
            'tcs' => 2200,
            'relicnes' => 2300,
            'tavasoft' => 5000,
            'icici' => 4000
        ];
    public static $currentStockPrice =
[
            'tatamotores' => 4200,
            'tcs' => 2000,
            'relicnes' => 2100,
            'tavasoft' => 5500,
            'icici' => 3500
        ];

    // The method calcArea calculates the area of circles
    public function calculateRetun()
    {
        $unit = $this->amount / self::$prevoursStockPrice['stock'];
        $totalprofit = $unit * self::$currentStockPrice['stock'];
        return $this->amount - $totalprofit;
    }
}


if (isset($_POST['invert']) && !empty($_POST['invert'])) {
    if ($_POST['invert'] == 'fd') {
        $invest = new Fd($_POST['amount']);
    } else if ($_POST['invert'] == 'stock') {
        $invest = new Stock($_POST['instock']);
    }
    $total = $invest->calculateRetun();
    echo $total;
    exit;
}

// include_once("../../views/area/list.php");
?>