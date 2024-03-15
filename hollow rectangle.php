<?php
$rows = 10; // Adjust the number of rows
$columns = 30; // Adjust the number of columns

// Print the hollow rectangle
for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $columns; $j++) {
        if ($i === 1 || $i === $rows || $j === 1 || $j === $columns) {
            echo "*"; // Print a star at the border
        } else {
            echo "&nbsp;&nbsp;"; // Print a space for the interior
        }
    }
    echo "<br>"; // Move to the next row
}
?>