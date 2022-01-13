<?php
function power($val, $pow)
{
    if ($pow == 0)
        return 1;
    elseif ($pow > 0 )
        return $val * power($val, $pow-1);
    else
        return 1/($val * power($val, abs($pow)-1));
}
echo power(0.5, 5);
?>
