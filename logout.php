<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: welcome.php"); // Redirecting To Home Page
}
?>