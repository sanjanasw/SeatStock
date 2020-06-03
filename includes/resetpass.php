<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body>
<div class="container-fluid">
			<?php
include('db.php');
if (isset($_GET["key"]) && isset($_GET["email"])
&& isset($_GET["action"]) && ($_GET["action"]=="reset")
&& !isset($_POST["action"])){
$key = $_GET["key"];
$email = $_GET["email"];
$curDate = date("Y-m-d H:i:s");
$query = mysqli_query($con,"
SELECT * FROM `password_reset_temp` WHERE `key`='$key' and `email`='$email';");
$row = mysqli_num_rows($query);
if ($row==""){
$error .= '<img class="mx-auto d-block mt-2 mb-2" src="../images/invalid.svg" style="max-width:400px;width:100%;"><h2 class="mx-auto d-block" >Invalid Link</h2>
<h5  class="text-center" >The link is invalid/expired. Either you did not copy the correct link from the email, 
or you have already used the key in which case it is deactivated.</h5>
<h5   class="text-center"><a href="https://www.weuse.work/pages/forgetpass.php">Click here to reset password.</a></h5>';
	}else{
	$row = mysqli_fetch_assoc($query);
	$expDate = $row['expDate'];
	if ($expDate >= $curDate){
	?>


<form   class="mx-auto d-block" method="post" action="" name="update" class="mb-5">
		<input type="hidden" name="action" value="update" />

		<p  class="mx-auto d-block">Enter New Password:</p>
		<input type="password" name="pass1" id="forminput" class="mx-auto d-block  mb-3" placeholder="&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;" required />

		<p  class="mx-auto d-block">Re-Enter New Password:</p>
		<input type="password" name="pass2" id="forminput" class="mx-auto d-block  mb-3" placeholder="&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;" required />

		<input type="hidden" name="email" value="<?php echo $email;?>"/>
    <input type="submit" name="submit" value="⟳ RESET PASSWORD" class="mx-auto d-block mb-3" id="button"/>
	</form>

<?php
}else{
$error .= '<img class="mx-auto d-block mt-2 mb-2" src="../images/timeout.svg" style="max-width:400px;width:100%;"><h2 class="mx-auto d-block" >Expired Link</h2>
<h5  class="text-center" >The link is expired. You are trying to use the expired link which was valid for only 24 hours (1 days after request).</h5>
<h5   class="text-center"><a href="https://www.weuse.work/pages/forgetpass.php">Click here to reset password.</a></h6>
';
				}
		}
if($error!=""){
	echo "$error";
	}
} // isset email key validate end


if(isset($_POST["email"]) && isset($_POST["action"]) && ($_POST["action"]=="update")){
$error="";
$pass1 = mysqli_real_escape_string($con,$_POST["pass1"]);
$pass2 = mysqli_real_escape_string($con,$_POST["pass2"]);
$email = $_POST["email"];
$curDate = date("Y-m-d H:i:s");
if ($pass1!=$pass2){
		$error .= "<script>
        window.onload = function() {
            Swal.fire({
                title: 'Passwords do not match',
                text: 'both passwords should be same.',
                imageUrl: '../images/invalid.svg',
                imageHeight: 250,
                imageAlt: 'password didnt match',
                confirmButtonColor: '#ff5454',
                confirmButtonText: 'my bad',
            }).then( function() {
        window.location.href = 'javascript:history.go(-1)';
    })
        };
    </script>";
		}
	if($error!=""){
		echo "$error";
		}else{

mysqli_query($con,
"UPDATE `users` SET `user_password`='.md5($pass1).', `user_regdate`='$curDate' WHERE `user_email`='$email';");	

mysqli_query($con,"DELETE FROM `password_reset_temp` WHERE `email`='$email';");		
	
echo "<script>
window.onload = function() {
    Swal.fire({
        title: 'Congratulations! ',
        text: 'Your password has been updated successfully.',
        imageUrl: '../images/pwresetdone.svg',
        imageHeight: 250,
        imageAlt: 'password reset done',
        confirmButtonColor: '#ff5454',
        confirmButtonText: 'nice',
    }).then( function() {
        window.location.href = '../pages/signin.php';
    })
};
</script>";
		}		
}
?>
            </div>
		</div>
</div>
</body>
</html>