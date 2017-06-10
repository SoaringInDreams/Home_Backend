<?php

$rand_arr = array();
for($i=0;$i<5;$i++){
    $rand_arr [$i]=rand(0,10);
}
print_r($rand_arr);

$min = min($rand_arr);
$max = max($rand_arr);

foreach($rand_arr as $k=>$v){
    if($v == $min){
        $rand_arr[$k] = $max;
    }
    if($v == $max){
        $rand_arr[$k] = $min;
    }
}

print_r($rand_arr);