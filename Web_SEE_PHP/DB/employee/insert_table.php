<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "student2";


$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed!" . $conn->connect_error);
}

echo "Database connected successfully";
echo "<hr>";

$sql_insert = "INSERT INTO employee VALUES(1001,'stuart','eee','student',10000,'09-11-2002')";

if ($conn->query($sql_insert) === TRUE) {
    echo "New record inserted successfully";
    echo "<br>";
} else {
    echo "ERROR!Cant insert new record";
    echo "<br>";
}



?>