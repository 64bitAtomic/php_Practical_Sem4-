<?php
// Function to validate if a credit card number is composed of exactly 16 numerical digits
function isCreditCardValid($creditCardNumber) {
    // Use a regular expression to ensure the number contains exactly 16 digits
    $pattern = '/^\d{16}$/';

    // Check if the input matches the pattern
    return preg_match($pattern, $creditCardNumber) === 1;
}

// Example credit card numbers to validate
$creditCardNumbers = [
    "1234567812345678", // Valid
    "1234 5678 1234 5678", // Invalid (contains spaces)
    "123456781234567",  // Invalid (15 digits)
    "12345678123456789", // Invalid (17 digits)
    "1234-5678-1234-5678", // Invalid (contains dashes)
    "12345678abcd5678"  // Invalid (contains non-numeric characters)
];

// Validate each credit card number and print the result
foreach ($creditCardNumbers as $creditCard) {
    if (isCreditCardValid($creditCard)) {
        echo "The credit card number '$creditCard' is valid.<br>";
    } else {
        echo "The credit card number '$creditCard' is NOT valid.<br>";
    }
}
?>
