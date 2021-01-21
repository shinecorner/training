<?php 
    
include_once('../session_check.php');
include_once("../../connection.php");

require '../../model/Storable.php';
require '../../model/Db/Storage.php';
require '../../model/Csv/Storage.php';

use Csv\Storage as CsvClass;
use Db\Storage as DbClass;

// print_r($_POST);exit;
if (isset($_POST['store_type']) && !empty($_POST['store_type']) && $_POST['store_type'] == 'database'){
    // $data = $_POST['store_type'];
    $pro = new DbClass($_POST);
}
elseif(isset($_POST['store_type']) && !empty($_POST['store_type'])  && $_POST['store_type'] == 'file'){
    $data = $_POST['store_type'];
    $pro = new CsvClass($_POST);
}
$pro->store();

?>