<?php
    include_once("includes/config.php");
    include_once("actionRegistration.php");

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
    <title>Student Portal - Registration</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="assets/css/parsley.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style type="text/css">

    </style>
</head>
<body>
<div class="signup-form width-custom-full">

    <form id="form_registration" name="form_registration" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post"
          enctype="multipart/form-data" data-parsley-validate novalidate>
        <h2>Register</h2>
        <p class="hint-text">Create your account.</p>

        <?php
            if(!empty($global_message)){
                echo $global_message;
            }
        ?>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="first_name" placeholder="First Name"
                           parsley-trigger="change" data-parsley-required="true" value="">
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="middle_name" placeholder="Middle Name" value="">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="last_name" placeholder="Last Name"
                           parsley-trigger="change" data-parsley-required="true" value="">
                </div>
                <div class="col-sm-6">
                    <input type="email" class="form-control" name="email" placeholder="Email" parsley-trigger="change"
                           data-parsley-type="email" data-parsley-required="true" value="">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <label class="radio-inline"><input type="radio" name="gender" value="male" checked>Male</label>
                    <label class="radio-inline"><input type="radio" name="gender" value="female">Female</label>
                    <label class="radio-inline"><input type="radio" name="gender" value="other">Other</label>
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="student_id" placeholder="Student ID"
                           parsley-trigger="change" data-parsley-required="true" value="">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="college_name" placeholder="College name /University name"
                           parsley-trigger="change" data-parsley-required="true" value="">
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="course_name" placeholder="Course name"
                           parsley-trigger="change" data-parsley-required="true" value="">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <input type="number" class="form-control" name="course_start_year" min="1950" max="<?php echo date("Y"); ?>" maxlength="4"
                           placeholder="Course Starting year" parsley-trigger="change" data-parsley-required="true" value="">
                </div>
                <div class="col-sm-6">
                    <input type="number" class="form-control" name="course_end_year" min="1950" max="<?php echo date("Y"); ?>" maxlength="4"
                           placeholder="Course Ending year" parsley-trigger="change" data-parsley-required="true" value="">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" parsley-trigger="change" data-parsley-required="true">
                </div>
                <div class="col-sm-6">
                    <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password"
                           parsley-trigger="change" data-parsley-required="true" data-parsley-equalto="#password">
                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
    </form>
    <div class="text-center">Already have an account? <a href="index.php">Sign in</a></div>
</div>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/parsley.min.js"></script>
<script type="text/javascript">
    $(function ()
    {
        $('#form_registration').parsley();

        <?php
            if($insertID != 0)
            { ?>
            setTimeout(function()
            {
                window.location.href = "index.php";
            },2500);
        <?php } ?>
    });
</script>
</body>
</html>
