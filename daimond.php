<?php
function printDiamond($n)
{
    $n = $n / 2;
    for ($i = 1; $i <= $n; $i++)
    {
        for ($j = 1; $j <= $n - $i; $j++)
            echo " ";
        for ($j = 1; $j <= 2 * $i - 1; $j++)
            echo "*";
        echo "<br>";
    }

    for ($i = $n - 1; $i >= 1; $i--)
    {
        for ($j = 1; $j <= $n - $i; $j++)
            echo " ";
        for ($j = 1; $j <= 2 * $i - 1; $j++)
            echo "*";
        echo "<br>";
    }
}

printDiamond(20);
?>