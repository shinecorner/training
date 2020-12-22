<?php


$con  = mysqli_connect('localhost', 'root', '', 'buildcon');
$count = 0;








$query = "SELECT COUNT(*) FROM orders";
$rs_result = mysqli_query($con, $query);
$row = mysqli_fetch_row($rs_result);
$total_records = $row[0];

echo "</br>";
// Number of pages required.   
$total_pages = ceil($total_records / $per_page_record);
$pagLink = "";

// for ($i = 1; $i <= $total_pages; $i++) {
//     if ($i == $page) {
//         $pagLink .= "<a class = 'active' href='/controller/customer/list.php?page="
//             . $i . "'>" . $i . " </a>";
//     } else {
//         $pagLink .= "<a href='/controller/customer/list.php?page=" . $i . "'>   
//                                                 " . $i . " </a>";
//     }
// };
// echo $pagLink;
