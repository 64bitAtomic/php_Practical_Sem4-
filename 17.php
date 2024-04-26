<?php
// Calculate the expiration time (one hour from now)
$expirationTime = time() + 3600; // 3600 seconds = 1 hour

// Set a cookie named "username" with the value "Gulnar"
setcookie("username", "Gulnar", $expirationTime);

// Display a message indicating that the cookie has been set
echo "Cookie 'username' has been set with the value 'Gulnar' and will expire in one hour.";
?>
