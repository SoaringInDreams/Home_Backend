
<?php

if ($_SERVER ['REQUEST_METHOD'] == "POST") {

    $num = $_POST['text'];

    $file = 'text.txt';

    $open = explode(' ', file_get_contents($file));
    var_dump($open);
    $file = fopen('text.txt', "w");
    foreach ($open as $key=>$v){
        var_dump($v);
        if (mb_strlen($v) > $num){
            fwrite($file,$v . " ");
        }
    }
    fclose($file);

}








