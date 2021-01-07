<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
class Quotation{
    //property
    private $fiberWeight;
    private $fiberType;
    private $chemicalUsed;
    private $ovenTime;
    public $perKGPrice = 60;
    public $perLitterChemicalPrice = 15;
    public $perHourPrice = 50;

    //method
    public function setFiber($weight, $type){
        $this->fiberWeight = $weight;
        $this->fiberType = $type;
        $this->detectChemicalUsed();
        $this->detectOvenTime();
    }
    private function detectChemicalUsed(){
        if($this->fiberType == 'pvc')
        {
            $this->chemicalUsed = 5;
        }
        if($this->fiberType == 'backalight')
        {
            $this->chemicalUsed = 10;
        }
    }
    private function detectOvenTime(){
        if($this->fiberType == 'pvc')
        {
            $this->ovenTime = 2;
        }
        if($this->fiberType == 'backalight')
        {
            $this->ovenTime = 3;
        }
        return $this->ovenTime;
    }
    public function getPrice(){
        $total = 0;
        $total += ($this->perKGPrice * $this->fiberWeight);
        $total += ($this->chemicalUsed * $this->perLitterChemicalPrice);
        $total += ($this->ovenTime * $this->perHourPrice);
        return $total;
    }
}

$hareshQuotation = new Quotation;
$rameshQuotation = new Quotation;


$rameshQuotation->setFiber(30, 'backalight');
$hareshQuotation->setFiber(20,'pvc');

echo $rameshQuotation->getPrice();
echo $hareshQuotation->getPrice();

//echo $rameshQuotation->detectOvenTime();