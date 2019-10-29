<?php
include "ConDB.php";

	if(isset($_POST['submit'])){
		$user_name= $_POST['user_name'];
		$user_password = $_POST['user_password'];
		$user_email = $_POST['user_email'];
		$user_fname = $_POST['user_fname'];
		$user_lname = $_POST['user_lname'];
        $user_gender = $_POST['user_gender'];
        $user_tp = $_POST['user_tp'];
		$user_role = $_POST['user_role'];
        
    
		
		
		$query = "INSERT INTO users(user_name,user_password,user_fname,user_lname,user_email,user_gender,user_tp,user_role) ";
		$query .= "VALUES('{$user_name}','{$user_password}','{$user_fname}','{$user_lname}','{$user_email}','{$user_gender}','{$user_tp}','{$user_role}')";
		$result = mysqli_query($connect,$query);
		if(!$result){
			die('query failed'.mysqli_error($connect));
		}	
	}



?>
