<?php
$size = 6; // Adjust the size of the heart (number of rows)

// Print the top half of the heart
for ($i = $size / 2; $i < $size; $i += 2) {
    // Print leading spaces
    for ($j = 1; $j < $size - $i; $j += 2) {
        echo "&nbsp;&nbsp;";
    }
    
    // Print the first set of stars
    for ($j = 1; $j < $i + 1; $j++) {
        echo "*";
    }
    
    // Print trailing spaces
    for ($j = 1; $j <= $size - $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    
    // Print the second set of stars
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    
    echo "<br/>";
}

// Print the bottom half of the heart
for ($i = $size; $i >= 1; $i--) {
    // Print leading spaces
    for ($j = $i; $j < $size; $j++) {
        echo "&nbsp;&nbsp;";
    }
    
    // Print the stars
    for ($j = 1; $j <= ($i * 2) - 1; $j++) {
        echo "*";
    }
    
    echo "<br>";
}
?>