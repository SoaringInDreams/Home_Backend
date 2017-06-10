<?php

$rand_arr = array();

for($i=0;$i<10;$i++) {
    $rand_arr [$i] = rand(0, 100);
}
print_r($rand_arr);

$prod = 1;

foreach ($rand_arr as $k => $v){
    if($k<>0 and $k%2==0 and $v>0){
        $prod *= $v;
    }elseif($k%2>0 and $v>0){
        echo $v . "\n";
    }
}

echo $prod;