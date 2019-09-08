
<?php
$arr = [2,-5,8,10];
function findMin($arr){
    $min = [0];
    for ($i = 0; $i < count($arr);$i++){
        if ($arr[$i] < $min){
            $min = $arr[$i];
        }
    }
    return $min;
}
echo findMin($arr);
?>
