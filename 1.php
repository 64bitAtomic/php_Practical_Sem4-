<?php
// Check if the request is using HTTPS
$is_https = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on';

// Display a message indicating whether the connection is HTTPS or HTTP
if ($is_https) {
    echo "The page is being accessed using HTTPS.";
} else {
    echo "The page is being accessed using HTTP.";
}
?>