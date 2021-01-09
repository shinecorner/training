
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
if (!empty($_POST['property']) && !empty($_POST['sq_feet_price']) && !empty($_POST['token_amount'])) {
    $property = $_POST['property'];
    $sq_feet_price = $_POST['sq_feet_price'];
    $token_amount = $_POST['token_amount'];

    $p_query = "select * from property where id = " . $property;
    $resultP = mysqli_query($con, $p_query);

    $propertydata = mysqli_fetch_all($resultP, MYSQLI_ASSOC);
    $propertyData = $propertydata[0];
    $deal = new Deal;
    $deal->setBasePrice($propertyData['sq_feet'], $sq_feet_price, $token_amount);


    echo $deal->getremainingPrice();
} 
else 
{
    echo "";
}

exit;


// $bharti->setBasePrice(2300, 800, 1000);


// echo $bharti->getremainingPrice();
