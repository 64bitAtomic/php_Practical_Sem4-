<!DOCTYPE html><head><title>Form with Blank Field Check</title></head><body>

<?php
$error = ""; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $requiredFields = ["name", "email", "message"];
    foreach ($requiredFields as $field) {
        if (empty($_POST[$field])) {
            $error = "Please fill in all required fields.";
            break;}}
    if ($error === "") {
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $message = htmlspecialchars($_POST["message"]);
        echo "Thank you, $name! We have received your message.";}}
?>
<form method="post" action="">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="email" name="email"><br><br>
    Message: <textarea name="message"></textarea><br><br>
    <input type="submit" value="Submit">
</form>
<?php
if ($error !== "") {
    echo "<p style='color:red;'>$error</p>";
}
?></body></html>
