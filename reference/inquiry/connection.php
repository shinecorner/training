<?php
$conn = mysqli_connect("localhost", "shine", "shine", "develop");
if (!$conn) 
{
    echo "Error: Unable to connect to MySQL." ;
    exit;   
}
?>