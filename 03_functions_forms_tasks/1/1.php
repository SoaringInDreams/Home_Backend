
<?php


$text1 = explode(" ", $_POST['text_1']);
$text2 = explode(" ", $_POST['text_2']);

getCommonWords($text1, $text2);

function getCommonWords($a, $b){
    $commonWords = [];
    foreach ($a as $key1 => $v1){
        trim($v1, ".");
        foreach ($b as $key2 =>  $v2){
            trim($v2, ".");
            if ($v1 == $v2){
                $commonWords[] = $v2;

            }
        }
    }
    $commonWords = array_unique($commonWords);
    print_r($commonWords);
}









