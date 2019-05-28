<?php
    include_once("includes/config.php");
    include_once("actionLogin.php");

    if(isset($_SESSION['u_ID']) && !empty($_SESSION['u_ID']))
    {
        header("location:dashboard.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <title>Student Portal - Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="assets/css/parsley.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style type="text/css">

    </style>
</head>
<body>
<div class="signup-form">
    <form id="form_login" name="form_logins" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" data-parsley-validate novalidate>
        <h2>Login</h2>
        <p class="hint-text">&nbsp;</p>

        <?php
            if(!empty($global_message)){
                echo $global_message;
            }
        ?>

        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" parsley-trigger="change" data-parsley-type="email"
                   data-parsley-required="true">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" parsley-trigger="change" data-parsley-minlength="6"
                   data-parsley-required="true">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Login</button>
        </div>
    </form>
    <div class="text-center">Not registered yet? <a href="registration.php">Click Here to Sign Up</a></div>
</div>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/parsley.min.js"></script>
<script type="text/javascript">
    $(function ()
    {
        $('#form_login').parsley();
    })
</script>
</body>
</html>
