<?php

function towerOfHanoi($diskCount, $a = 'A', $b = 'B', $c = 'C')
{
    if ($diskCount == 1) {
        echo "move {$a} to {$c}". "<br>";
    } else {
        towerOfHanoi($diskCount - 1, $a, $c, $b);
        towerOfHanoi(1, $a, $b, $c);
        towerOfHanoi($diskCount - 1, $b, $a, $c);
    }
}
towerOfHanoi(4);
?>