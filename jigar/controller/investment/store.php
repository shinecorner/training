<?php

// print_r($_POST);exit;

include_once("../../connection.php");

ini_set('display_errors', 1);
error_reporting(E_ALL);


abstract class Investment
{
    public $amount;
    public $stock;

    public function __construct($amount, $stock = null)
    {
        $this->amount = $amount;
        $this->stock = $stock;
    }
    abstract public function calculatereturn();
}


class Fd extends Investment
{
    public static $year = 5;
    public static $rate = 7;

    public function calculatereturn()
    {
        return (($this->amount) * (self::$rate) * (self::$year)) * (1 / 100);
    }
}



class Stock extends Investment
{
    public static $previousstockprice = [
        "tcs" => "2200",
        "adani" => "520",
        "reliance" => "2000",
        "ajanta" => "1700",
        "birla" => "728"
    ];

    public static $currentstockprice = [
        "tcs" => "2290",
        "adani" => "528",
        "reliance" => "2050",
        "ajanta" => "1800",
        "birla" => "800"
    ];


    public function calculatereturn()
    {
        $unit = ($this->amount) / (self::$previousstockprice[$this->stock]);
        $currentamount = $unit * (self::$currentstockprice[$this->stock]);
        $profit  = $currentamount - (self::$previousstockprice[$this->stock]);
        return $profit;
    }
}
if (isset($_POST['invest']) && !empty($_POST['invest'])) {
    if ($_POST['invest'] == "fd") {
        // exit("hello");
        $investclass = new Fd($_POST['amount']);
    } elseif ($_POST['invest'] == "stock") {
        // exit("hello");
        if (isset($_POST['stock_list']) && !empty($_POST['stock_list'])) {
            // exit("hello");
            $investclass = new Stock($_POST['amount'],$_POST['stock_list']);
        }
    }
    echo $investclass->calculatereturn();
    // exit("data Succesfully");
}
