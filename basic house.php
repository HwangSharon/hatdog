<?php
$roof_height = 3; // Adjust the height of the roof
$house_width = 5; // Adjust the width of the house

// Print the roof (triangle part)
for ($i = 1; $i <= $roof_height; $i++) {
    echo str_repeat(' ', $roof_height - $i); // Leading spaces
    echo str_repeat('*', 2 * $i - 1); // Asterisks
    echo "\n"; // Move to the next row
}

// Print the walls (rectangle part)
for ($i = 1; $i <= $house_width; $i++) {
    echo str_repeat('*', $house_width); // Full width of the house
    echo "\n"; // Move to the next row
}
?>