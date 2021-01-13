
<?php
// print_r($_POST);
// exit;
ini_set('display_errors', 1);
error_reporting(E_ALL);


include_once('../session_check.php');
include_once("../../connection.php");

// if(isset($_POST['btn_submit']))
// {
// $q = "INSERT INTO deal('property_id','customer_id','sq_feet_price','sq_feet_maintenance','pgvcl_charge','token_amount')
// VALUES('$_POST[property]','$_POST[customer]','$_POST[sq_feet_price]','$_POST[sq_feet_maintenance]','$_POST[pgvcl_charge]','$_POST[token_amount]')";

// echo $q; exit;
// $result = mysqli_query($con,$q) or die(mysqli_error($con));

// }
// print_r($result) ;exit;
// // print_r($result) ;exit;

// if($result)
// {
//     $deal_id = mysqli_insert_id($con);
//     $sql = "select  * from deal where id = $deal_id ";
//     $result = mysqli_query($con,$sql);
//     $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
//     $specific_row = $rows[0];
//     echo json_encode($specific_row);
//     exit;
// }

// else
// {
//     exit('misstake in qurey');
// }



?>
<?php
class Deal
{

    //property

    public $countBasePrice;
    public $sqfeet;
    public $Sqfeetcharge;
    public $countMaintenance = 250;
    public $pgvclCharge = 10000;
    public $tokenAmount;


    //method

    public function setBasePrice($sq_feet, $charge, $token)
    {
        $this->sqfeet = $sq_feet;
        $this->Sqfeetcharge = $charge;
        $this->tokenAmount = $token;
    }
    public function getremainingPrice()
    {
        $total = 0;
        $total += ($this->sqfeet * $this->Sqfeetcharge);
        $total += ($this->sqfeet * $this->countMaintenance);
        $total += ($this->pgvclCharge);
        $total -= ($this->tokenAmount);
        return $total;



        // $total += ($this->)
    }
}

class Discount extends Deal
{
    //property
    public $discount;

    // discount method
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }
    public function getremainingPrice()
    {
        $total = parent::getremainingPrice();
        $total -= ($this->discount);
        return $total;
    }
}

class Emi extends Deal
{
    // property 
    public  $emi_number;
    public  $emi_amount;

    //method
    public function setEmiamount($emi_amount)
    {
        $this->emi_amount = $emi_amount;
    }
    public function getNumberOfEmi()
    {
        $total = parent::getremainingPrice();
        $this->emi_number = $total / ($this->emi_amount);
        return $this->emi_number;
        // echo $total;
        // exit;
    }
}



// $Emi = new Emi;
// echo $Emi->getNumberOfEmi();
// exit;


// $Discount = new Discount;
// echo $Discount->getremainingPrice();
// exit;

if (!empty($_POST['property']) && !empty($_POST['sq_feet_price']) && !empty($_POST['token_amount'])) {
    $property = $_POST['property'];
    $sq_feet_price = $_POST['sq_feet_price'];
    $token_amount = $_POST['token_amount'];
    $discount_offer = (isset($_POST['discount_offer']) && !empty($_POST['discount_offer']) ? $_POST['discount_offer'] : 0);
    $emi_amount = (isset($_POST['emi_amount']) && !empty($_POST['emi_amount']) ? $_POST['emi_amount'] : 0);
    $number_of_emi = 0;

    $p_query = "select * from property where id = " . $property;
    // $resultP = mysqli_query($con, $p_query);
    $resultP = $con->query($p_query);

    // $propertydata = mysqli_fetch_all($resultP, MYSQLI_ASSOC);
    $propertydata = $resultP->fetch_all(MYSQLI_ASSOC);

    $propertyData = $propertydata[0];

    if ($discount_offer) {
        $dealObj = new Discount;
        $dealObj->setDiscount($discount_offer);
    } elseif ($emi_amount) {
        $dealObj = new Emi;
        $dealObj->setEmiamount($emi_amount);
    } else {
        $dealObj = new Deal;
    }

    $dealObj->setBasePrice($propertyData['sq_feet'], $sq_feet_price, $token_amount);
    $remaining_balance = $dealObj->getremainingPrice();
    if ($emi_amount) {

        $number_of_emi = $dealObj->getNumberOfEmi();
    }
    $insert_deal = "INSERT INTO deal(property_id,customer_id,sq_feet_price,sq_feet_maintenance,pgvcl_charge,token_amount,remaining_balance,discount_offer,emi_amount,number_of_emi) values('" . $_POST['property'] . "','" . $_POST['customer'] . "','" . $_POST['sq_feet_price'] . "','" . $_POST['sq_feet_maintenance'] . "','" . $_POST['pgvcl_charge'] . "',$token_amount,$remaining_balance, '" . $discount_offer . "','" . $emi_amount . "','" . $number_of_emi . "')";


    // echo $insert_deal;exit;
    // $resultd = mysqli_query($con, $insert_deal) or die(mysqli_error($con));
    $resultd = $con->query($insert_deal);

    if ($emi_amount) {

        echo $number_of_emi;
    } else {
        echo $remaining_balance;
    }
    
} else {
    echo "not available ૂ";
}

exit;

// $bharti->setBasePrice(2300, 800, 1000);


// echo $bharti->getremainingPrice();
