
<?php

$text = explode(" ", $_POST['text']);


countUniqueWords($text);


function countUniqueWords($a){
    $b = array_unique($a);
    $count = 0;
    foreach ($b as $key =>$v){
        $count++;
    }
    print_r($count);
}









