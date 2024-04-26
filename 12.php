<?php
// Database connection settings
$servername = "localhost"; // Your MySQL server
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "school"; // Your database name
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$last_name = isset($_POST['last']) ? $_POST['last'] : '';
$sql = "SELECT `first`, `last` FROM stu WHERE `last` = '$last_name'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<h2>Students with Last Name: $last_name</h2>";
    while ($row = $result->fetch_assoc()) {
        echo $row['first'] . " " . $row['last'] . "<br>";
    }
} else {
    echo "No match found for last name: $last_name.";
}
$conn->close();
?>
