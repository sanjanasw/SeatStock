<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: index_log.php"); // Redirecting To Home Page
}
?>