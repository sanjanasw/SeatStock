<?php
require('db.php');
if (isset($_REQUEST['user_name'])){
		$user_name = stripslashes($_REQUEST['user_name']); // removes backslashes
		$user_name = mysqli_real_escape_string($con,$user_name); //escapes special characters in a string
		$user_email = stripslashes($_REQUEST['user_email']);
		$user_email = mysqli_real_escape_string($con,$user_email);
		$user_password = stripslashes($_REQUEST['user_password']);
		$user_password = mysqli_real_escape_string($con,$user_password);
        $user_fname = ($_REQUEST['user_fname']);
		$user_lname = ($_REQUEST['user_lname']);
        $user_gender = ($_REQUEST['user_gender']);
        $user_tp = ($_REQUEST['user_tp']);
		$user_role = ($_REQUEST['user_role']);

		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (user_name, user_password, user_fname, user_lname, user_email, user_gender, user_tp, user_role, trn_date) VALUES ('$user_name', '".md5($user_password)."','$user_fname','$user_lname' , '$user_email', '$user_gender','$user_tp','$user_role', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            header ("Location: index_log.php");//after registering rederectin to login page
        }
    }else{}
?>