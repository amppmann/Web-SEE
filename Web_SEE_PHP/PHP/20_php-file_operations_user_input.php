<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-File Operations-User Input</title>
</head>
<body>
    <h1>File Operation - User Input</h1>
    <form method="post">
        <label for="filename">Enter the filename to be appended :</label>
        <input type="text" name="filename" required>
        <br>
        <br>
        <label for="message">Enter the message to be appended :</label>
        <input type="text" name="message" required>
        <br>
        <br>
        <input type="submit" value="submit" name="submit">
        <br>
        <br>
    </form>

    <?php
        if(isset($_POST["submit"])){
            $filename=$_POST["filename"];
            $message=$_POST["message"];
            $filename=$filename.".txt";

            if(file_exists($filename)){
                
                file_put_contents($filename,$message,FILE_APPEND);
            } else{
                die("SORRY! FILE DOESN'T EXISTS..");
            }
        }
    ?>
    
</body>
</html>