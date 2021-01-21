<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/asset/vendor/jquery-validation-1.19.2/dist/jquery.validate.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#registerForm").validate({
                rules: {
                    username: {
                        required: true,
                        minlength: 6
                    },
                    password: {
                        required: true,
                        minlength: 6
                    },
                }
            });
        })
    </script>
</head>

<body>
<?php session_start();?>
<?php if(isset($_SESSION["login_error"]) && !empty($_SESSION["login_error"])):?>
<div class="alert alert-success alert-dismissible" role="alert">
    <strong><?php echo $_SESSION["login_error"];?></strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php $_SESSION["login_error"] = "";?>
<?php endif;?>
<form id="registerForm" action="/controller/login/postLogin.php" method="post">
    <div class="form-group">
        <label for="exampleInputPassword1">Username</label>
        <input type="text" name="username" class="form-control" id="exampleInputPassword1" placeholder="Username">
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>

