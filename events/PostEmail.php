<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Post Email</title>
</head>

<body>
	<?php
    		if(isset($_POST['submit'])){

		$myEmailAddress = "sanjanasulakshanawitharanage@gmail.com";
		$subject = "Question From Sri Lanka Page";
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
	
		$header = "From : $name <$email>";
		if(!mail($myEmailAddress, $subject, $message, $header)){
                echo "<h1>Faild!!</h1>";            
        }
		}
	?>
</body>
</html>