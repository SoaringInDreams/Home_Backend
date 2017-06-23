<?php
filesInDir('C:\xampp\htdocs\work_study\Home_Backend\03_functions_forms_tasks','4');

function filesInDir($pass, $word){
    $files = scandir($pass);
    $list = [];
    $word = "/$word/";
    foreach ($files as $key => $i){
        if(preg_match($word,$i)==1){
            $list[]=$i;
        };

    }

    print_r ($list);
}