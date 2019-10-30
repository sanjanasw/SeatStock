<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/
?>

<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: index_log.php'");
exit(); }
?>
