<?php

global $error;
require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['user_name'])){
		
		$user_name = stripslashes($_REQUEST['user_name']); // removes backslashes
		$user_name = mysqli_real_escape_string($con,$user_name); //escapes special characters in a string
		$user_password = stripslashes($_REQUEST['user_password']);
		$user_password = mysqli_real_escape_string($con,$user_password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE user_name='$user_name' and user_password='".md5($user_password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $user_name;
			header("Location: welcome.php"); // Redirect user to index.php
            }else{
                $error = 100;
				}
    }else{}

function show(){
    global $error;
    if($error==100){
    echo "<p style='color:Tomato;''>*Username/Password Incorrect!!!</p>";
    }
}
?>
