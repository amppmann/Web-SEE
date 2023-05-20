<?php 

    echo "File Append";
    echo "<br>";

    $filename="append_file.txt";
    $contents="\nThis is a second line of the corresponding file.";


    file_put_contents($filename,$contents,FILE_APPEND);


?>