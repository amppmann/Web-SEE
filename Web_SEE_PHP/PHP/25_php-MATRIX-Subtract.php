<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP-Matrix Subtraction</title>
</head>
<body>
    <h1>Matrix Subtraction</h1>

    <?php

    $array1 = array(
        array(1, 2, 3),
        array(3, 4, 5),
        array(4, 5, 6)
    );

    $array2 = array(
        array(2, 3, 4),
        array(3, 4, 5),
        array(4, 5, 6)
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

    $subtract = array();

    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $col; $j++) {
            $subtract[$i][$j] = $array1[$i][$j] - $array2[$i][$j];
        }
    }

    $row = count($subtract);
    $col = count($subtract[0]);

    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $col; $j++) {
            echo $subtract[$i][$j] . " ";
        }
        echo "<br>";
    }





    ?>
</body>
</html>