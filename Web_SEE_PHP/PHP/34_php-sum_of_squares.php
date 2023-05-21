
<h1>SUM OF SQUARES</h1>
<?php

function sumOfSq($number){

    $sq=0;
    $sum=0;

    for($i=0;$i<=$number;$i++){
        $sq=$i*$i;
        $sum+=$sq;
    }
    return $sum;
}

$value=4;
echo "THE SUM OF SQUARES : ".sumOfSq($value);

?>