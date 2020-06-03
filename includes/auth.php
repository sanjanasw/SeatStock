<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: ./index_log.php");
exit(); }
?>