<?php

include_once("../session_check.php");
include_once("../../connection.php");

interface Logabble{
    public function writeLogs($error);
}

class DBLogger implements Logabble {
    public function writeLogs($error){


        $conn = new mysqli("localhost", "snehal", "snehal123", "develop_snehal");

         $sql = "INSERT INTO error (error, created, file, line_number) values ('".$error->getMessage()."', '".date("Y-m-d H:i:s")."', '".$error->getFile()."', '".$error->getLine()."')";
        //  echo $sql;
        //  exit;

    $result =$conn->query($sql);
        return "database enter entry";
    }
}

class FileLogger implements Logabble {
    public function writeLogs($error){
        if(!is_dir("../../error/logs")) {
        mkdir("../../error/logs",0777);
    }
    $file = fopen("../../error/logs/error.csv","a+");
    $error_detail = [
        $error->getMessage(),
        date("Y-m-d H:i:s"),        
        $error->getFile(),
        $error->getLine(),
    ];
    fputcsv($file, $error_detail);
    fclose($file);

        return "Csv file enter entry";
    }
}

function inverse($x) {

    if(!is_numeric($x)){
        throw new Exception('Given detail is not numeric');
    }
    if (!$x) {
        throw new Exception('Division by zero.');
    }
    return 1/$x;
}

try{
    // echo inverse(2) . "\n";
    // echo inverse(0) . "\n";
    // echo inverse("xyz") . "\n";	
    // echo "hi how are you";
    // echo "abc";
    // echo "xyz";
    throw new Exception('Division by zero.');
}
catch (Exception $e) {

if (isset($_POST['logger']) && !empty($_POST['logger']) && $_POST['logger'] == 'database'){
    $log = new DBLogger;
}
elseif(isset($_POST['logger']) && !empty($_POST['logger'])  && $_POST['logger'] == 'file'){
    $log = new FileLogger;
}
$log->writeLogs($e);
} 