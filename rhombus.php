<?php
function printRhombus($n)
{
    for ($i = 1; $i <= $n; $i++)
    {
        for ($j = 1; $j <= $n - $i; $j++)
            echo " ";
        for ($j = 1; $j <= $n; $j++)
            echo "*";
        echo "<br>";
    }
}

printRhombus(5);
?>