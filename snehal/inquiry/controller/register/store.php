<?php

include_once("../../connection.php");

$sql = "INSERT INTO users (username, email, password)
VALUES ('".$_POST['username']."','".$_POST['email']."','".md5($_POST['password'])."')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    // header('Location: /views/register/register.php');
    //   exit;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    //   header('Location: /views/register/register.php');
    //   exit;
}

mysqli_close($conn);

?>