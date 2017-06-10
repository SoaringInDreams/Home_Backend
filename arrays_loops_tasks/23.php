<?php

$num = 123;
$str =  str_split(strval($num),1) ;
$sum = 0;
foreach ($str as $i){
    $sum +=$i;
}

echo $sum;