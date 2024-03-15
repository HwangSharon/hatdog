<?php
$size = 5; // Adjust the size of the hollow square

for ($i = 0; $i < $size; $i++) {
    // Print each column
    for ($j = 0; $j < $size; $j++) {
        if ($i === 0 || $i === $size - 1 || $j === 0 || $j === $size - 1) {
            echo "*"; // Print a star at the border
        } else {
            echo "&nbsp;&nbsp;"; // Use non-breaking space for interior
        }
    }
    echo "<br>"; // Move to the next row
}
?>