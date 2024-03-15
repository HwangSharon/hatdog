<?php
function printThickCross($size, $thickness)
{
    // Print the top half of the cross
    for ($i = 1; $i <= ($size - $thickness) / 2; $i++) {
        for ($j = 1; $j <= $size; $j++) {
            if ($j <= ($size - $thickness) / 2 || $j > ($size + $thickness) / 2) {
                echo " ";
            } else {
                echo "*";
            }
        }
        echo "\n";
    }

    // Print the middle part of the cross
    for ($i = 1; $i <= $thickness; $i++) {
        for ($j = 1; $j <= $size; $j++) {
            echo "*";
        }
        echo "\n";
    }

    // Print the bottom half of the cross
    for ($i = 1; $i <= ($size - $thickness) / 2; $i++) {
        for ($j = 1; $j <= $size; $j++) {
            if ($j <= ($size - $thickness) / 2 || $j > ($size + $thickness) / 2) {
                echo " ";
            } else {
                echo "*";
            }
        }
        echo "\n";
    }
}

printThickCross(10, 3);
?>