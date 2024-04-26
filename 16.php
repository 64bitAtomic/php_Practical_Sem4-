<?php
function checkString($input)
{
    if (empty($input)) {
        throw new Exception("Error: The input string is empty.");
    }
    return "The input string is valid: " . $input;
}
try {
    echo checkString("Hello, World!") ."<br>";  // Valid string
    echo checkString("");  // This should throw an exception
} catch (Exception $e) {
    echo $e->getMessage();  // Display the exception message
}
?>
