<?php
$age = 26;

if($age<=59 and $age>18) {
    echo "Вам еще работать и работать";
}elseif($age>59){
    echo "Вам пора на пенсию";
}elseif ($age>0 and $age<=17) {
    echo "Вам еще рано работать";
}
