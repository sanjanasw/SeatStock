<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
		<div class="row mt-4">
			<div class="col-12 text-center">
				<?php
                $error = "";
				include('db.php');
				if(isset($_POST["email"]) && (!empty($_POST["email"]))){
				$email = $_POST["email"];
				$email = filter_var($email, FILTER_SANITIZE_EMAIL);
				$email = filter_var($email, FILTER_VALIDATE_EMAIL);
				if (!$email) {
				  	$error .="<script>
					  window.onload = function() {
						  Swal.fire({
							  title: '',
							  text: 'Invalid email address',
							  imageUrl: '../images/invalidmail.svg',
							  imageHeight: 250,
							  imageAlt: 'no user',
							  confirmButtonColor: '#ff5454',
							  confirmButtonText: 'my bad',
						  }).then( function() {
							  window.location.href = 'javascript:history.go(-1)';
						  })
					  };
				  </script>";
					}else{
					$sel_query = "SELECT * FROM `users` WHERE user_email='$email'";
					$results = mysqli_query($con,$sel_query);
					$row = mysqli_num_rows($results);
                    $row1 = mysqli_fetch_assoc($results);
                    $user_name=$row1['user_name'];
					if ($row==""){
						//if email not in there
						$error .= "<script>
						window.onload = function() {
							Swal.fire({
								title: '',
								text: 'no user is registerd with this email address',
								imageUrl: '../images/nouser.svg',
								imageHeight: 250,
								imageAlt: 'no user',
								confirmButtonColor: '#ff5454',
								confirmButtonText: 'Oh Okay',
							}).then( function() {
								window.location.href = 'javascript:history.go(-1)';
							})
						};
					</script>";
						}
					}
					//check there is an error or not
					if($error!=""){
					echo $error;
						}else{
							//set exp date after 24h
					$expFormat = mktime(date("H"), date("i"), date("s"), date("m")  , date("d")+1, date("Y"));
					$expDate = date("Y-m-d H:i:s",$expFormat);
					//genarate a key
					$key = md5(2418*2);
					$addKey = substr(md5(uniqid(rand(),1)),3,10);
					$key = $key . $addKey;
				    $query = "INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`)
				VALUES ('$email', '$key', '$expDate');";
				// Insert Temp Table
				mysqli_query($con, $query);
						
				$output='<p>Dear '.$user_name.',</p>';
				$output.='<p>Please click on the following link to reset your password.</p>';
				$output.='<p>-------------------------------------------------------------</p>';
				$output.='<p><a href="https://www.seatstock.lk/includes/forgetpass.php?key='.$key.'&email='.$email.'&action=reset" target="_blank">https://www.weuse.work/includes/reset-password.php?key='.$key.'&email='.$email.'&action=reset</a></p>';		
				$output.='<p>-------------------------------------------------------------</p>';
				$output.='<p>Please be sure to copy the entire link into your browser.
				The link will expire after 1 day for security reasons.</p>';
				$output.='<p>If you did not request this forgotten password email, no action 
				is needed, your password will not be reset. However, you may want to log into 
				your account and change your security password as someone may have guessed it.</p>';   	
				$output.='<p>Thanks,</p>';
				$output.='<p>Weuse Team</p>';
				$body = $output; 
				$subject = "Password Recovery - Seatstock.lk";
				
				$email_to = $email;
				$fromserver = "noreply@seatstock.lk"; 
				require("../phpmailer/PHPMailerAutoload.php");
				$mail = new PHPMailer();
				$mail->IsSMTP();
				$mail->Host = "smtp.gmail.com"; // Enter your host here
				$mail->SMTPAuth = true;
                $mail->Username = "weuse.work@gmail.com"; // Enter your email here
				$mail->Password = "lebdkufvlhhmlvvv"; //Enter your passwrod here
				$mail->Port = 587;
				$mail->IsHTML(true);
				$mail->From = "noreply@seatstock.lk";
				$mail->FromName = "Seatstock";
				$mail->Sender = $fromserver; // indicates ReturnPath header
				$mail->Subject = $subject;
				$mail->Body = $body;
				$mail->AddAddress($email_to);
				if(!$mail->Send()){
				echo "Mailer Error: " . $mail->ErrorInfo;
				}else{
					//if mail sent message
				echo "<script>
				window.onload = function() {
					Swal.fire({
						title: '',
						text: 'An email has been sent to you with instructions on how to reset your password. Make sure to check your SPAM and JUNK folders',
						imageUrl: '../images/passinstructionsent.svg',
						imageHeight: 250,
						imageAlt: 'password reset instructions sent',
						confirmButtonColor: '#ff5454',
						confirmButtonText: 'lemme check',
					}).then( function() {
						window.location.href = './signin.php';
					})
				};
			</script>";
					}
				
						}	
					
				}else{
				?>
				    <form method="post" action="" name="reset">
						<p>Enter Your Email Address</p>
				        <input type="email" name="email" placeholder="username@email.com" id="forminput"/>
				        <input id="button" type="submit" value="⟳ RESET PASSWORD" />
				    </form>
				    <?php } ?>
            </div>
		</div>
</div>
</body>
</html>