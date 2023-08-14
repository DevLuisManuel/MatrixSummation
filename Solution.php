<?php
function findBeforeMatrix(array $after): array
{
    $rows = count($after);
    $cols = count($after[0]);

    $before = [];

    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $cols; $j++) {
            $top = ($i > 0) ? $after[$i-1][$j] : 0;
            $left = ($j > 0) ? $after[$i][$j-1] : 0;
            $topLeft = ($i > 0 && $j > 0) ? $after[$i-1][$j-1] : 0;

            $before[$i][$j] = $after[$i][$j] - $top - $left + $topLeft;
        }
    }

    return $before;
}

$after = [[2,5],[7,17]];
$before = findBeforeMatrix($after);
print_r($before);