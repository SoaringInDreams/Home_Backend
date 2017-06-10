<?php

$num = 442158755745;
$str =  str_split(strval($num),1) ;
$count = 0;
foreach ($str as $i){
    if ($i == 5){
        $count ++;
    }
}

echo $count;