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
class DiscountDeal extends Deal{
    public $discount;

    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    public function getremainingamount()
    {
        $total = parent::getremainingamount();
        $total -= ($this->discount);
        return $total;
    }
}
class EmiDeal extends Deal{
    public $emiamount;

    public function setEmiammount($emi)
    {
        $this->emiamount = $emi;
    }
    public function getEmiMonth()
    {
        $total = parent::getremainingamount();
        $emimonth = ($total / $this->emiamount);
        return  $emimonth;
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
    $discount = (isset($_POST['discount']) && !empty($_POST['discount']) ? $_POST['discount'] : 0 );
    $emimonth = (isset($_POST['emimonth']) && !empty($_POST['emimonth']) ? $_POST['emimonth'] : 0 );
    $emiamount = (isset($_POST['emiamount']) && !empty($_POST['emiamount']) ? $_POST['emiamount'] : 0 );
// echo $discount;
// exit;
    $p_sql = "select * from property where id = " . $property_id;
    // echo $p_sql;
    // exit;
   
  $resultP = $conn->query($p_sql);
  $property = $resultP->fetch_all(MYSQLI_ASSOC);
 
    
    $property = $property[0];
    
    if($discount){
        $dealObj = new DiscountDeal;
        $dealObj->setDiscount($discount);
    }
    elseif($emiamount)
    {
        $dealObj = new EmiDeal;        
        $dealObj->setEmiammount($emiamount);        
    }
    else{
        $dealObj = new Deal;
    }
    $dealObj->setBasePrice($property['sq_foot'], $sq_foot_price, $token_amount);
    if($emiamount)
    {
        $emimonth = $dealObj->getEmiMonth($emiamount);
    }
    $remaining_amount = $dealObj->getremainingamount();
    
        
    $sql = "INSERT INTO deal (property_id, customer_id, sq_foot_price, sq_foot_maintenance, pgvcl_charge, token_amount, remaining_amount, discount, emimonth, emiamount) values ('".$property_id."', '".$customer_id."', '".$sq_foot_price."', '250', '10000', '".$token_amount."', '".$remaining_amount."', '".$discount."', '".$emimonth."', '".$emiamount."')";
    // echo $sql;
    // exit;
    // $result = mysqli_query($conn,$sql);
    $result =$conn->query($sql);
    // $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
       if($emimonth){
                echo $emimonth;
                echo "<br/>";
       } 
       else{
            echo $remaining_amount;
            echo "<br/>";
       }
        
        
    
    exit;

    
} 

else 
{
    echo "abc";
}

exit;