<!DOCTYPE html>
<html>

<head>
    <title>PHP-File Extension</title>
</head>
<style>

</style>

<body>
    <h1>PHP - File Extension</h1>
    <p>Write a PHP script that accepts filename, extension, text
        content and writes into file.
    </p>
    <form method="post">
        <label for="filename">Enter the filename :</label>
        <input type="text" name="filename" required>
        <br>
        <br>
        <label for="extension">Select the extension type</label>
        <select name="extension">
            <option value="txt" selected>txt</option>
            <option value="doc">doc</option>
            <option value="docx">docx</option>
            <option value="js">js</option>
            <option value="html">html</option>
            <option value="css">css</option>
        </select>
        <br>
        <br>
        <label for="contents">Enter the contents :</label>
        <br>
        <textarea name="contents" rows="6" cols="50" required></textarea>
        <br>
        <br>
        <input type="submit" name="submit" value="submit">
    </form>

    <?php 

        if(isset($_POST["submit"])){

            
            $filename=$_POST["filename"];
            $extension=$_POST["extension"];
            $contents=$_POST["contents"];
            $filename_extension=$filename.".".$extension;

            "File : ".$filename_extension." created successfully";

            if(file_exists($filename_extension)){
                die("Sorry! This file already exists..!");
            } else {
                file_put_contents($filename_extension,$contents);
                echo "The File contents are ";
                echo "<br>";
                echo file_get_contents($filename_extension);
            }
        }
    ?>
</body>

</html>