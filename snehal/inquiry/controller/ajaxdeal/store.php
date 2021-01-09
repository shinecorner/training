<?php
//print_r($_POST);

include_once("../session_check.php");
include_once("../../connection.php");
include_once("../../controller/ajaxdeal/list.php");
$property_id = $_POST['property_id'];
$customer_id = $_POST['customer_id'];
$sq_foot_price = $_POST['sq_foot_price'];
$sq_foot_maintenance = $_POST['sq_foot_maintenance'];
$pgvcl_charge = $_POST['pgvcl_charge'];
$token_amount = $_POST['token_amount'];
$remaining_amount = $_POST['remaining_amount'];

$q = "INSERT INTO deal (property_id, customer_id, sq_foot_price, sq_foot_maintenance, pgvcl_charge, token_amount, remaining_amount)
VALUES ('".$property_id."', '".$customer_id."', '".$sq_foot_price."', '".$sq_foot_maintenance."', '".$pgvcl_charge."', '".$token_amount."', '".$remaining_amount."')";

// echo $q;
// exit;
$result = mysqli_query($conn,$q);

if($result)
{
    if (isset($_GET['submit'])) {
        {
    class Deal
    {
        public $countBasePrice;
        public $sq_foot;
        public $sq_foot_price;
        public $sq_foot_maintenance;
        public $pgvcl_charge;
        public $token_amount;

        public function setBasePrice($sq_foot, $sq_foot_price, $token_amount)
        {
            $this->sq_foot = $sq_foot;
            $this->$sq_foot = $rows;
            $this->sq_foot_price = $sq_foot_price;
            $this->token_amount = $token_amount;
        }
        public function getremaining_amount()
        {
            $remaining_amount = 0;
            $remaining_amount += ($this->sq_foot * $this->sq_foot_price);
            $remaining_amount += ($this->sq_foot * $this->sq_foot_maintenance);
            $remaining_amount += ($this->pgvcl_charge);
            $remaining_amount -= ($this->token_amount);
        }
    }

    $remaining_ammout = new deal;
    $remaining_ammout->setBasePrice('$_POST[sq_foot_maintenance]', '$_POST[sq_feet_price]', '$_POST[token_amount]');
    $remaining_ammout->setBasePrice();
    echo $remaining_ammout->getremainingPrice();
    $result = mysqli_query($conn, $q);
    
    header('Location: /controller/ajaxdeal/test.php');
    exit;
}

else
{
    exit('misstake in qurey');
}

// var_dump($result);
// exit;
?>