<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Digital Clock</title>
</head>
<style>
    body{
        background-color:black;
        color:white;
        font-weight: bold;
        display:flex;
        justify-content:center;
        align-items: center;
        height: 90vh;
        font-size: 35px;
    }
</style>
<body>
    <?php

        $date=Date("h:m:s a");
        echo $date;
    ?>

</body>
</html>