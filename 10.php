<?php
// Function to determine card type based on the starting digit
function getCardType($cardNumber) {
    // Use a regular expression to check the first digit
    if (preg_match('/^4/', $cardNumber)) {
        return "Visa";
    } elseif (preg_match('/^5/', $cardNumber)) {
        return "MasterCard";
    } else {
        return "Unknown";
    }
}

// Example credit card numbers to validate
$creditCardNumbers = [
    "4111111111111111", // Visa (starts with 4)
    "5212345678901234", // MasterCard (starts with 5)// Discover (invalid for our check, starts with 6)
    "1234567812345678"// Invalid (starts with 1)
     // MasterCard (starts with 5)
];

// Validate each credit card number to determine its type
foreach ($creditCardNumbers as $creditCard) {
    $cardType = getCardType($creditCard);
    echo "Credit card number '$creditCard' is of type: $cardType.<br>";
}
?>
