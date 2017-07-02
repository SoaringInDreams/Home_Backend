
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $formData = [];
    $text = $_POST['text_1'];
    var_dump((implode("",explode($text," "))));


    if (bad_words($text)){
        echo "BAD WORDS!";

    }else{
        foreach ($_POST as $key => $value) {
            $formData[$key] = strip_tags($value,'<b>');
        }

        $formData['date'] = $_SERVER['REQUEST_TIME'];
        $userdata = json_encode($formData);

        file_put_contents("comments.txt", $userdata . "\n", FILE_APPEND);
    }
}

function bad_words($str){
    foreach (['ass','bitch', 'fuck', 'crap'] as $v) {
        if (stripos($str, $v) === false) {
            continue;
        }else{
            return true;
            break;
        }
    }

}


