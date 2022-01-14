
<?php
$arr = [1,2,3,4,5];
$x = 3 ;
function deletex($arr,$x){
    for ( $i = 0 ; $i < count($arr) ; $i++){
        if($x == $arr[$i]){
            unset($arr[$i]);//unset xóa phần tử trong mảng
        }
    }
    return $arr;
}
echo "<pre>";
print_r(deletex($arr,$x));
