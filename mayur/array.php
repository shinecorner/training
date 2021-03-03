<?php
//
//$car =[
//    ['Brand'=>'volvo','stock'=>20,'sold'=>5
//    ,'Modal' => ['v1','v2']
//    ],
//    ['Brand'=>'BMW','stock'=>30,'sold'=>15
//    ,'Modal' => ['b1','b2']
//    ],
//    ['Brand'=>'suzuki','stock'=>40,'sold'=>10
//        ,'Modal' => ['s1','s2']
//    ]
//];
//
//print_r($car);
//echo "<br><br>";
?>
<!--<table border="1">-->
<?php //foreach($car as $brand => $car1): ?>
<!--    <tr>-->
<!--        <td>--><?php //echo $car1["Brand"]; ?><!--</td>-->
<!--        <td>--><?php //echo $car1["stock"]; ?><!--</td>-->
<!--        <td>--><?php //echo $car1["sold"]; ?><!--</td>-->
<!--        --><?php //foreach($car1["Modal"] as $mn=> $car["Modal"]): ?>
<!--            <td>--><?php //echo $car["Modal"]; ?><!--</td>-->
<!--        --><?php //endforeach ?>
<!--    </tr>-->
<?php //endforeach ?>
<!--</table>-->

<?php
$mysqli = new mysqli("localhost","phpmyadmin","root","practice");

if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}
$query = "select student_master.id,student_master.student_name,student_wise_subject_master.subjectname,student_wise_subject_master.marks from student_master, student_wise_subject_master
where student_master.id=student_wise_subject_master.student_id ";

$var_array = [];
$result = $mysqli->query($query);
while($row = $result->fetch_object()) {
    print_r($row);
}



//foreach ($var_array as $result->fetch_assoc)
//{
//
//}




$result = $mysqli -> query($query);



?>









