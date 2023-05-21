<h1>SUM OF EVEN NUMBERS</h1>
<?php

$number=13;

$sum=0;

for($i=0;$i<=$number;$i++){
    if($i%2==0){
        $sum+=$i;
    }
}

echo "THE SUM : ".$sum;


?>