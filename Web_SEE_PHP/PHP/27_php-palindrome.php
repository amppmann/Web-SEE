<!DOCTYPE html>
<html>
<head>
    <title>PHP-Palindrome</title>
</head>
<body>

    <form  method="post">
        <label for="number">Enter a number</label>
        <input type="number" name="number">
        <br>
        <br>
        <input type="submit" value="submit" name="submit">
        <br>
        <br>
    </form>

    <?php

    if (isset($_POST["submit"])) {
        $number = $_POST["number"];

        function palindrome($num)
        {

            $sum = 0;
            while (floor($num)) {
                $rem = $num % 10;
                $sum = $sum * 10 + $rem;
                $num = $num / 10;
            }
            return $sum;
        }

        $input = $number;
        $result = palindrome($input);
        if ($input == $result) {
            echo $input . " is a palindrome.";
        } else {
            echo $input . " is not a palindrome.";
        }

}

    ?>
    
</body>
</html>