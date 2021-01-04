<?php

$reslut =[];
// $reslut['maths'] = 90;
// $reslut['english'] = 80;
// $reslut =[
//     'snehal'=> ['maths' => 80, 'english' =>85] ,
//     'krish'=> ['maths' => 90, 'english' =>80] ,
//     'kajal'=> ['maths' => 90, 'english' =>85] ,
//     'uday'=> ['maths' => 90, 'english' =>95] 
// ];

// $reslut[]['maths']=80;
// $reslut[]['english']=85;
// $reslut[]['maths']=90;
// $reslut[]['english']=80;
// $reslut[]['maths']=90;
// $reslut[]['english']=85;
// $reslut[]['maths']=90;
// $reslut[]['english']=95;

// $reslut[]= ['maths' => 80, 'english' =>85];
// $reslut[]=['maths' => 90, 'english' =>80];
// $reslut[]=['maths' => 90, 'english' =>85];
// $reslut[]=['maths' => 90, 'english' =>95];


// $reslut['snehal']['maths']=80;
// $reslut['snehal']['english']=85;
// $reslut['krish']['maths']=90;
// $reslut['krish']['english']=80;
// $reslut['kajal']['maths']=90;
// $reslut['kajal']['english']=85;
// $reslut['uday']['maths']=90;
// $reslut['uday']['english']=95;
// print_r($reslut['uday']['maths']);

$cars = [
  ["name"=>"Volvo","stock"=>22,"sold"=>18,"color"=>"black","modal"=>['name'=>"ez20",'capacity' =>500]],
  ["name"=>"BMW","stock"=>15,"sold"=>13,"color"=>"white","modal"=>['name'=>"e20",'capacity' =>700]],
  ["name"=>"Saab","stock"=>5,"sold"=>2,"color"=>"black","modal"=>['name'=>"ez2",'capacity' =>800]],
  ["name"=>"Land Rover","stock"=>17,"sold"=>15,"color"=>"gray","modal"=>['name'=>"z20",'capacity' =>900]]
];
// $cars[0]['name']='volvo';
// $cars[0]['stock']=22;
// $cars[0]['sold']=18;
// $cars[1]['name']='bmw';
// $cars[1]['stock']=15;
// $cars[1]['sold']=13;

// foreach($cars as $key => $value )
// {
// echo $value['name'].": In stock: ".$value['stock'].", sold: ".$value['sold'].".<br>";
// }

// foreach($cars as $key => $cardetail )
// {
//     foreach($cardetail as $propety => $value )
//     {
//         echo $propety."-------" .$value." <br/>";
//     }
//     echo "<br/><br/><br/>";
// }
//   print_r($cars[1]['modal']['capacity']);
print_r($cars);
exit;
echo (5>3) ? 'abc' : 'xyz';
exit;
if(5 > 3)
{
    echo "abc";
}
else
{
    echo "xyz";
}
 exit();
// phpinfo();
// $colors = ['red','black','pink','yellow'];
// $colors = ['red',5=>'black','pink','yellow'];
 $reslut =['maths'=> 80,'english'=> 90,'scienc'=> 85];
 print_r($reslut);
 exit;
// echo $colors[6];
// echo $reslut['english'];


$reslut = [];
$reslut['maths'] = 90;
$reslut['english'] = 80;
$reslut['science'] = 85;

// print_r ($reslut);
foreach($reslut as $subject => $marks)
{
    echo $subject.": ". $marks;
    echo "<br/>";
}


?>