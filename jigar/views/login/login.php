<?php include_once("../../header.php"); ?>

    <script type="text/javascript">
        $(document).ready(function() {
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
    <?php session_start(); ?>
    <?php if (isset($_SESSION["login_error"]) && !empty($_SESSION["login_error"])) : ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <strong><?php echo $_SESSION["login_error"]; ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php $_SESSION["login_error"] = ""; ?>
    <?php endif; ?>
    <form id="registerForm" action="/controller/login/postLogin.php" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="Username">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
    <?php include_once("../../footer.php"); ?>