<?php
    include "../includes/db.php";
	if(isset($_GET['delete'])){
				$user_id = $_GET['delete'];
				
				$query = "DELETE FROM guest WHERE guser_id = {$user_id}";
								
				$result = mysqli_query($con,$query);
                header("Location: guest.php");
				if(!$result){
				    die("Error in deleting....".mysqli_error($con));
				}
									
	 }


?>