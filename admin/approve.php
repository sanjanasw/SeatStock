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
    if(isset($_GET['d1'])){
				$user_id = $_GET['d1'];
				
				$query = "UPDATE users set user_role = 'H' WHERE user_id = {$user_id}";
								
				$result = mysqli_query($con,$query);
                header("Location:view_app_u.php");
				if(!$result){
				    die("Error in Bannign...".mysqli_error($con));
				}
									
	 }
	if(isset($_GET['d2'])){
				$user_id = $_GET['d2'];
				
				$query = "UPDATE users set user_role = 'C' WHERE user_id = {$user_id}";
								
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
	if(isset($_GET['delete_e'])){
				$e_id = $_GET['delete_e'];
				
				$query = "DELETE FROM events WHERE e_id = {$e_id}";								
				$result = mysqli_query($con,$query);
                header("Location:view_app_u.php");
				if(!$result){
				    die("Error in deleting....".mysqli_error($con));
				}
        
                $query1 = "DROP TABLE A{$e_id};";
                $result1 = mysqli_query($con,$query1);
                header("Location:view_app_u.php");
				if(!$result1){
				    die("Error in deleting....".mysqli_error($con));
				}
									
	 }


?>