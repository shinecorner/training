<?php

$conn = new mysqli("localhost", "shine", "shine", "develop_snehal");

if ($conn->connect_errno) 
{
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit;   
}
// $conn->close();
?>