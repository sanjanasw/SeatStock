<?php

require("../phpmailer/PHPMailerAutoload.php");

$mail = new PHPMailer;

//Enable SMTP debugging. 
$mail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "weuse.work@gmail.com";                 
$mail->Password = "lebdkufvlhhmlvvv";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to 
$mail->Port = 587;                                   

$mail->From = "noreply@gmail.com";
$mail->FromName = "Seatstock";

$mail->addAddress("s.witharanage@yahoo.com", "Recepient Name");

$mail->isHTML(true);

$mail->Subject = "Seatstock Booking Confirmation.";
$mail->Body = "<i>This Is Fully Automated Email By Seatstock</i>";
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
}
?>
