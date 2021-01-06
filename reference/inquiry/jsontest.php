<?php
//$array = [54,85,63];
$array = ['fname'=>'Jigar', 'lname'=>'Kariya', 'marks' => ['maths' => 89, 'english' => 48]];
$encoded = json_encode($array);
echo $encoded;
$decoded = json_decode($encoded);
echo '<br>';
print_r($decoded);
?>