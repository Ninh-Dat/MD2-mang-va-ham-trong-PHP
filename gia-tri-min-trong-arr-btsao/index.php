<?php
$arr=[1,2,3,4];
function timmin($arr){
    $min=$arr[0];
    for ($i=0;$i<count($arr);$i++){
        if ($arr[$i] <$min){
            $min=$arr[$i];
        }
    }
    return $min;
}

echo "giá trị min trong mảng = ". timmin($arr);
?>
