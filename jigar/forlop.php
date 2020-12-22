<?php
// $a = 5;
// $b = 3;
// if($a % $b==2)
// {
//     echo "hello";
// }
// else
// {
//     echo "not availbale";
// }

// $a = 4;

// if($a % 2==0)
// {
//     echo "even";
// }
// else
// {
//     echo "odd";
// }



// for($i=1;$i<=15;$i++)
// {
//     if(($i % 3==0) && ($i % 5==0))
//     {
//         echo "hello world";
//     }
//     elseif($i % 3==0)
//     {
//         echo "hello";
//     }
//     elseif($i % 5==0)

//     {
//         echo "world";
//     }
    
//     else
//     {
//         echo $i;

//     }
//     echo "<br>";
// }

// $sum = 5;
// $i = 2;
// // $sum += $i;
// $sum = $sum+$i;
// $sum = 10;
// echo $sum;



// $a = 10;
// $sum = 0;
// for($i=1;$i<=$a;$i++)
// {
//     $sum = $sum + $i;
    

// }
// echo $sum."<br>";

//  for($i=1;$i<=5;$i++)
//  {
//      for($j=1;$j<=$i;$j++)
//      {
//          echo $j;
//      }
//      echo "<br>";
//  }


/*$a = 4;
for($i=1;$i<=10;$i++)
{
     $d = $a * $i; 
    echo $a. "  ".$i. "  ".$d;
    echo "<br>";
   
}*/



/*
?>
<table border="3px" width="500px" height="500px">
<tr>
<?php for($i=1;$i<=8;$i++)
{
    for($j=1;$j<=8;$j++)
    {
      $t = $i + $j;
      if($t % 2==0)
      {
          ?>
          <td bgcolor="black" style="height:50px;width:50px"> </td>
          <?php
         
      }
      else
      {
          ?>
           <td bgcolor="white" style="height:50px;width:50px"> </td>
          <?php

      }

    }
   ?>
   </tr>

   <?php
  
} 

?>

</table>
*/


// for($i=0;true;$i++)
// {
// echo $i."<br>";
// if($i==10)
// {
//   break;
// }
// }

$i = 3;
while(true)
{
    $randnumber = rand(1, 20);
    if($i==$randnumber)
    {
        
        echo "Congratulations $randnumber";
          break;
    }
    else
    {
        echo "Sorry! Next Time $randnumber";
        
    }
    echo "<br>";
}





?>
<br><br><br><br>


<?php

$num = 6;
$factorial = 1;

for($num;$num>=1;$num--)
{
    $factorial = $factorial * $num;
}
echo "Factorial of $num is $factorial";

?>