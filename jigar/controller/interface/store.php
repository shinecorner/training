<?php

include_once("../../connection.php");
// ini_set('display_errors', 1);
// error_reporting(E_ALL);

interface Logable
{
    public function write($message);
}

class DbLogger implements Logable
{
    public function write($error)
    {

        $con = new mysqli("localhost","root","","develop_jigar");

        $query = "insert into interface_tbl(error,created_at,file,line) values('" .$error->getMessage(). "','" .date("Y-m-d H:i:s"). "','" .$error->getFile(). "','" .$error->getLine(). "')";
       
        $result = $con->query($query);
		
        
    }
}


class FileLogger implements Logable
{
    public function write($error)
    {
        $file = fopen("../../uploads/logs/interface.csv", "a+");

        if (!is_dir("../../uploads/logs") ) {
            mkdir("../uploads/logs", 0777);
        }
        $file = fopen("../../uploads/logs/interface.csv", "a+");
        $error_detail = [
            date("Y-m-d"),
            date("H:i:s"),
            $error->getMessage(),
            $error->getFile(),
            $error->getLine(),
        ];
        fputcsv($file, $error_detail);
        fclose($file);
    }
}

try {
    throw new Exception('Divided By Zero');
} catch (Exception $e) {


    if (isset($_POST['log_type']) && !empty($_POST['log_type']) && $_POST['log_type'] == "database") {
        $logger = new DbLogger;
    } elseif (isset($_POST['log_type']) && !empty($_POST['log_type']) && $_POST['log_type'] == "file") {
        $logger = new FileLogger;
    }
     $logger->write($e);
    




}






