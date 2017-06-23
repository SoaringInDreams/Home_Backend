
<?php

$text = explode(". ", $_POST['text']);

firstElemUpper($text);

//function firstElemUpper($a){
//    $up = [];
//    foreach ($a as $key => $v){
//       $new = ucfirst($v);
//       $up[] = $new;
//    }
//    print_r(implode($up));
//}

function firstElemUpper($a)
{
    $up = [];
    foreach ($a as $key => $v) {
        array_push($up,mbucfirst($v));
    }
    print_r(implode(". ",$up));
}


function mbucfirst($str)
{
    return mb_strtoupper(mb_substr($str, 0, 1)) . mb_substr($str, 1);
}









