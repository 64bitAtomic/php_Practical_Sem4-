<?php
// Start the session
session_start();

// Access session variables
if (isset($_SESSION["username"])) {
    echo "Welcome, " . $_SESSION["username"] . "!";
    echo "<br>";
    echo "Your last login was on: " . $_SESSION["last_login"];
} else {
    echo "No session data available.";
}
?>
