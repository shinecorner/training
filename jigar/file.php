<?php

// fopen
// copy
// delete

// fopen
// fwrite
// file_exist
// file_get_contnt
// file_put_contents
// is_dir
// rmdir
// unlink
// fread
// fgets
// fputs
// mkdir

// fgetcsv 
// fputcsv




//PHP fread() Function

// $file = fopen("test.txt","r");
// $contetn = fread($file,"6");
// echo $contetn;
// echo file_get_contents( "test.txt" );
// fclose($file);


//
// $file = fopen("test.txt","r");
// echo fread($file,filesize("test.txt"));
// fclose($file);



// $file = fopen("test.txt","r");
// while(! feof($file))
// {
//     $line = fgets($file);
//     echo $line. "<br>";
// }


// $file = fopen("test.txt","w");
// echo fwrite($file,"Hel");
// fclose($file);


// $file = file_exists("forloop.txt");
// echo $file;

// $file = file_get_contents("test.txt");
// echo $file;

// $file = file_put_contents("test.txt","Hello World");
// echo $file;


// is_dir
// $file = "controllers";
// if(is_dir($file))
// {
//     echo "$file is directory";
// }
// else
// {
//     echo "$file is not a directory";
// }

//rmdir remove directory
// $path = "images";
// if(!rmdir($path)) {
//   echo ("Could not remove $path");
// }
// else
// {
//     echo "remove";
// }

// mkdir("amazon");

// $file = fopen("test.txt","w");
// echo fwrite($file,"Hello World");
// fclose($file);

// unlink("test.txt");

//read only one line 
// $file = fopen("test.txt","r");
// echo fgets($file);
// fclose($file);

//out put count fo string
// $file = fopen("test.txt","w");
// echo fputs($file,"  World");
// fclose($file);

// $file = fopen("demo.csv","r");
// print_r(fgetcsv($file));
// fclose($file);


// $file = fopen("demo.csv","r");
// while (! feof($file))
// {
//     print_r(fgetcsv($file));
// }

// $list = array (
//     array("martin","luther"),
//     array("pangvin","china")
// );

// $file = fopen("demo.csv","w");

// foreach($list as $line)
// {
//     fputcsv($file,$line);
//     echo "<br>";
// }

// fclose($file);


// echo copy("test.txt","jigar.txt");


// echo dirname("C:/xampp/htdocs/training/jigar/test.txt")."<br />";
// echo dirname("C:/xampp/htdocs/training/jigar/test.txt",2)."<br />";
// echo dirname("/xampp/htdocs/training/jigar/test.txt",2)."<br />";


// $target = "test.txt";
// $linkname = "mylink";

// link($target,$linkname);

// echo fileatime("jigar.txt");

// rename("jigar/jigar.txt","/training/jigar/kariya.txt");

// rename("uploads","images");



// $file = "tet.txt";
// if(is_file($file))
// {
//     echo "$file is regular file";
// }
// else
// {
//     echo "$file is not a regular file";
// }

// echo filesize("test.txt");


// echo filetype("mylink");

// $file = fopen("test.txt","w+");

// exclusive lock

// if (flock($file,LOCK_EX)) {
//   fwrite($file,"Add some text to the file.");
//   fflush($file);
//   // release lock
//   flock($file,LOCK_UN);
// } else {
//   echo "Error locking file!";
// }
// fclose($file);


?>