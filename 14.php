<?php
// Database connection parameters (replace with your actual database information)
$servername = "your_server_name";
$username = "your_username";
$password = "your_password";
$database = "your_database_name";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $database);

// Check for a successful connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$title = $_POST['title'];
$email = $_POST['email'];
$office = $_POST['office'];
$extension = $_POST['extension'];

// Check if any required field is empty
if (empty($first_name) || empty($last_name) || empty($title) || empty($email) || empty($office) || empty($extension)) {
    echo "Error: All fields must be filled in.";
} else {
    // Prepare the SQL statement to insert data into the faculty table
    $sql = "INSERT INTO faculty (first_name, last_name, title, email, office, extension) 
            VALUES ('$first_name', '$last_name', '$title', '$email', '$office', '$extension')";

    // Execute the SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully.";
    } else {
        echo "Error inserting record: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>