<?php
$con  = mysqli_connect('localhost', 'root', '', 'buildcon');
$count = 0;
?>

<?php

if (isset($_POST['btn_submit'])) {
  // print_r($_POST);
  // exit;
  $insert = "insert into customer values('','$_POST[fname]','$_POST[lname]')";
  $query = mysqli_query($con, $insert);
  $customer_id = mysqli_insert_id($con);

  foreach ($_POST['contact'] as $key => $contact_number) {
    if (!empty($contact_number)) {
      $contactinsert = "insert into customer_contact values('','$customer_id','$contact_number')";
      mysqli_query($con, $contactinsert);
    }
  }
  if ($query)
?>
  <script>
    alert("Insert Succefully");
  </script>
<?php
}

// $insert = "insert into property values('','$_POST[ddl_type]','$_POST[ddl_direction]','$_POST[txt_discript]','$_POST[chk_sold]','$_POST[txt_date]')";
?>




<html>

<head>
  <script src="../js/jquery-3.5.1.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#add_contact").click(function() {
        $("#contact_cont").append('<input type="text" name="contact[]" class="form-control" placeholder="Enter Contact">');
      });
    });
  </script>
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
              <th align="center" style="color:blue;"> First Name </th>
              <td>
                <input type="text" name="fname" class="form-control" placeholder="Enter First Name">
              </td>
            </tr>


            <tr>
              <th align="center" style="color:blue;"> Last Name </th>
              <td>

                <input type="text" name="lname" class="form-control" placeholder="Enter Last Name">
                <input type="text" name="contact[]" class="form-control" placeholder="Enter Contact">

                <button id="add_contact" type="button">Add More</button>
                <div id="contact_cont">
                </div>
              </td>
            </tr>

            <tr>
              <th>
                <button type="submit" name="btn_submit" class="btn btn-primary">Submit</button>
              </th>
            </tr>