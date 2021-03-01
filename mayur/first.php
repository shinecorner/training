<?php

// echo "Hello Mayur";

// $message = "Hello Mayur";
// echo $message;

// $x = 9;
// $y = 4;
// echo $x;
// echo $x + $y;
// echo $x * $y;
// echo $x % $y;

// if($x == 10){
//     echo "same value";
// }

// if(($x % 2) != 0){
//     echo "X is odd";
// }
// else{
//     echo "X is even";
// }

// $age = 62;
// if($age <= 12){
//     echo "Child: half ticket";
// }
// elseif(($age >= 13) && ($age <= 60)){
//     echo "Young: Full ticket";
// }
// else{
//     echo "Senior citizen: Half ticket";
// }

// for($i = 1; $i <= 10; $i++){
//     echo $i;
//     echo "<br>";
// }

// $var = 5;
// $var = $var + 1;
// echo $var++;
// echo ++$var;
// echo $var;

// $sum = 0;
// for($i = 1; $i <= 5; $i++){
//     $sum = $sum + $i ;    
// }
// echo $sum;

// for($i = 1; $i <= 5; $i ++){
//     for($j = 1; $j <= $i; $j++){
//         echo "*";
//     }
//     echo "<br>";
// }
// echo rand(1,20);

// do{
//     $number = rand(1, 20);
//     if($number == 3){
//         echo "Congretulation, you won the ticket: " . $number;
//     }
//     else{
//         echo "Sorry, you are not lucky: " . $number;
//     }
//     echo "<br>";
// }while($number != 3);

// $favcolor = "purple";

// switch ($favcolor) {
//   case "red":
//     echo "Your favorite color is red!";
//     break;
//   case "blue":
//     echo "Your favorite color is blue!";
//     break;
//   case "green":
//     echo "Your favorite color is green!";
//     break;
//   default:
//     echo "Your favorite color is neither red, blue, nor green!";
// }

// $x = 6;
// echo $type = (($x % 2) == 0) ? "even" : "odd";
// echo $type; 

// function sumVariable($first, $second, $third = 0){
//     $sum = $first + $second + $third;
//     return $sum;
// }

// $result = sumVariable(10, 20);
// echo $result;


// function chk_global(){
//      $x = 10;
//      $y = 20;
//    return ($x + $y);
// }
// $result = chk_global();
// echo $result;


$str = "Hello Jai Swaminarayan";
echo str_replace("Swaminarayan","Ramnath",$str);
echo "<br>";
// echo str_word_count($str);
// echo "<br>";
// echo strlen($str);
// echo "<br>";
// echo str_repeat(1,6);
// echo "<br>";
// echo abs(-9.9);
// echo "<br>";
// echo addcslashes("Helloo","H");
// echo "<br>";
// $tr = explode(",","Heello, i am here");
// print_r ($tr);


$str = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';
echo htmlentities($str);

