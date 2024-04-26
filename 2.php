<?php
// URL to which you want to redirect the user
$redirect_url = 'https://www.example.com/';

// Set an HTTP header to redirect the user to the desired URL
header('Location: ' . $redirect_url);

// Ensure the script exits after setting the header to prevent further output
exit();

?>