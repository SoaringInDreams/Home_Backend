
<?php

$text = $_POST['text'];

revers($text);

function revers($a)
{
    $arr = explode(". ",$a);
    $new_arr = array_reverse($arr);
    print_r(implode(". ",$new_arr));
}











