<?php


function gcd($a, $b)
{
    if ($b == 0)
        return $a;
    return gcd($b, $a % $b);
}

function lcm($a, $b)
{
    return ($a / gcd($a, $b)) * $b;
}

$c = 15;
$d = 20;
echo "LCM OF " . $c . " and " . $d . " = " . lcm($c, $d);


?>