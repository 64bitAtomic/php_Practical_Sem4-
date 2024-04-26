<?php
// Start the session
session_start();

// Set session variables
$_SESSION["username"] = "JohnDoe";
$_SESSION["logged_in"] = true;
$_SESSION["last_login"] = date("Y-m-d H:i:s");

echo "Session variables are set.";
?>
