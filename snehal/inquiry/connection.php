<?php

$conn = new mysqli("localhost", "snehal", "snehal123", "develop_snehal");

if ($conn->connect_errno) 
{
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit;   
}
// $conn->close();
?>