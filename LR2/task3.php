<?php
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
echo $s = sum(3,6);
echo "</br>";
echo $r = razn(5,3);
echo "</br>";
echo $p = pr(2,2);
echo "</br>";
echo $d = del(8,3);
?>