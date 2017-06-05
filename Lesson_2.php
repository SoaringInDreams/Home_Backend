<?php
/**
 * Created by PhpStorm.
 * User: Nikolay
 * Date: 20.05.2017
 * Time: 10:02
 */
echo "Hello!"."\n";

$nums = array(10,9,8,7,6,5,4,3,2,1);


for ($i = 0; $i < 10; $i++) {
    echo $nums[$i]."\n";
}

$nums = array(10,9,8,7,6,5,4,3,2,1);
$i = 0;

while($i < 10){
    echo $nums[$i] . "\n";
    $i++;
    }