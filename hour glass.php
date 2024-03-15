<?php
function printHourglass($size)
{
    for ($i = 1; $i <= $size; $i++) {
        echo str_repeat(" ", $i - 1) . str_repeat("*", ($size - $i + 1) * 2 - 1) . "<br>";
    }
    for ($i = $size - 1; $i >= 1; $i--) {
        echo str_repeat(" ", $i - 1) . str_repeat("*", ($size - $i + 1) * 2 - 1) . "<br>";
    }
}

printHourglass(5);
?>
