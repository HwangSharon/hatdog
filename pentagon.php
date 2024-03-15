<?php
function printMoon($radius)
{
    $diameter = $radius * 2;
    $midpoint = $radius - 1;

    // Print the top half of the moon
    for ($y = 0; $y < $radius; $y++) {
        for ($x = 0; $x < $diameter; $x++) {
            $distance = sqrt(pow($x - $midpoint, 2) + pow($y - $midpoint, 2));
            if ($distance < $radius) {
                echo "*";
            } else {
                echo " ";
            }
        }
        echo "<br>";
    }

    // Print the bottom half of the moon
    for ($y = $radius - 2; $y >= 0; $y--) {
        for ($x = 0; $x < $diameter; $x++) {
            $distance = sqrt(pow($x - $midpoint, 2) + pow($y - $midpoint, 2));
            if ($distance < $radius) {
                echo "*";
            } else {
                echo " ";
            }
        }
        echo "<br>";
    }
}

printMoon(5);
?>