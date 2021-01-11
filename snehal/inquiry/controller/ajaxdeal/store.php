<?php
// print_r($_POST);
// exit;

include_once("../session_check.php");
include_once("../../connection.php");

class Deal
{

    //property

    public $countBasePrice;
    public $sqfoot;
    public $Sqfootprice;
    public $countMaintenance = 250;
    public $pgvclCharge = 10000;
    public $tokenAmount;

    //method
    
    public function setBasePrice($sq_foot, $price, $token)
    {
        $this->sqfoot = $sq_foot;
        $this->Sqfootprice = $price;
        $this->tokenAmount = $token;
    }

    public function getremainingamount()
    {
        $total = 0;
        $total += ($this->sqfoot * $this->Sqfootprice);
        $total += ($this->sqfoot * $this->countMaintenance);
        $total += ($this->pgvclCharge);
        $total -= ($this->tokenAmount);
        return $total;
    //    echo $total;
    //    exit;
    }
}
class DisscountDeal extends Deal{
    public $disscount;

    public function setDisscount($disscount)
    {
        $this->disscount = $disscount;
    }

    public function getremainingamount()
    {
        $total = parent::getremainingamount();
        $total -= ($this->disscount);
        return $total;
    }
}
// print_r($_POST);
// exit;
if (!empty($_POST['property']) && !empty($_POST['sq_foot_price']) && !empty($_POST['token_amount'])) {
    //  echo $total;
    //    exit;
    $property_id = $_POST['property'];
    $customer_id = $_POST['customer'];
    $sq_foot_price = $_POST['sq_foot_price'];
    $token_amount = $_POST['token_amount'];
    $disscount = (isset($_POST['disscount']) && !empty($_POST['disscount']) ? $_POST['disscount'] : 0 );
// echo $disscount;
// exit;
    $p_sql = "select * from property where id = " . $property_id;
    // echo $p_sql;
    // exit;
    $resultP = mysqli_query($conn, $p_sql);

    $property = mysqli_fetch_all($resultP, MYSQLI_ASSOC);
    $property = $property[0];
    
    if($disscount){
        $dealObj = new DisscountDeal;
        $dealObj->setDisscount($disscount);
    }
    else{
        $dealObj = new Deal;
    }
    $dealObj->setBasePrice($property['sq_foot'], $sq_foot_price, $token_amount);
    $remaining_amount = $dealObj->getremainingamount();
    
    $sql = "INSERT INTO deal (property_id, customer_id, sq_foot_price, sq_foot_maintenance, pgvcl_charge, token_amount, remaining_amount, disscount) values ('".$property_id."', '".$customer_id."', '".$sq_foot_price."', '250', '10000', '".$token_amount."', '".$remaining_amount."', '".$disscount."')";
    // echo $sql;
    // exit;
    $result = mysqli_query($conn,$sql);
    echo $remaining_amount;
    exit;

    
} 

else 
{
    echo "abc";
}

exit;