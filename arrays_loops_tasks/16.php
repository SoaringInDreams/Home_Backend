<?php
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$count = 0;
foreach ($arr as $i){
    if ($count <2){
        $count ++;
        echo $i . ", ";
    }elseif ($count == 2){
        $count = 0;
        echo  $i . "\n";
    }

}