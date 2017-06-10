<?php
$arr = array(4, 2, 5, 19, 13, 0, 10);
$e = 0;
foreach ($arr as $i){
    if ($i == 2 or $i == 3 or $i == 4 ) {
        $e ++;
    }
}
if ($e > 0){
    echo "Есть!";
}else {
    echo "Нет";
}