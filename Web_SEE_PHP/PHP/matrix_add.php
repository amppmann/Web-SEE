<?php

$a1 = array(
    array(1, 2, 3),
    array(3, 4, 5),
    array(4, 5, 6)
);


$a2 = array(
    array(2, 3, 4),
    array(3, 4, 5),
    array(4, 5, 6)
);


echo "First Matrix is";
echo "<br>";

$row = count($a1);
$col = count($a1[0]);

for ($i = 0; $i < $row; $i++) {
    for ($j = 0; $j < $col; $j++) {
        echo $a1[$i][$j] . " ";
    }
    echo "<br>";
}

echo "<hr>";

echo "Second Matrix is";
echo "<br>";

$row = count($a2);
$col = count($a2[0]);

for ($i = 0; $i < $row; $i++) {
    for ($j = 0; $j < $col; $j++) {
        echo $a2[$i][$j] . " ";
    }
    echo "<br>";
}

echo "<hr>";


echo "The sum of the matrix is ";
echo "<br>";

$sum = array();

for ($i = 0; $i < $row; $i++) {
    for ($j = 0; $j < $col; $j++) {
        $sum[$i][$j] = $a1[$i][$j] + $a2[$i][$j];
    }
}

for ($i = 0; $i < $row; $i++) {
    for ($j = 0; $j < $col; $j++) {
        echo $sum[$i][$j] . " ";
    }
    echo "<br>";
}


?>