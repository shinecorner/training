<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

ini_set('display_errors', 1);
error_reporting(E_ALL);


require '../../PHPMailer/src/Exception.php';
require '../../PHPMailer/src/PHPMailer.php';
require '../../PHPMailer/src/SMTP.php';


//$password = "snehal";
//$encoded = md5($password);
//echo $encoded;
//echo base64_decode($encoded);
// $servername = "localhost";
// $username = "shine";
// $password = "shine";
// $dbname = "test";
include_once("../../connection.php");
// Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

function generateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$token = generateRandomString(12);





$sql = "INSERT INTO users (username, email, password,token)
VALUES ('" . $_POST['username'] . "','" . $_POST['email'] . "','" . md5($_POST['password']) . "','" . $token . "')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
    header("Location: /index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($cnn);
}



$mail = new PHPMailer(true);
try {
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.mailtrap.io';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'b9fb3ed998bda7';                     // SMTP username
    $mail->Password   = '020ffe02320202';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 2525;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('info@buildinquiry.com', 'INFO');
    $mail->addAddress('jigar.kariya@gmail.com', 'jigar');     // Add a recipient
    //    $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@buildinquiry.com', 'INFO');
    //    $mail->addCC('cc@example.com');
    //    $mail->addBCC('bcc@example.com');

    // Attachments
    //    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Welcome to build Inquiry';
    //    $mail->Body    = file_get_contents("mail_content.html");
    $id = mysqli_insert_id($con);
    $mail->Body    = "<a href='http://training.local/controller/register/verify.php?token=" . $token . "&id=" . $id . "'>Click Here</a>";
    //    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


mysqli_close($con);


// include_once("../../views/register/register.php");
