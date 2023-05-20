<?php

$array1 = array(1, 2, 3, 5, 4, 1);
$array2 = array(10, 20, 50, 40, 30, 10,2,1,20);

echo "The 2 array elements are";
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

echo "Common elements from arrays are : ";

$common_ele=array_unique(array_intersect($array1,$array2));
foreach($common_ele as $c){
    echo $c." ";
}
echo "<hr>";


echo "The unique elements from two arrays are : ";
echo "<br>";
echo "Array 1 : ";
$array1=array_unique($array1);
foreach($array1 as $a){
    echo $a." ";

}
echo "<hr>";

echo "Array 2 : ";
$array2=array_unique($array2);
foreach($array2 as $a){
    echo $a." ";
}
echo "<hr>";
?>