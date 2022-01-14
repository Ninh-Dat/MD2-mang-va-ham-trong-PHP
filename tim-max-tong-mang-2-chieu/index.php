<?php
$arr=[
  [2,3,4,5,10],
  [6,7,8,9],
];
function timMax($arr){
    $max=[0][0];
    for ($i=0;$i<count($arr);$i++){
        for ($j=0;$j<count($arr[$i]);$j++){
            if ($arr[$i][$j]>$max){
                $max=$arr[$i][$j];
            }
        }
    }
    return $max;
}
echo"Phần tử lớn nhất trong mảng 2 chiều = ". timMax($arr);
?>