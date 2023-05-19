<!DOCTYPE html>
<html>
<head>
    <title>PHP-Prime Numbers</title>
</head>
<body>
    <h1>Prime Numbers</h1>

    <?php

        function primeNumber($number){

            $n=0;

            for($i=2;$i<($number)/2+1;$i++){

                if($number%$i==0){
                    $n++;
                    break;
                }
            }

            if($n==0){
                echo $number." ";
            }

        }

        $x=0;
        $y=50;

        echo "The prime numbers between ".$x." and ".$y." are\n";

        for($i=$x;$i<$y+1;$i++){
            primeNumber($i);
        }

    ?>

    
</body>
</html>