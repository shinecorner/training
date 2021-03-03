<?php
//$name = "Mayur";

//$marks = [89, 98, 88];
//$marks = ['Sci' => 89, 'Maths' => 98, 'Eng' => 88];
//$marks = [89, 3 => 98, 88];
//print_r($marks);

//foreach($marks as $subject => $mark){
//    echo $subject;
//    echo "<br>";
//}

//$cars = [
//    ["Volvo",22,18],
//    ["BMW",15,13],
//    ["Saab",5,2],
//    ["Land Rover",17,15],
//    ["Suzuki",11,18],
//];

//$cars = [
//    ["name" => "Volvo","stock" => 22, "sold" => 18, "color" => "red"],
//    ["name" => "BMW","stock" => 34, "sold" => 12, "color" => "silver"],
//    ["name" => "Saab","stock" => 30, "sold" => 22, "color" => "gray"],
//    ["name" => "Land Rover","stock" => 88, "sold" => 33, "color" => "yellow"],
//    ["name" => "Suzuki","stock" => 66, "sold" => 44, "color" => "black"],
//];

/*$cars = [
    [
        "name" => "Volvo",
        "model" => [
            "v1" => [
                "stock" => 12, "sold" => 3, "color" => "red"
            ],
            "v2" => [
                "stock" => 31, "sold" => 6, "color" => "Yellow"
            ],
        ]
    ],
    [
        "name" => "BMW",
        "model" => [
            "B1" => [
                "stock" => 78, "sold" => 18, "color" => "Purple"
            ],
            "B2" => [
                "stock" => 45, "sold" => 11, "color" => "magento"
            ],
        ]
    ],
];*/

//print_r($cars);
//echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
//echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
//echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
//echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

//foreach ($cars as $key => $car){
//    echo $car[0] . ": In stock: ". $car[1].". sold: ". $car[2]."<br>";
//}

//foreach ($cars as $key => $car){
//    echo $car["name"] . ": In stock: ". $car["stock"].". sold: ". $car["sold"]."<br>";
//}

//foreach ($cars as $car){
//    foreach ($car as $property => $value){
//        echo $property . "----" . $value;
//        echo "<br>";
//    }
//    echo "<br><br><br>";
//}
?>

<?php
echo "<table border='1' width='100%'>";
foreach ($cars as $car) {
    foreach ($car['model'] as $model => $detail) {
        echo "<tr>";
        echo "<td>" . $car['name'] . "</td>";
        echo "<td>" . $model . "</td>";
        echo "<td>" . $detail['stock'] . "</td>";
        echo "<td>" . $detail['sold'] . "</td>";
        echo "<td>" . $detail['color'] . "</td>";
        echo "</tr>";
    }
}
echo "</table>";
?>
<table border="1" width="100%">
    <?php foreach ($cars as $car): ?>
        <?php foreach ($car['model'] as $model => $detail): ?>
            <tr>
                <td><?php echo $car['name']; ?></td>
                <td><?php echo $model; ?></td>
                <td><?php echo $detail['stock']; ?></td>
                <td><?php echo $detail['sold']; ?></td>
                <td><?php echo $detail['color']; ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endforeach; ?>
</table>

<?php
$cars[0]['name'] = 'Volvo';
$cars[0]['model']['v1']['stock'] = 12;
$cars[0]['model']['v1']['sold'] = 6;
$cars[0]['model']['v1']['color'] = 'red';


print_r($cars);
