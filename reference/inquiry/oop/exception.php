<?php
include_once("../connection.php");
ini_set('display_errors', 1);
error_reporting(E_ALL);

//$file = fopen("../uploads/logs/error.txt","r");
//$content = fread($file, filesize("../uploads/logs/error.txt"));
//fclose($file);
//echo $content;
//exit;


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
    print_r($e);exit;
//    if(!is_dir("../uploads/logs")) {
//        mkdir("../uploads/logs",0777);
//    }
//    $file = fopen("../uploads/logs/error.txt","a+");
//    fwrite($file,date("Y-m-d H:i:s") . " --- " . $e->getMessage() . "<br>");
//    fclose($file);

    if(!is_dir("../uploads/logs")) {
        mkdir("../uploads/logs",0777);
    }
    $file = fopen("../uploads/logs/error.csv","a+");
    $error_detail = [
        date("Y-m-d"),
        date("H:i:s"),
        $e->getMessage(),
        $e->getFile(),
        $e->getLine(),
    ];
    fputcsv($file, $error_detail);
    fclose($file);

//    print_r($e);
//    exit;
//    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
//echo "<br>";
//// Continue execution
//echo "Hello World\n";
