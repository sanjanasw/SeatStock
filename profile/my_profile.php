<?php
        include "../includes/db.php";
        include "../includes/auth.php";

        $name = ($_SESSION['username']);
		$query = "SELECT * from users WHERE user_name = '$name'";
		$result = mysqli_query($con,$query);

	    while($row = mysqli_fetch_assoc($result)){
		  $user_name= $row['user_name'];
          $user_password = $row['user_password'];
		  $user_email = $row['user_email'];
          $user_fname = $row['user_fname'];
		  $user_lname = $row['user_lname'];
		  $user_role = $row['user_role'];
          $user_gender = $row['user_gender'];
          $user_tp = $row['user_tp'];
        }
        
        if(isset($_POST['submit'])){
            
		$user_name= $_POST['user_name'];
		$user_password = $_POST['user_password'];
		$user_email = $_POST['user_email'];
		$user_fname = $_POST['user_fname'];
		$user_lname = $_POST['user_lname'];
        $user_tp = $row['user_tp'];
        $user_tp = $row['user_tp'];
		

		$query = "UPDATE users set user_name = '{$user_name}',user_password = '{$user_password}',user_fname = '{$user_fname}',user_lname = '{$user_lname}',user_role = '{$user_role}',user_gender = '{$user_gender}',user_tp = '{$user_tp}',user_gender = '{$user_gender}',user_role = '{$user_role}' WHERE user_name = '{$name}'";
								
								$result = mysqli_query($con,$query);
								
								if(!$result){
									die("Error in updating category".mysqli_error($con));
								}
								header("Location:my_profile.php");	
							  }	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
                       <form method="POST" action="">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">first name</label>
                                    <input class="input--style-4" type="text" name="user_fname" value="<?php if(isset($user_fname)){echo $user_fname;}?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">last name</label>
                                    <input class="input--style-4" type="text" name="user_lname" value="<?php if(isset($user_lname)){echo $user_lname;}?>">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="password" name="user_password" value="<?php if(isset($user_password)){echo $user_password;}?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Re type-Password</label>
                                    <input class="input--style-4" type="password" name="." value="<?php if(isset($user_password)){echo $user_password;}?>">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Username</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 " type="text" name="user_name" value="<?php if(isset($user_name)){echo $user_name;}?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="user_email" value="<?php if(isset($user_email)){echo $user_email;}?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" name="user_tp" value="<?php if(isset($user_tp)){echo $user_tp;}?>">
                                </div>
                            </div>
                        </div>

                        <div class="p-t-15">
                            <input class="btn btn--radius-2 btn--blue" name="submit" type="submit" value="Update">
                        </div>
                    </form>
    
</body>
</html>