<!DOCTYPE html>
<html>

<head>
  <title>Inquiry</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/asset/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="/asset/css/bootstrap.min.css.map"> -->
  
  <script src="/asset/js/jquery.min.js"></script>
    <script src="/asset/js/popper.min.js"></script>
    <script src="/asset/js/bootstrap.min.js"></script>
    <script src="/asset/vendor/jquery.dataTables.min.js"></script>
    <script src="/asset/vendor/dataTables.bootstrap4.min.js"></script>
    <script src="/asset/vendor/jquery-validation-1.19.2/dist/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="/asset/vendor/dataTables.bootstrap4.min.css">
    
    <body>


    <script type="text/javascript">
        $(document).ready(function () {
            $("#registerForm").validate({
                rules: {
                    username: {
                        required: true,
                        minlength: 6
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 6
                    },
                    confirm_password: {
                        required: true,
                        minlength: 6,
                        equalTo: "#password"
                    },
                }
            });
        })
    </script>
</head>

<body>
<form id="registerForm" action="/controller/register/store.php" method="post">
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control" id="username" placeholder="Username">
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="text" name="email" class="form-control" id="email" aria-describedby="emailHelp"
               placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="confirm_password">Confirm Password</label>
        <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Password">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php include_once("../../footer.php"); ?>