<?php 
$con  = mysqli_connect('localhost','root','','buildcon');
$count = 0;
// error_reporting(0);
?>

<?php

if(isset($_POST['btn_submit']))
{
    // print_r($_POST);
    // exit;
    $insert = "insert into property values('','$_POST[ddl_type]','$_POST[ddl_direction]','$_POST[txt_discript]','$_POST[chk_sold]','$_POST[txt_date]')";
    
    $query = mysqli_query($con,$insert);
    if($query)
    
   ?>
   <script>alert("Insert Succefully");</script>
   <?php
    
    
}


	?>




<html>

<head>
    <title> Registration Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <Style type="text/css">
        .button {
            border-radius: 4px;
            background-color: #6b5dd8;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 17px;
            padding: 2px;
            width: 80px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
            height: 30px;
        }

        .button:hover {
            background-color: #d759e0;
            padding-left: 10px;
            width: 80px;
        }
    </style>
</head>

<body>
    <form method="post" enctype="multipart/form-data">
        <table class="table table-bordered">
            <!----row1[---->



            <html>

            <head>
                <title> Registration Form</title>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
                <Style type="text/css">
                    .button {
                        border-radius: 4px;
                        background-color: #6b5dd8;
                        border: none;
                        color: #FFFFFF;
                        text-align: center;
                        font-size: 17px;
                        padding: 2px;
                        width: 80px;
                        transition: all 0.5s;
                        cursor: pointer;
                        margin: 5px;
                        height: 30px;
                    }

                    .button:hover {
                        background-color: #d759e0;
                        padding-left: 10px;
                        width: 80px;
                    }
                </style>
            </head>

            <body>
                <form method="post" enctype="multipart/form-data">
                    <table class="table table-bordered">
                        <!----row1[---->



                        <tr>
                            <th align="center" style="color:blue;"> Type </th>
                            <td>
                                <select class="form-control" name="ddl_type">
                                    <option value="">select</option>
                                    <option value="office">Office</option>
                                    <option value="shop">Shop</option>
                                    <option value="flat">Flat</option>
                                </select>
                            </td>
                        </tr>


                        <tr>
                            <th align="center" style="color:blue;"> Square Feet </th>
                            <td>
                                <input type="text" name="txt_feet" class="form-control" placeholder="Enter Square Feet">
                            </td>
                        </tr>

                        <tr>
                            <th align="center" style="color:blue;"> Direction </th>
                            <td>
                                <select class="form-control" name="ddl_direction">
                                    <option value="">select</option>
                                    <option value="north">North</option>
                                    <option value="south">South</option>
                                    <option value="east">East</option>
                                    <option value="west">West</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <th align="center" style="color:blue;"> Discription </th>
                            <td>
                                <textarea name="txt_discript" class="form-control" placeholder="Enter Your Discription"></textarea>

                            </td>
                        </tr>

                        <tr>
                            <th align="center" style="color:blue;"> Is Sold? </th>
                            <td>
                            <input type="checkbox" value="1" class="form-control" name="chk_sold">

                            </td>
                        </tr>

                        <tr>
                            <th align=" center" style="color:blue;"> Evidance Date </th>
                            <td>
                                <input type="date" class="form-control" name="txt_date">
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <button type="submit" name="btn_submit" class="btn btn-primary">Submit</button>
                            </th>
                        </tr>