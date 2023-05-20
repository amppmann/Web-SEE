<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-User input,store in file</title>
</head>

<body>
    <form method="post">
        <h1>User input, store in a file and display the file contents</h1>
        <p> Write a PHP script to accept user input data, store in a text file and display the file contents.</p>
        <label for="file">Enter the filename :</label>
        <input type="text" name="file" required>
        <br>
        <br>
        <label for="message">Enter a message :</label>
        <br>
        <br>
        <textarea type="text" name="message" rows="5" cols="30" required></textarea>
        <br>
        <br>
        <input type="submit" name="submit" value="submit">  
    </form>
    
    <?php

    if(isset($_POST["submit"])){
        $file=$_POST["file"];
        $message=$_POST["message"];

        $file=$file.".txt";

        file_put_contents($file,$message);
        echo "<br>";

        echo "<h1>The contents in file ".$file." are </h1>";
        echo "<br>";
        echo file_get_contents($file);
        echo "<br>";
    }


    ?>
    
</body>

</html>