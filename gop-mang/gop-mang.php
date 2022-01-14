<?php
$arr1=[1,2,3,4];
$arr2=[5,6,7,8];


function gopArr($arr1,$arr2){
    $arr3=[];

    for ($i=0;$i<count($arr1);$i++){
        array_push($arr3,$arr1[$i]);
    }
    for ($j=0;$j<count($arr2);$j++){
        array_push($arr3,$arr2[$j]);
    }
    return $arr3;
}
echo "<pre>";
print_r( gopArr($arr1,$arr2));
?>