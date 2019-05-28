<?php
    include_once("includes/config.php");

    $today = date("Y-m-d H:i:s");
    $insertID = 0;

    $first_name = $middle_name = $last_name = "";
    $student_id = $college_name = $course_name = "";
    $course_start_year = $course_end_year = "";

    if(isset($_POST) && !empty($_POST))
    {
        $first_name = $_POST['first_name'];
        $middle_name = $_POST['middle_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $student_id = $_POST['student_id'];
        $college_name = $_POST['college_name'];
        $course_name = $_POST['course_name'];
        $course_start_year = $_POST['course_start_year'];
        $course_end_year = $_POST['course_end_year'];
        $password = $_POST['password'];
        $ip_address = getIpAddress();

        $select_query = "SELECT `email` FROM `student_data` WHERE `email` = '".$email."' ";
        $checkEmail = $my_db->select($select_query);
        if(empty($checkEmail))
        {
            $password = md5($password);

            $insert_query = "";
            $insert_query .= " INSERT INTO `student_data` SET ";
            $insert_query .= " `first_name` = '".$first_name."', ";
            $insert_query .= " `middle_name` = '".$middle_name."', ";
            $insert_query .= " `last_name` = '".$last_name."', ";
            $insert_query .= " `email` = '".$email."', ";
            $insert_query .= " `gender` = '".$gender."', ";
            $insert_query .= " `student_id` = '".$student_id."', ";
            $insert_query .= " `college_name` = '".$college_name."', ";
            $insert_query .= " `course_name` = '".$course_name."', ";
            $insert_query .= " `course_start_year` = '".$course_start_year."', ";
            $insert_query .= " `course_end_year` = '".$course_end_year."', ";
            $insert_query .= " `password` = '".$password."', ";
            $insert_query .= " `ip_address` = '".$ip_address."', ";
            $insert_query .= " `created_at` = '".$today."' ";

            $insertID = $my_db->insert($insert_query);

            $global_message = "";
            $global_message .= "<div class=\"alert alert-success\">";
            $global_message .= "<strong>Success!</strong> Your registration sucessfully #".$insertID;
            $global_message .= "</div>";

        }else{
            $global_message = "";
            $global_message .= "<div class=\"alert alert-danger\">";
            $global_message .= "<strong>Error!</strong> This email already exists.";
            $global_message .= "</div>";
        }
    }
?>