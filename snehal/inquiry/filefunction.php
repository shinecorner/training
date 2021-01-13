<?php
//  print_r($_GET);

// include_once("../session_check.php");
include_once("connection.php");
 $record = [];
 
    //  exit('123');
    $sql = "SELECT * FROM customer";
     $result = $conn->query($sql);
     $rows = $result->fetch_all(MYSQLI_ASSOC);
    
    // $record = $rows[0];
    // $record = $q[0];
    // print_r($record);
    //  exit;

    if (!file_exists('error/customer/customer.csv')) {
    mkdir('error/customer', 0777);
}
        $file = fopen("error/customer/customer.csv", "a+");
        foreach ($rows as $key => $cid) {
            // $record[$cid['id']] = [
            //     'firstname' => $cid['fname'],
            //     'lastname' => $cid['lname']
            // ];
            $record[$cid['id']]['firstname'] = $cid['fname'];
            $record[$cid['id']]['lastname'] = $cid['lname'];
            
            fputcsv($file, $cid);
        }
        fclose($file);
    
// print_r($record);
    // exit;   
?>