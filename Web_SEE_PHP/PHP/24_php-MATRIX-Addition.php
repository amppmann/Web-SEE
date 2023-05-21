<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP-Matrix Addition</title>
</head>
<body>
    <h1>Matrix Addition</h1>

    <?php

    $array1 = array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    );

    $array2 = array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    );

    $row = count($array1);
    $col = count($array1[0]);
    echo "First Matrix ";
    echo "<br>";

    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $col; $j++) {
            echo $array1[$i][$j] . " ";
        }
        echo "<br>";
    }

    echo "<hr>";

    echo "Second Matrix ";
    echo "<br>";

    $row = count($array2);
    $col = count($array2[0]);

    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $col; $j++) {
            echo $array2[$i][$j] . " ";
        }
        echo "<br>";
    }

    echo "<hr>";

    $sum = array();

    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $col; $j++) {
            $sum[$i][$j] = $array1[$i][$j] + $array2[$i][$j];
        }
    }

    $row = count($sum);
    $col = count($sum[0]);

    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $col; $j++) {
            echo $sum[$i][$j] . " ";
        }
        echo "<br>";
    }





    ?>
</body>
</html>