<?php

$array1 = array(1, 2, 3, 5, 4, 1);
$array2 = array(10, 20, 50, 40, 30, 10, 2, 1, 20);

echo "The 2 array elements are";
echo "<br>";
echo "<br>";

echo "Array 1 : ";
foreach ($array1 as $a) {
    echo $a . " ";
}
echo "<hr>";


echo "Array 2 : ";
foreach ($array2 as $a) {
    echo $a . " ";
}
echo "<hr>";


echo "Ascending order of two arrays are : ";
echo "<br>";
echo "<br>";

echo "Array 1 : ";
sort($array1);
foreach ($array1 as $a) {
    echo $a . " ";

}
echo "<hr>";

echo "Array 2 : ";
sort($array2);


foreach ($array2 as $a) {
    echo $a . " ";
}
echo "<hr>";

echo "Descending order of two arrays are : ";
echo "<br>";
echo "<br>";

echo "Array 1 : ";
rsort($array1);
foreach ($array1 as $a) {
    echo $a . " ";

}
echo "<hr>";


echo "Array 2 : ";
rsort($array2);

foreach ($array2 as $a) {
    echo $a . " ";
}
echo "<hr>";


?>