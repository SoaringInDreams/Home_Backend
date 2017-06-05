<?php
$a = 6;
$b = 0;

$operator = "*";

switch ($operator) {
    case "-":
        echo $a - $b;
        break;
    case "+":
        echo $a + $b;
        break;
    case "/":
        if ($b == 0){echo 'Error:division by zero';
        }else {echo $a / $b;}
        break;
    case "*":
        echo $a * $b;
        break;
    case "%":
        if ($b == 0){echo 'Error:division by zero';
        }else {echo $a % $b;}
        break;
}