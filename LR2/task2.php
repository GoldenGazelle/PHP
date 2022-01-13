<?php
$a = 6;
switch ($a < 16 && $a >= 0){
    case true:
        test($a);
        break;
    default:
        echo "error";
}
function test($a)
{
    if($a > 15)
        return;
    echo "$a, ";
    $a += 1;
    return test($a);
}
?>
