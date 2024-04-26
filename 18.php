<?php
// Start a new session or resume an existing one
session_start();

// Get the session save path (where session files are stored)
$sessionPath = session_save_path();

// Ensure that the path is valid
if ($sessionPath === '') {
    echo "Error: Session save path is not set.";
} else {
    // Check if the directory exists
    if (is_dir($sessionPath)) {
        // Open the session directory and count the files
        $sessionFiles = scandir($sessionPath);
        $activeSessions = count($sessionFiles) - 2; // Subtracting '.' and '..'

        echo "There are $activeSessions active sessions on the server.";
    } else {
        echo "Error: Session directory does not exist.";
    }
}
?>
