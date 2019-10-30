<?php 
session_start();
if(!isset($_SESSION["username"])){
header("Location: index_log.php");
exit(); } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <H1>Welcome <?php echo $_SESSION['username']; ?>!</H1>
</body>
</html>