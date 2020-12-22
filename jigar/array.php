<?php
// $cars = array(5=>"Volvo",8=> "BMW", "Toyota");
// echo  $cars[2] ;

// $student = [];
// $student[] = "jigar";
// $student[] = "bhavik";
// $student[] = "divyesh";

// $student = [];
// $student[5] = "jigar";
// $student[12] = "jigar";
// $student[20] = "divyesh";

// $countries = [];
// $countries['rusia'] = "moscow";
// $countries["india"] = "dilhi";

// $countries["india"] = "mumbai";

// print_r($countries);


// $nnumber = [];
// for($i=1;$i<=100;$i++)
// {
//     if($i % 4 == 0)
//     {
//         $number[] = $i;
//     }
    
// }
// print_r($number);


// $cars = array("Volvo", "BMW", "Toyota");
// $arrlength = count($cars);

// for($x = 0; $x < $arrlength; $x++) {
//   echo $cars[$x];
//   echo "<br>";
// }

// $cars = array(5=>"Volvo",8=> "BMW", 12=>"Toyota","Mercidiz");
//  echo $arrlength = count($cars); 

// echo $cars[0];  

// foreach($cars as $key => $value )
// {
//     echo $key;
//     echo $value;
//     echo "<br>";
// }


// $cars = array (
//     array("Volvo",22,18),
//     array("BMW",15,13),
//     array("Saab",5,2),
//     array("Land Rover",17,15)
//   );

//   foreach($cars as $detail)
//   {
//     //   print_r($detail["name"]);
//   echo $detail[0].": In stock: ".$detail[1].", sold: ".$detail[2];
// echo "<br>";
//   }

//   echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
//   echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
//   echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
//   echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
  



//   $cars = [
//     ["name"=>"volvo","stock"=>22,"sold"=>18],
//     ["name"=>"BMW","stock"=>15,"sold"=>13],
//     ["name"=>"Saab","stock"=>5,"sold"=>2],
//     ["name"=>"Land Rover","stock"=>17,"sold"=>15]
//   ];






// echo $cars[3]["stock"] 
//   foreach($cars as $detail)
//   {
//     //   print_r($detail["name"]);
//   echo $detail["name"].": In stock: ".$detail["stock"].", sold: ".$detail["sold"];
// echo "<br>";
//   }

//   echo $cars[0]["name"].": In stock: ".$cars[0]["stock"].", sold: ".$cars[0]["sold"].".<br>";
//   echo $cars[1]["name"].": In stock: ".$cars[1]["stock"].", sold: ".$cars[1]["sold"].".<br>";
//   echo $cars[2]["name"].": In stock: ".$cars[2]["stock"].", sold: ".$cars[2]["sold"].".<br>";
//   echo $cars[3]["name"].": In stock: ".$cars[3]["stock"].", sold: ".$cars[3]["sold"].".<br>";
  
//   print_r($cars);

// foreach($cars as $detail)
//   {
//       if($detail["name"]=="Saab")
//       {
//         foreach($detail as $k=>$v)
//         {
//             echo $k." == ".$v;
//         echo "<br>";
//         }
//       }
   
//     echo "<br>";
//   }






// $cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
// print_r(array_chunk($cars,4));

// $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43","Harry"=>"50");
// print_r(array_chunk($age,2,true));

// array_chunk(array, size, preserve_key)





// $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
// $a2=array("e"=>"red","f"=>"yellow","g"=>"black");
// $a3=array("a"=>"black","b"=>"red","c"=>"yellow");

// print_r(array_diff($a1,$a2,$a3));
// array_diff(array1, array2, array3, ...)






// $a1 = array("a"=>"red","b"=>"yellow","c"=>"blue");
// $a2 = array("c"=>"red","d"=>"balu","e"=>"black");
// $a3 = array("f"=>"red","g"=>"yellow","h"=>"balu");

// print_r(array_intersect($a1,$a2,$a3));
// array_intersect(array1, array2, array3, ...)


// $car = array("volvo"=>"2","BMW"=>"3");
// if(array_key_exists(1,$car))
// {
//     echo "Key exist";
// }
// else
// {
//     echo "Key Does Not Exist";
// }
// array_key_exists(key, array)
// 

// $car = array("volvo","BMW");
// if(array_key_exists(2,$car))
// {
//     echo "Key exist";
// }
// else
// {
//     echo "Key Does Not Exist";
// }






// $a=array(10,20,30,"10");
// print_r(array_keys($a,"10",true));



// $a=array(10,20,30,"10");
// print_r(array_keys($a,"10",false));


// $a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
// print_r(array_keys($a,"X5"));


// $a = array("volvo","black","blue");
// array_pop($a);
// print_r($a);
// Delete the last element of an array:

// $a = array(10,20,30);
// array_pop($a);
// print_r($a);
// Delete the last element of an array:
// array_pop(array)





// $a=array("red","green");
// array_push($a,"black","yellow");
// print_r($a);
// Insert "blue" and "yellow" to the end of an array:

// $a=array("a"=>"red","b"=>"green");
// array_push($a,"black","yellow");
// print_r($a);
// array_push(array, value1, value2, ...)



// $a=array("a"=>"red","b"=>"green","c"=>"blue");
// print_r(array_search("red",$a));
// Search an array for the value "red" and return its key:
    // array_search(value, array, strict)


    // $a=array("red","green","blue","yellow","brown");
    // print_r(array_slice($a,1,2));



    // $a=array("red","green","blue","yellow","brown");
// print_r(array_slice($a,-2,1)); (Dought)



// $a=array("red","green","blue","yellow","brown");
// print_r(array_slice($a,1,2,true));


//With the preserve parameter set to true:



// $a=array("red","green","blue","yellow","brown");
// print_r(array_slice($a,1,2,false));


// $a=array("a"=>"red","b"=>"green","c"=>"red");
// print_r(array_unique($a));

// Remove duplicate values from an array:

// array_unique(array)

// $a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
// print_r(array_values($a));

// If....else condition
// $people = array("Peter", "Joe", "Glenn", "Cleveland");
// if(in_array("Glenn",$people))
// {
//     echo "match Found";
// }
// else
// {
//     echo "Match Not Found";
// }
// Search for the value "Glenn" in an array and output some text:
    // in_array(search, array, type)



// $cars=array("Volvo","BMW","Toyota");
// echo count($cars);



// $cars=array
//   (
//   "Volvo"=>array
//   (
//   "XC60",
//   "XC90"
//   ),
//   "BMW"=>array
//   (
//   "X3",
//   "X5"
//   ),
//   "Toyota"=>array
//   (
//   "Highlander"
//   )
//   );

// echo "Normal count: " . count($cars)."<br>";
// echo "Recursive count: " . count($cars,1);





// $people = array("Peter", "Joe", "Glenn", "Cleveland");
// echo (current($people));
// echo "<br>";
// echo (next($people));

// $people = array("Peter", "Joe", "Glenn", "Cleveland");
// echo current($people);
// echo next($people);
// echo prev($people);
// echo end($people);
// echo current($people);
// echo prev($people);
// echo reset($people);

// print_r(each($people));



// $numbers = array(2,4,6,8);
// sort($numbers);


// for($x=0;$x<4;$x++)
// {
//     echo $numbers[$x];
//     echo "<br>";
// }

// $array = [1=>"jigar",2=>"bhavik",3=>1];
// if(isset($array[1]))
// {
//     echo "yes";
// }

// if(isset($array[3]))
// {
//     echo "yes";
// }

// if(isset($array[3]) && !empty($array[3]))
// {
//     echo "yes";
// }

// Check whether a variable is empty. Also check whether the variable is set/declared:
// empty(variable); syntax

// $a = 0;
// $b = 1;
// if(empty($a))
// {
//     echo "variable is empty";
// }
// else
// {
//     echo "variable is not empty";
// }

// if(isset($b))
// {
//     echo "variable is set";
// }
// else
// {
//     echo "variablew is notset";
// }


// $c = null;

// if(isset($c))
// {
//     echo "variavble is set";
// }

// else
// {
//     echo "variable is nor set";
// }






?>