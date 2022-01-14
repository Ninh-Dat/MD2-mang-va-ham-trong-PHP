<?php
$arr = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];

function sumCol($arr,$col)
{
    $sum = 0;
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr[$i]); $j++) {
            if ($j == $col) {
                $sum += $arr[$i][$j];
            }
        }
    }
    return $sum;
}


echo sumCol($arr,'1');
?>