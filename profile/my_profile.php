<?php
        include "../includes/db.php";
        include "../includes/auth.php";
        $name = ($_SESSION['username']);
		$query = "SELECT * from users WHERE user_name = {$name}";
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
		$user_role = $_POST['user_role'];
        $user_gender = $row['user_gender'];
        $user_tp = $row['user_tp'];
		

		$query = "UPDATE users set user_name = '{$user_name}',user_password = '{$user_password}',user_fname = '{$user_fname}',user_lname = '{$user_lname}',user_role = '{$user_role}',user_gender = '{$user_gender}',user_tp = '{$user_tp}' WHERE user_name = {$name}";
								
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
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" value = "M" checked="checked" name="user_gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="user_gender" value="F">
                                            <span class="checkmark"></span>
                                        </label>
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
                                    <input class="input--style-4" type="text" name="user_tp">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Account Type</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="user_role">
<!--
                                    <option disabled="disabled" selected="selected">Select Account Type</option>
                                    <option value="C">Client</option>
                                    <option value="H">Hoster</option>
-->
                                    <?php
				                    if(isset($user_roler)){
                                        $query = "SELECT * FROM users";
                                        $role = mysqli_query($con,$query);
					                    while($row = mysqli_fetch_assoc($role)){
						                  $user_role = $row['user_role'];
						                  if(count($user_role)>=3)
						                  echo"<option value='{$user_role}'>$user_role</option>";
                                        else{
							                  echo"<option value='C'>Client</option>";
                                              echo"<option value='H'>Hoster</option>";
                                              echo"<option value='subscriber'>subscriber</option>";
						}
				}
				}
				?>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <input class="btn btn--radius-2 btn--blue" name="submit" type="submit" value="Sign Up">
                        </div>
                    </form>
    
</body>
</html>