<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Prime Number-User Input</title>
</head>
<body>
    <h1>Prime numbers</h1>
    <form  method="post">
        <label for="start">Enter the starting range :</label>
        <input type="number" name="start">
        <br>
        <br>
        <label for="end">Enter the ending range :</label>
        <input type="number" name="end">
        <br>
        <br>
        <input type="submit" value="submit" name="submit">
        <br>
        <br>

    </form>

    <?php

    if (isset($_POST["submit"])) {
        $start = $_POST["start"];
        $end = $_POST["end"];

        function primeNumber($number)
        {

            $n = 0;

            for ($i = 2; $i < ($number) / 2 + 1; $i++) {

                if ($number % $i == 0) {
                    $n++;
                    break;
                }
            }

            if ($n == 0) {
                echo $number . " ";
            }
        }

        echo "The Prime Numbers between " . $start . " and " . $end . " are\n";
        for ($i = $start; $i < $end + 1; $i++) {
            primeNumber($i);
        }
    }

    ?>
</body>
</html>