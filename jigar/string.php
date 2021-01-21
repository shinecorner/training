<?php
// addslashes()
// explode()
// html_entity_decode()
// htmlentities()
// implode()
// md5()
// str_repeat()
// str_replace()
// strip_tags()
// strlen()
// strpos()
// strstr()
// strtolower()
// strtoupper()
// trim()
// ucfirst()
// wordwrap()

// $str = "Who's Peter Griffin?";
// echo $str . " This is not safe in a database query.<br>";
// echo addslashes($str) . " This is safe in a database query.";

// $str = addslashes('What does "yolo" mean?');
// echo($str); 




// $str = "Hello world. It's a beautiful day.";
// print_r(explode(" ",$str));


// $str = 'one,two,three,four';

// zero limit
// print_r(explode(',',$str,0));
// print "<br>";

// positive limit
// print_r(explode(',',$str,3));
// print "<br>";

// negative limit


// $str = 'Albert Einstein said: &#039;E=MC&sup2;&#039;';
// echo html_entity_decode($str, ENT_COMPAT); // Will only convert double quotes
// echo "<br>";
// echo html_entity_decode($str, ENT_QUOTES); // Converts double and single quotes
// echo "<br>";
// echo html_entity_decode($str, ENT_NOQUOTES); // Does not convert any quotes





// $str = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';
// echo htmlentities($str);


// $str = "hello";
// echo "the string: ".$str."<br>";
// echo "TRUE - raw 16 character binary format: ".md5($str,TRUE)."<br>";


// $str = "Hello";
// echo md5($str);
// echo "<br>";

// if(md5($str) == "8b1a9953c4611296a827abf8c47804d7")
// {
//     echo "<br>Hello W";
//     exit;
// }


// $str = "wow";
// echo str_repeat($str,12);


// $arr = array("blue","red","green","yellow");
// print_r(str_replace("red","yellow",$arr,$i));
// echo "<br>";
// echo "replacement ".$i;



// $find = array("Hello","world");
// $replace = array("my","jigar");
// $arr = array("Hello","world","!");
// print_r(str_replace($find,$replace,$arr));

// $str = "Hello <b>My <i> World </i> </b>";
// echo strip_tags($str,"<b><i>");

// echo strlen("hello world");



// echo strlen("hello");

// strpos(string,find,start)
// echo strpos("Hello World,World","d");



// echo strstr("Hello world!",111);
// strstr(string,search,before_search)

// echo strstr("Hello world!","world",false);


// echo strtoupper("hello World");

// echo strtolower("HELLO WORLD");


// he HTML output of the code above will be (View Source):
// $str = "\n\n\nHello World!\n\n\n";
// echo "Without trim: " . $str;
// echo "<br>";
// echo "With trim: " . trim($str);


// echo ucfirst("hloo");

// echo ucwords("hello world");

// wordwrap(string,width,break,cut)
// $str = "In publishing, art, and communication, content is the information and experiences that are directed toward an end-user or audience. Content is something that is to be expressed through some medium, as speech, writing or any of various arts";
// echo wordwrap($str,20,"<br>");


// $email = "jigarkariya@gmail.com";
// echo strstr($email,"@");

// $email  = 'name@example.com';
// $domain = strstr($email, '@');
// echo $domain; // prints @example.com

// $user = strstr($email, '@', true); // As of PHP 5.3.0
// echo $user; // prints name





?>