<?php
$x = 5;
if ($x==5){
    function foo()
    {
        echo "Hello from foo()\n";
    }
}
foo();

$x = "foo";
function foo()
{
    echo "Hello from foo()\n";
}
$x();



$foo = function (){
    echo "Hello from".__FUNCTION__."\n";
};
$foo();

sum(1,2);
function sum($x, $y)
{
    echo $x, $y;
}


function sum($x, $y)
{
    echo "x + y = " . $x + $y . "\n";
    echo "x + y = " . ($x + $y);
}
sum(2,3);

$arr = ['John', 'Snow', 'Knownothinger'];

echo implode($arr,',');



myImplode('John', 'Snow', 'Knownothinger');
function myImplode()
{
    $args = func_get_args();
    var_dump($args);
}
myImplode();


