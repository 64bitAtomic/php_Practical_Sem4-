<?php
function divide($n, $d){
    if ($d == 0) {
        throw new Exception("Division by zero is not allowed.");
    }
    return $n / $d;
}
try {
    $num1 = 10;
    $num2 = 2;
    $result = divide($num1, $num2); // This should work
    echo "Result of $num1 divided by $num2 is: $result<br>";

    $num2 = 0;
    $result = divide($num1, $num2); // This should cause an exception
    echo "Result of $num1 divided by $num2 is: $result";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
