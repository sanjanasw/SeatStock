<?php
    include "../includes/db.php";
	if(isset($_GET['approve'])){
				$user_id = $_GET['approve'];
				
				$query = "UPDATE users set user_role = 'A' WHERE user_id = {$user_id}";
								
				$result = mysqli_query($con,$query);
                header("Location:view_app_u.php");
				if(!$result){
				    die("Error in Approving...".mysqli_error($con));
				}
									
	 }
	if(isset($_GET['ban'])){
				$user_id = $_GET['ban'];
				
				$query = "UPDATE users set user_role = 'H' WHERE user_id = {$user_id}";
								
				$result = mysqli_query($con,$query);
                header("Location:view_app_u.php");
				if(!$result){
				    die("Error in Bannign...".mysqli_error($con));
				}
									
	 }
	if(isset($_GET['delete'])){
				$user_id = $_GET['delete'];
				
				$query = "DELETE FROM users WHERE user_id = {$user_id}";
								
				$result = mysqli_query($con,$query);
                header("Location:view_app_u.php");
				if(!$result){
				    die("Error in deleting....".mysqli_error($con));
				}
									
	 }


?>