<?php

include_once("../../connection.php");
$email = $_POST['email'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../../PHPMailer/src/Exception.php';
require '../../PHPMailer/src/PHPMailer.php';
require '../../PHPMailer/src/SMTP.php';

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$token = generateRandomString(12);

$mail = new PHPMailer(true);

$sql = "INSERT INTO users (username, email, password, token)
VALUES ('".$_POST['username']."','".$email."','".md5($_POST['password'])."','".$token."')";
// $result = $conn->query($sql);

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    // header('Location: /views/register/register.php');
    //   exit;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    //   header('Location: /views/register/register.php');
    //   exit;
}
try{
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.mailtrap.io';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = '32684f970f85cd';                     // SMTP username
    $mail->Password   = '7a9e10737fe4e7';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 2525;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('info@buildinquiry.com', 'INFO');
    $mail->addAddress($email);     // Add a recipient
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
    // $user_id = mysqli_insert_id($conn);
    $user_id = $conn->insert_id;
    $mail->Body    = "<a href='http://inquiry.local/controller/register/verify.php?token=".$token."&id=".$user_id."'>Click here</a>";
//    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}



?>