<?php
$conn = new mysqli("your_server_name", "your_username", "your_password", "your_database_name");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "DELETE FROM Students WHERE enrollment_number = 453896";
$res = mysqli_query($conn,$sql);

if ($res) {
        echo "Record with enrollment number $enrollment_number has been deleted successfully.";
}else{
    echo "Record not deleted!!";
}
$conn->close();
?>
