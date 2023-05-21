<h3>SUM OF EVEN & PRODUCT OF ODD NUMBERS</h3>
<?php

$list = array(1, 2, 3, 4, 5, 6);


$sum = 0;
$product = 1;

foreach ($list as $l) {
    if ($l % 2 == 0) {
        $sum += $l;
    } else {
        $product *= $l;
    }
}



echo "The sum of even numbers : " . $sum;
echo "<hr>";

echo "The product of odd numbers : " . $product;
echo "<hr>";


?>