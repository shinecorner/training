<?php

// print_r($_POST);
// exit;
$con  = mysqli_connect('localhost', 'root', '', 'buildcon');
$count = 0;

if(isset($_POST['btn_submit']))
{
$insert_order = "insert into customer values('','$_POST[firstname]','$_POST[lastname]')";

echo $insert_order;
// exit;

$o_query = mysqli_query($con,$insert_order) or die(mysqli_error($con));

if($o_query)
{
    header("Location: /jigar/controller/customer/list.php");
    print_r($_POST['firstname']);

}
}


?>