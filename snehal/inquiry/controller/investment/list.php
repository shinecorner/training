<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include_once("../session_check.php");
include_once("../../connection.php");

// print_r($_POST);
// exit;

abstract class Investment
{
    public $amount;
    public $stock;

    public function __construct($amount, $stock = null)
    {
        $this->amount = $amount;
        $this->stock = $stock;
        // print_r($this->detail);
        // exit;
    }

    public abstract function calculateReturn();
}

class Fd extends Investment
{

    public static $year = 5;
    public static $rate = 7;

    // The method calcArea calculates the area of circles
    public function calculateReturn()
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
    public function calculateReturn()
    {
        $unit = $this->amount / self::$prevoursStockPrice[$this->stock];
        $sellAmount = $unit * self::$currentStockPrice[$this->stock];
        return $sellAmount - $this->amount;
    }
}


if (isset($_POST['invert']) && !empty($_POST['invert'])) {
    if ($_POST['invert'] == 'fd') {
        $invest = new Fd($_POST['amount']);
    } elseif ($_POST['invert'] == 'stock') {
        $invest = new Stock($_POST['amount'], $_POST['instock']);
    }
    $total = $invest->calculateReturn();
    echo $total;
    exit;
}

// include_once("../../views/area/list.php");
?>