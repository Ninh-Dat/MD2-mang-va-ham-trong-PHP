<?php
$arr = "Ninh Van Tuan Dat";
$a = "a";

function demArr($arr, $a)
{
    $count = 0;
    for ($i = 0; $i < strlen($arr); $i++) {
        if ($arr[$i] == $a) {
            $count++;
        }

    }
    return $count;
}

echo demArr($arr, $a);
?>