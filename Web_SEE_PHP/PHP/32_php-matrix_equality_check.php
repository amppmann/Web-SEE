<h1>CHECK WHETHER MATRIX ELEMENTS ARE SAME</h1>
<?php

$a = array(
    array(1, 2, 3),
    array(3, 4, 5),
    array(5, 6, 7)
);

$b = array(
    array(1, 2, 3),
    array(3, 4, 5),
    array(5, 6, 7)
);


echo "Matrix elements are <br>";
echo "Matrix 1 <br>";
$row1 = count($a);
$col1 = count($a[0]);

for ($i = 0; $i < $row1; $i++) {
    for ($j = 0; $j < $col1; $j++) {
        echo $a[$i][$j] . " ";
    }
    echo "<br>";
}
echo "<hr>";

echo "Matrix 2 <br>";
$row2 = count($b);
$col2 = count($b[0]);

for ($i = 0; $i < $row2; $i++) {
    for ($j = 0; $j < $col2; $j++) {
        echo $b[$i][$j] . " ";
    }
    echo "<br>";
}
echo "<hr>";


if ($row1 != $row2 || $col1 != $col2) {
    echo "Matrices are not equal";
} else {
    for ($i = 0; $i < $row1; $i++) {
        for ($j = 0; $j < $col1; $j++) {
            if ($a[$i][$j] != $b[$i][$j]) {
                $flag = false;
                break;
            }
        }
    }

    if ($flag = true) {
        print("Matrices are equal..");
    } else {
        print("Matrices are not equal..");
    }
}


?>