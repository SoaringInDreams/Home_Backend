<?php
//1
$name = "Nikolay";
//2
$age = 26;
//3
echo "Меня зовут: $name" . "\n";
//4
echo "Мне $age лет" . "\n";

//5-8
if($age<=59 and $age>18) {
    echo "Вам еще работать и работать" . "\n";
}elseif($age>59){
    echo "Вам пора на пенсию" . "\n";
}elseif ($age>0 and $age<=17) {
    echo "Вам еще рано работать" . "\n";
}elseif ($age<0 or $age <> is_integer($age)) {
    echo "Неизвестный возраст" . "\n";
}

$day = 6;

switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Это рабочий день" . "\n";
        break;
    case 6:
    case 7:
        echo "Это выходной день" . "\n";
        break;
    default:
        echo "Неизвестный день" . "\n";

}