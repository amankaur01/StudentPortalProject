<?php
    include_once("includes/config.php");

    $today = date("Y-m-d H:i:s");

   if(isset($_POST) && !empty($_POST))
   {
       $email = $_POST['email'];
       $password = $_POST['password'];
       $password = md5($password);

       $select_query = "SELECT * FROM `student_data` WHERE `email` = '".$email."' AND `password` = '".$password."' LIMIT 1 ";
       $checkEmail = $my_db->select($select_query);
       if(!empty($checkEmail))
       {
           $_SESSION['u_ID'] = $checkEmail[0]['id'];
           $_SESSION['u_firstName'] = $checkEmail[0]['first_name'];
           $_SESSION['u_middleName'] = $checkEmail[0]['middle_name'];
           $_SESSION['u_lastName'] = $checkEmail[0]['[last_name'];
           $_SESSION['u_email'] = $checkEmail[0]['email'];

           $update_query = " UPDATE `student_data` SET `last_login` = '".$today."' WHERE `id` = '".$checkEmail[0]['id']."' ";
           $my_db->edit($update_query);

           header("location:dashboard.php");
           exit;
       }else{
           $global_message = "";
           $global_message .= "<div class=\"alert alert-danger\">";
           $global_message .= "<strong>Error!</strong> This email and password is wrong.";
           $global_message .= "</div>";
       }
   }
?>