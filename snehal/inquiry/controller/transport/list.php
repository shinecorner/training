<?php
//ini_set('display_errors', 1);
//error_reporting(E_ALL);
include_once("../session_check.php");
include_once("../../connection.php");

// print_r($_POST);
// exit;

abstract class Transport
{
    public $km;

    public function __construct($km)
    {
        $this->km = $km;
    }

    public abstract function calculateRate();
}
class Air extends  Transport{
    public $tax = 10;
    public $perKmcharge = 20;
    public function  calculateRate()
    {
        $base = ($this->km * $this->perKmcharge);
        $tax = (($base) * ($this->tax/100));
        return $total = $base + $tax;
    }

}
class Road extends  Transport{
    public  $tax = 2;
    public $perKmcharge = 10;
    public function  calculateRate()
    {
        $base = ($this->km * $this->perKmcharge);
        $tax = (($base) * ($this->tax/100));
        return $total = $base + $tax;
    }
}
class sea extends  Transport{
    public $tax = 5;
    public $perKmcharge = 15;
    public function  calculateRate()
    {
        $base = ($this->km * $this->perKmcharge);
        $tax = (($base) * ($this->tax/100));
        return $total = $base + $tax;
    }
}

if (isset($_POST['travel_type']) && !empty($_POST['travel_type'])) {
    if ($_POST['travel_type'] == 'road') {
        $travel = new Road($_POST['km']);
    } elseif ($_POST['travel_type'] == 'air') {
        $travel = new Air($_POST['km']);
    } elseif ($_POST['travel_type'] == 'sea') {
        $travel = new Sea($_POST['km']);
    }
     $total = $travel->calculateRate();
     echo $total;
     exit;

}

// include_once("../../views/area/list.php");
?>