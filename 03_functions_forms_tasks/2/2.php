
<?php

$text = array_flip(explode(" ", $_POST['text']));


getTheLongest3Words($text);

function getTheLongest3Words($a){
    $words = [];
    foreach ($a as $key1 => $v1){
        $words[$key1] = mb_strlen($key1);
    }
    asort($words);
    print_r(array_slice($words, -3, 3));
}









