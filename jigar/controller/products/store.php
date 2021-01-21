<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
require '../../model/storeable.php';
require '../../model/Csv/Storage.php';
require '../../model/Db/Storage.php';

use Csv\Storage as CsvClass;
use Db\Storage as DbClass;

// print_r($_POST);exit;
// $CsvClass = new CsvClass();
// $DbClass = new DbClass();
// echo $flyObject->fly();

if(isset($_POST['store_type']) && !empty($_POST['store_type']) && $_POST['store_type'] == "database")
{
    
    $storeclass = new DbClass($_POST);  
}
elseif(($_POST['store_type']) && !empty($_POST['store_type']) && $_POST['store_type'] == "csv")
{

    $storeclass = new CsvClass($_POST);
    
}
$storeclass->store();
exit("data Succesfully");