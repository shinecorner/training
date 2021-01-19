<?php

include_once("../../connection.php");

session_start();

if (isset($_GET['token']) && !empty($_GET['token']) && ($_GET['id']) && !empty($_GET['id'])) {
    $sql = "SELECT * FROM users WHERE id='" . $_GET["id"] . "'";
    $result = $conn->query($sql);
    $rows = $result->fetch_all(MYSQLI_ASSOC);
    $token = $rows[0]['token'];
    if ($token == $_GET['token']) {
        $sql = "UPDATE users set is_active = 1 WHERE id='" . $_GET["id"] . "'";
        $result = $conn->query($sql);
 
        if ($result) {
            $_SESSION["login_verify"] = "Your are successfully verify your email";
            header('Location: /views/login/login.php') ;
            exit;
        }
    }
}   
else{
    echo "avu kay run j nathi tahtu";
}


?>