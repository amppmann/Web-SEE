<?php 
    

    $filename="test.txt";
    $contents="Document Object Model(DOM) is a programming interface for web documents.It represents the web page asstyles..";


    echo "PHP-File write";
    echo "<br>";

    file_put_contents($filename,$contents);
?>