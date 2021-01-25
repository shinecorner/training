<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require 'ecommerce.php';
require 'industry.php';

// $quotation = new Ecommerce\Quotation(10, 'metal');
// echo $quotation->getPrice();

// $hareshQuotation = new Industry\Quotation(20,'pvc');
// echo $hareshQuotation->getPrice();

// $rameshQuotation = new Industry\Quotation(30, 'backalight');
// echo $rameshQuotation->getPrice();
// echo $rameshQuotation->detectOvenTime();

$fabricationQuotation = new Industry\FabricationQuotation(20,'pvc');
// $fabricationQuotation->setFiber();
$fabricationQuotation->setSqfeet(50);
//echo $fabricationQuotation->getPrice();

// $assemblingQuotation = new Industry\AssemblingQuotation;
// $assemblingQuotation->setFiber(20, 'pvc');
// $assemblingQuotation->setWeight(12);
// echo $assemblingQuotation->getPrice();

class Message{
    public function giveMessage($message, $media=null){
        return "Message: $message, through $media";
    }
}
$msg = new Message;
echo $msg->giveMessage("Hello world");