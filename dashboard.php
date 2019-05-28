<?php
    include_once("includes/config.php");

    $resultData = array();
    if(isset($_SESSION['u_ID']) && !empty($_SESSION['u_ID']))
    {
        $select_query = "SELECT * FROM `student_data` WHERE `id` = '".$_SESSION['u_ID']."' LIMIT 1 ";
        $resultData = $my_db->select($select_query);
        if(!empty($resultData))
        {
            $resultData = $resultData[0];
        }
    }else{
        header("location:index.php");
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
<div class="signup-form width-dashboard-full">
    <form>
        <h2>Your Profile</h2>
        <p class="hint-text">Student Portal.</p>
        <?php
            if(!empty($global_message)){
                echo $global_message;
            }
        ?>

        <?php
            if(!empty($resultData))
            { ?>
                <div class="row">
                    <div class="col-md-offset-2 col-md-10">
                        <div class="form-group">
                            <label>Full Name</label><?php echo $resultData['first_name'].' '.$resultData['middle_name'].' '.$resultData['last_name']; ?>
                        </div>

                        <div class="form-group">
                            <label>Email</label><?php echo $resultData['email']; ?>
                        </div>

                        <div class="form-group">
                            <label>Gender</label><?php echo ucfirst($resultData['gender']); ?>
                        </div>

                        <div class="form-group">
                            <label>Student ID</label><?php echo $resultData['student_id']; ?>
                        </div>

                        <div class="form-group">
                            <label>College Name</label><?php echo $resultData['college_name']; ?>
                        </div>

                        <div class="form-group">
                            <label>Course Name</label><?php echo $resultData['course_name']; ?>
                        </div>

                        <div class="form-group">
                            <label>Course Start Year</label><?php echo $resultData['course_start_year']; ?>
                        </div>

                        <div class="form-group">
                            <label>Course End year</label><?php echo $resultData['course_end_year']; ?>
                        </div>

                        <div class="form-group">
                            <label>Last Login</label><?php echo $resultData[' 	last_login']; ?>
                        </div>

                        <div class="form-group">
                            <label>IP Address</label><?php echo $resultData[' 	ip_address']; ?>
                        </div>
                    </div>
                </div>
        <?php } ?>

    </form>
    <div class="text-center"><a href="logout.php" class="btn btn-danger btn-lg btn-block">Logout Profile</a></div>
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
