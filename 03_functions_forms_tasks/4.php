<?php
filesInDir('C:\xampp\htdocs\work_study\Home_Backend\03_functions_forms_tasks');

function filesInDir($pass){
    $files = scandir($pass);
    print_r ($files);
}