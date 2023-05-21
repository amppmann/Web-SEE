<?php

echo "<h1>Matrix Multiplication</h1>";


$array1=array(
    array(1,2,3),
    array(3,4,5),
    array(4,5,6)
);

$array2=array(
    array(2,3,4),
    array(3,4,5),
    array(4,5,6)
);

echo "First Matrix is ";
echo "<br>";

$row=count($array1);
$col=count($array1[0]);


for($i=0;$i<$row;$i++){
    for($j=0;$j<$col;$j++){
        echo $array1[$i][$j]." ";
    }
    echo "<br>";
}

echo "<hr>";

echo "Second Matrix is ";
echo "<br>";



for($i=0;$i<$row;$i++){
    for($j=0;$j<$col;$j++){
        echo $array2[$i][$j]." ";
    }
    echo "<br>";
}

echo "<hr>";

echo "Matrix Multiplication is ";
echo "<br>";

$res=array();

for($i=0;$i<$row;$i++){
    for($j=0;$j<$col;$j++){
        $res[$i][$j]=0;

        for($k=0;$k<$row;$k++){
            $res[$i][$j]=$res[$i][$j]+$array1[$i][$k]*$array2[$k][$j];
        }

    }
}


for($i=0;$i<$row;$i++){
    for($j=0;$j<$col;$j++){
        echo $res[$i][$j]." ";
    }
    echo "<br>";
}


?>