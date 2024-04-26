<?php
// Loop through rows
for ($row = 1; $row <= 6; $row++) {
    // Loop through columns
    for ($col = 1; $col <= 6; $col++) {
        // Calculate the product
        $product = $row * $col;

        // Print the product with tab spacing for alignment
        echo "$row x $col =  $product <br>"; // str_pad adds padding for alignment
    }
    // Move to the next line after each row
    
}
?>
