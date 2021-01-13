<?php
include_once("../../connection.php");
ini_set('display_errors', 1);
error_reporting(E_ALL);

function inverse($x) {

    if(!is_numeric($x)){
        throw new Exception('Given detail is not numeric');
    }
    if (!$x) {
        throw new Exception('Division by zero.');
    }
    return 1/$x;
}

try {
//    echo inverse(2) . "\n";
//    echo inverse(0) . "\n";
    echo inverse("xyz") . "\n";	
    echo "hi how are you";
//    echo "abc";
//    echo "xyz";
} catch (Exception $e) {
//    if(!is_dir("../uploads/logs")) {
//        mkdir("../uploads/logs",0777);
//    }
//    $file = fopen("../uploads/logs/error.txt","a+");
   fwrite($file,date("Y-m-d H:i:s") . " --- " . $e->getMessage() . "<br>");
//    fclose($file);


$select = "select * from customer ";

$query = $con->query($select);

$data = $query->fetch_all(MYSQLI_ASSOC);

if(!is_dir("../../uploads/logs")) {
    mkdir("../../uploads/logs",0777);
}

$file = fopen("../../uploads/logs/customer.csv","a+");
$select = "select * from customer ";

$query = $con->query($select);

$data = $query->fetch_all(MYSQLI_ASSOC);

foreach ($data as $line) {
    fputcsv($file, $line);
  }
}

  ?>