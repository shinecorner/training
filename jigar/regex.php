<?php


// preg_match();
// preg_split();
// preg_grep()

// Declare a variable and initialize it 
// $geeks = 'GeeksforGeeks'; 

// Use preg_match() function to check match 
// preg_match('/(Geeks)(fo)(rGeeks)/', $geeks, $matches, PREG_OFFSET_CAPTURE); 

// Display matches result 
// print_r($matches); 






// // Declare a variable and initialize it 
// $gfg = "GFG is the best Platform."; 

// // case-Insensitive search for the word "GFG" 
// if (preg_match("/\bGFG\b/i", $gfg, $match)) 
// 	echo "Matched!"; 
// else
// 	echo "not matched"; 



//  $original_string = "Geeksforgeeks is no:one computer 
//                                              science portal.";
//        $replace_string = '1'; 
//        $original_string = preg_replace('one', $replace_string,
//                                              $original_string);





// // Original input string 
// $original_string = "Write any topic ."; 

// // Pattern to be searched 
// $string_pattern = "(.*)any(.*)"; 

// // Replace string 
// $replace_string = " own yours own \\1biography\\2"; 

// echo preg_replace($patternstrVal, $replacesstrVal, $stringVal); 

    // $input = "I have pass Engineering exam.";
    // $pattern = "/eNgineering/i";
    // //i = case sensetive
    // if(preg_match($pattern, $input)){
    // echo "proper input";
    // }
    // else{
    // echo "Not match";
    // }





//     $input = "Jigar_kariya07@gmail.com";
//     $pattern = "/^([A-Za-z0-9_])+(@)([a-z])(.)([a-z]){2,3}/";
//     if(preg_match($pattern,$input))
//     {
//         echo "proper ";






//     }
// else
// {
//     echo "nor m";
// }

// Declare a regular expression 
// $regex = "/<b>(.*)<\/b>/U"; 
  
// Declare a string 
// $inputString = "Name: <b>John</b> Position: <b>Developer</b>"; 
  
// Use preg_match_all() function to perform 
// a global regular expression match 
// preg_match_all($regex, $inputString, $output); 
  
// echo $output[0][0]." <br> ".$output[0][1]."\n"; 





// $regex = "([0-9]+)"; 
  
// // Declare a string 
// $original = "Completed graduation in 2004"; 
// $replaceWith = "2002"; 
   
// // Use preg_replace() function to search a 
// // string pattern in an other string 
// $original = preg_replace($regex, $replaceWith, $original);  
      
// // Display result 
// echo $original; 





// $str = "i am from 2000";
// $strreplace = "1995";

// $pattern = "/([0-9]+)/";


// $original = preg_replace($pattern, $strreplace, $str);  

// echo $original;








// $str = "134,645,478,670"; 

// $pattern = "/\,/";

// $output = preg_split($pattern,$str);

// echo "$output[0] <br>"; 
// echo "$output[1] <br>"; 
// echo "$output[2] <br>"; 
// echo "$output[3] <br>"; 





// // / Declare a variable and initialize it 
// $geeks = 'GeeksforGeeks'; 
  
// // Use preg_match() function to check match 
// preg_match('/(Geeks)(for)(Geeks)/', $geeks, $matches, PREG_OFFSET_CAPTURE); 
  
// // Display matches result 
// print_r($matches); 






// Declare a variable and initialize it 
// $gfg = "GFG is the best Platform."; 
  
// // case-Insensitive search for the word "GFG" 


// // \b word boundary
// if (preg_match("/\bGFG\b/i", $gfg, $match))  
//     echo "match";
// else
//     echo "not matched"; 







// / Original input string  
// $original_string = "Write any topic ."; 
  
// // Pattern to be searched 
// $string_pattern = "(.*)any(.*)";  
  
// // Replace string 
// $replace_string = " own yours own \\1biography\\2";  
  
// echo preg_replace($string_pattern, $replace_string, $original_string); 

// PHP program to implement 
// preg_grep() function 
  
// original array elements  








// $inputstrVal =array("Geeks", "for", "Geeks", '2018'    ); 
  
// // Search elements "o", followed by one  
// // or more letters. 
// $result=preg_grep ('/o(\w+)/', $inputstrVal ); 
  
// print_r($result); 





// $inputstrVal= array(1, "one", 2, "two", 
//               "three", 4, 5, "Six", 7, 
//               "Eight", "Nine", 10, 
//                11, 12, 13); 
// // Used preg_grep with PREG_GREP_INVERT            
// $result = preg_grep("/[0-9]/",  $inputstrVal, 
//                             PREG_GREP_INVERT); 
// // Print result      
// print_r($result); 





// $inputstrVal =array(0 =>"Geeks",  
//                     1 =>"for",  
//                     2 => "Geeks", 
//                     3 => '2018', 
                      
//                 ); 
// // Search elements "x", followed by one  
// // or more letters. 
// $result=preg_grep ('/x(\w+)/', $inputstrVal ); 
  
// print_r($result); 






// $inputstrVal =array("Geeks", "for", "Geeks", '2018','jigar','kariya'   ); 
  
// // Search elements "o", followed by one  
// // or more letters. 
// $result=preg_grep ('/G(\w+)/', $inputstrVal ); 
  
// print_r($result); 





// $original_string = "India To Become World's Fifth 
//                          Largest Economy In 2018."; 
  
// // Replace String 
// $replace_string = '5';  
  
// // This function call will show  
// // the correct expected output 
// echo preg_replace('Fifth',$replace_string, $original_string); 





// $string = 'November 01, 2018'; 
// $pattern = '/(\w+) (\d+), (\d+)/i'; 
// $replacement = '${1} 02, $3'; 
  
// // print output of function 
// echo preg_replace($pattern, $replacement, $string); 





// $subject = array('1', 'GFG', '2', 
// 'Geeks', '3', 'GCET', 'Contribute', '4');  
// $pattern = array('/\d/', '/[a-z]/', '/[1a]/');  
// $replace = array('X:$0', 'Y:$0', 'Z:$0');  
  
// // Print Result return by function 
// echo "preg_replace returns\n"; 

// print_r(preg_replace($pattern, $replace, $subject));


// $count = 0; 
  
// // Display result after replace and count  
// echo preg_replace(array('/\d/', '/\s/'), 
//         '*', 'Geeks 4 Geeks', -1, $count); 
// echo "\n" . $count; 



?>
