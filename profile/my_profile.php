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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <script src="../bootstrap/js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/eee0ff9583.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>SeatStock</title>
</head>

<body>
    <div class="card shadow-lg p-3 mb-5 bg-white rounded-lg text-center" style="max-width: 30rem;">
        <div class="container shadow-lg p-2 mb-3 bg-blue-gradient rounded-lg" style="max-width: 28rem;">
            <h3 class="text-white">EDIT YOUR ACCOUNT DETAILS</h3>
        </div>
        <div class="container shadow-lg p-3 bg-redish-gradient rounded-lg" style="max-width: 28rem;">
            <form method="POST" action="">
                <div class="form-group">
                    <h5 class="text-white">First Name</h5>
                    <input class="form-control" type="text" name="user_fname" value="<?php if(isset($user_fname)){echo $user_fname;}?>">
                </div>
                <div class="form-group">
                    <h5 class="text-white">Last Name</h5>
                    <input class="form-control" type="text" name="user_lname" value="<?php if(isset($user_lname)){echo $user_lname;}?>">
                </div>
                <div class="form-group">
                    <h5 class="text-white">Password</h5>
                    <input class="form-control" type="password" name="user_password" value="<?php if(isset($user_password)){echo $user_password;}?>">
                </div>
                <!-- <div class="col-2">
                <div class="input-group">
                    <label class="label">Re type-Password</label>
                    <input class="input--style-4" type="password" name="." value="<?php //if(isset($user_password)){echo $user_password;}?>">
                </div>
            </div>-->
                <div class="form-group">
                    <h5 class="text-white">User Name</h5>
                    <input class="form-control" type="text" name="user_name" value="<?php if(isset($user_name)){echo $user_name;}?>">
                </div>
                <div class="form-group">
                    <h5 class="text-white">Email</h5>
                    <input class="form-control" type="email" name="user_email" value="<?php if(isset($user_email)){echo $user_email;}?>">
                </div>
                <div class="form-group">
                    <h5 class="text-white">Phone Number</h5>
                    <input class="form-control" type="text" name="user_tp" value="<?php if(isset($user_tp)){echo $user_tp;}?>">
                </div>
                <div class="form-group mb-1">
                    <button class="btn btn-primary btn-link btn-wd btn-lg bg-blue-gradient text-white nounderline" style="width:100%;" name="submit" type="submit" value="Sign Up">Change
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
