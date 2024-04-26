<?php
$word = "Hello, World!";

$first_char = mb_substr($word, 0, 1); 

$remaining_chars = mb_substr($word, 1);

$color = 'red';

$styled_word = "<span style='color: $color;'>$first_char</span>$remaining_chars";

echo $styled_word;
?>