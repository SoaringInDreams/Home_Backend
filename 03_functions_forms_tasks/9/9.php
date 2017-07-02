
<?php

$text = $_POST['text'];

//print_r(strrev($text));

reversString($text);

function reversString($a){
    $a = preg_split('//', $a, -1);
    krsort($a);
    print_r(implode("",$a));
}









