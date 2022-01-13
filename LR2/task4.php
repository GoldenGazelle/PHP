<?php
function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case "+":
            return sum($arg1, $arg2);
        case "-":
            return razn($arg1, $arg2);
        case "*":
            return pr($arg1, $arg2);
        case "%":
            return del($arg1, $arg2);
        default:
            echo "error";
    }
}
function sum($x, $y)
{
    return $x + $y;
}
function razn($x, $y)
{
    return $x - $y;
}
function pr($x, $y)
{
    return $x * $y;
}
function del($x, $y)
{
    return $x % $y;
}
echo $res = mathOperation(6, 4, "*");
?>