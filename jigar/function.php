

<?php

// $a = 5;
// $b = 7;

// $temp = $a;
// $a = $b;
// $b = $temp;
// echo $a , $b;

$c = 5;
function calculateInterest($p,$r,$n)
{
    // $c = 10;
    // echo $c;
    // exit;
    $i = ($p*$r*$n)/100;
    return $i;
}
$interest = calculateInterest(1000,2,3);
$p_val = 2000;
$r_val = 3;
$n_val = 5;
echo $interest;
echo "<br>";
$compund = calculateInterest($p_val,$r_val,$n_val);
echo $compund;
?>