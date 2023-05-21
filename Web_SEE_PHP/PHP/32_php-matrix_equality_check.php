<h1>CHECK WHETHER MATRIX ELEMENTS ARE SAME</h1>

<?php 

$a=array(
    array(1,1,1,1),
    array(2,2,2,2),
    array(3,3,3,3),
    array(4,4,4,4)
);

$b=array(
    array(1,1,1,1),
    array(2,2,2,2),
    array(3,3,3,3),
    array(4,4,4,4)
);

function areSame($A,$B){
    for($i=0;$i<4;$i++)
        for($j=0;$j<4;$j++)
            if($A[$i][$j]!=$B[$i][$j])
                return 0;

    return 1;
}

if(areSame($a,$b)==1){
    echo "Matrices are equal..";
} else {
    echo "Matrices are not equal";
}


?>