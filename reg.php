<?php

	if(isset($_POST['submit'])){
		$user_name= $_POST['user_name'];
		$user_password = $_POST['user_password'];
		$user_email = $_POST['user_email'];
		$user_fname = $_POST['user_fname'];
		$user_lname = $_POST['user_lname'];
        $user_gender = $_POST['user_gender']
        $user_tp = $_POST['user_tp']
		//$user_image = $_FILES['user_image']['name'];
		//$user_image_temp = $_FILES['user_image']['tmp_name'];
		$user_role = $_POST['user_role'];
		
		//move_uploaded_file($post_image_temp,"../images/$post_image");
		
		$query = "INSERT INTO users(user_name,user_password,user_fname,user_lname,user_email,user_image,user_role)";
		$query .= "VALUES('{$user_name}','{$user_password}','{$user_fname}','{$user_lname}','{$user_email}','','{$user_role}')";
		
		$result = mysqli_query($connect,$query);
		if(!$result){
			die('query failed'.mysqli_error($connect));
		}	
	}



?>
