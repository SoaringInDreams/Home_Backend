<?php

$string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';

$arr = explode(" ",$string);

$string = array_count_values($arr);

arsort($string);

foreach($string as $key=>$value){
    echo $key . ' - ' . $value . "\n";
}