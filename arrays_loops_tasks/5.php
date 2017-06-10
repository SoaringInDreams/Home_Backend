<?php

$arr = array(
    'Коля' => 200,
    'Петя' => 300,
    'Вася' => 400,
);


foreach ($arr as $key => $val) {
    echo $key . ' — зарплата ' . $val . "\n";
}