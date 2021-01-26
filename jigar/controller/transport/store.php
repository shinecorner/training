<?php

// print_r($_POST);
// exit;

include_once("../../connection.php");

ini_set('display_errors', 1);
error_reporting(E_ALL);


abstract class Transport
{
    public $km;
    public function __construct($km)
    {
        $this->km = $km;
    }
    abstract public function calculaterate();
}
class Air extends Transport
{
    public static $perkmcharge = 10;
    public static $taxrate = 10;

    public function calculaterate()
    {
        $base = ($this->km) * (self::$perkmcharge);
        $tax = $base * (self::$taxrate / 100);
        $total = $base + $tax;
        return $total;
    }
}
class Sea extends Transport
{
    public static $perkmcharge = 20;
    public static $taxrate = 5;

    public function calculaterate()
    {
        $base = ($this->km) * (self::$perkmcharge);
        $tax = $base * (self::$taxrate / 100);
        $total = $base + $tax;
        return $total;
    }
}
class Road extends Transport
{
    public static $perkmcharge = 30;
    public static $taxrate = 2;

    public function calculaterate()
    {
        $base = ($this->km) * (self::$perkmcharge);
        $tax = $base * (self::$taxrate / 100);
        $total = $base + $tax;
        return $total;
    }
}


if (isset($_POST['transport']) && !empty($_POST['transport'])) {
    if ($_POST['transport'] == "road") {
        $transportclass = new Road($_POST['km']);
    } elseif ($_POST['transport'] == "sea") {

        $transportclass = new Sea($_POST['km']);
    } elseif ($_POST['transport'] == "air") {

        $transportclass = new Air($_POST['km']);
    }

    echo $transportclass->calculaterate();
    // exit("data Succesfully");
}
