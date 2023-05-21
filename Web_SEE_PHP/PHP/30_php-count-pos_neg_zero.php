<h1>PHP-Positive, Negative and Zero count in a number</h1>
<?php

$array1=array(1,2,-3,4,0,1,-10,-50,0,4);

$positive=0;
$negative=0;
$zerocount=0;

echo "The numbers are ";

foreach($array1 as $a){

    echo $a.", ";
    if($a>0){
        $positive++;
    } else if($a==0){
        $zerocount++;

    } else{
        $negative++;
    }
}

echo "<hr>";
echo "Positive count : ".$positive;
echo "<hr>";
echo "Negative count : ".$negative;
echo "<hr>";
echo "Zero count : ".$zerocount;
echo "<hr>";



?>