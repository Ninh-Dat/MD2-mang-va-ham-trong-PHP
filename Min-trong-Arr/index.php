<?php
function timMin($arr){
    $min=$arr[0];
    for ($i=0;$i<count($arr);$i++){
        if ($arr[$i] <$min){
            $min = $arr[$i];
        }
    }
    return $min;
}
echo"Phần tử nhỏ nhất trong mảng = " .(timMin([2,3,4,5,6]))
?>
